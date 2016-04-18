
<?php
       $conn = mysql_connect("localhost","root","") or die("Could not connect: " . mysql_error());
       mysql_select_db("pizza");
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

echo $JSONdata;
file_put_contents('records.json', $JSONdata);

?>
