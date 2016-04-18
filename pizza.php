<html>
  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">   
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart','sankey']});
      
    // Set a callback to run when the Google Visualization API is loaded.
    google.charts.setOnLoadCallback(drawChart);

    
    function drawChart() {
      var jsonData = $.ajax({
          url: "getData.php",
          dataType: "json",
          async: false
          }).responseText;
      var data = new google.visualization.DataTable(jsonData);
      //  // Create our data table out of JSON data loaded from server.
      

      var options = {
          title: 'My Toppings',
          titleFontSize:30,
          is3D: true,
          width: 700, 
          height: 440,
          legend: {'position':'labeled','alignment':'right'}
        };
      // Instantiate and draw our chart, passing in some options.
      
      var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
      chart.draw(data, options);



       var jsonData1 = $.ajax({
                url: "getData1.php",
                dataType: "json",
                async: false
                }).responseText;
            var data1 = new google.visualization.DataTable(jsonData1);
            var options1 = {
                title: 'My Orders',
                titleFontSize:30,
                width: 700,
                height: 340
              };
            var chart1 = new google.visualization.Sankey(document.getElementById('sankey_basic'));
            chart1.draw(data1, options1);
        
    }
                
    </script>

    <?php

  if(!empty($_POST))
   {
       $top = "";
       $conn = mysql_connect("localhost","root","") or die("Could not connect: " . mysql_error());
       mysql_select_db("pizza");
       foreach ($_POST as $key => $value){
           $query ="INSERT INTO `toppings` (`top_name`,`total`) VALUES('$value','1') ON DUPLICATE KEY UPDATE total=total+1";
           $result = mysql_query($query);
           $top = $value . ", " . $top; 
       }
      $sth = mysql_query("SELECT top_name,total FROM toppings");
      $JSONdata = "{
           \"cols\": [
               {\"label\":\"Toppings\",\"type\":\"string\"},
               {\"label\":\"Total\",\"type\":\"number\"}
             ],
        \"rows\": [";

      //loop through the db query result set and put into the chart cell values
      while($r = mysql_fetch_assoc($sth)) {
      $JSONdata .= "{\"c\":[{\"v\": \"".htmlentities($r['top_name'])."\"}, {\"v\": ".$r['total']."}]},";

      }    

      //end the json data/object literal with the correct syntax
      $JSONdata .= "]}";

      //echo $JSONdata;
      file_put_contents('records.json', $JSONdata);
      
    //Sankey diagram
       $ids = array_values($_POST);
        //$ids = array('banana peppers', 'pineapple', 'mushroom');
        $out = array();

        while ($item = array_shift($ids)) {
            foreach ($ids as $key=>$value) {
                $out[] = array($item, $value);
            }
        }

        // print_r($out);

        foreach($out as $key=>$value) {
           // echo($value[0] . ", " . $value[1] . "\r\n");
          //  "Insert into tablename (item1, item2) values ($value[0], $value[1])"
              $query1 = "INSERT INTO `items` (`top1`,`top2`) VALUES ('$value[0]','$value[1]')";
              $result = mysql_query($query1); 
        }   
        $query2 = mysql_query("SELECT top1,top2,COUNT(*) AS weight FROM `items` GROUP BY top1,top2");
        $JSONdata = "{
             \"cols\": [
                 {\"label\":\"Top1\",\"type\":\"string\"},
                 {\"label\":\"Top2\",\"type\":\"string\"},
                 {\"label\":\"weight\",\"type\":\"number\"}
               ],
          \"rows\": [";

        //loop through the db query result set and put into the chart cell values
        while($r = mysql_fetch_assoc($query2)) {
        $JSONdata .= "{\"c\":[{\"v\": \"".htmlentities($r['top1'])."\"},{\"v\": \"".htmlentities($r['top2'])."\"}, {\"v\": ".$r['weight']."}]},";

        }    

        //end the json data/object literal with the correct syntax
        $JSONdata .= "]}";

        //echo $JSONdata;
        file_put_contents('records1.json', $JSONdata);







  }
   

?>
      <style>
          #chart_div{
              margin-left: 300px;
          }
          #sankey_basic{
              margin-left: 300px;
          }
          h1{
              margin-top: 50px;
              margin-left: 500px;
              font-weight:normal;color:#FFFFFF;letter-spacing:1pt;word-spacing:2pt;font-size:12px;text-align:left;font-family:helvetica, sans-serif;line-height:1;
              font-size: 3em;
          } 
          body {
              background: ##529fde;
              background-image: url("back.jpg");
              }
      </style>
      <title>GOOGLE CHARTS</title>
     <h1>PIE CHART</h1>
  </head>

  <body>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>
    <h1>SANKEY CHART</h1>
    <div id="sankey_basic"></div>
  </body>
</html>
