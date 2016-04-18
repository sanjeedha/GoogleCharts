<html>
     <head>
        <title> Pizza Order Profile</title>
        
     <style>
    
         #heading{
             padding-bottom: 40px;
             font-size: 1.833333333em
             font-style: normal;
             font-family: DominosFont, 'Arial Narrow', Arial, Helvetica, sans-serif;
             font-style: normal;
             text-transform: uppercase;
             color: #0078ae;
         }
                  
         .card--overlay {
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            width: 1300px;
            margin: 1.25em auto;
            padding-left: 1.25em;
            padding-bottom: 20em; 
            position: relative;
            overflow: hidden;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 2px 5px #333;
            background-color: #fff;
        }

         h2{
             padding-top: 30px;
         }


         body {
            text-align: center;
            padding-top: 100px;
            background: black;
            font-family: DominosFont, 'Arial Narrow', Arial, Helvetica, sans-serif;
         }

        .breadcrumb {
            /*centering*/
            display: inline-block;
            overflow: hidden;
            border-radius: 40px;
            /*Lets add the numbers for each link using CSS counters. flag is the name of the counter. to be defined using counter-reset in the parent element of the links*/
            counter-reset: flag; 
        }

        .breadcrumb a {
            text-decoration: none;
            outline: none;
            display: block;
            float: left;
            font-size: 20px;
            line-height: 36px;
            color: white;
            /*need more margin on the left of links to accomodate the numbers*/
            padding: 12px 40px 20px 80px;

            background: -webkit-linear-gradient(top,#0078ae 0,#005e89 100%);
            position: relative;
        }
        .breadcrumb a:first-child {
            padding-left: 46px;
            border-radius: 10px 0px 0px 0px; /*to match with the parent's radius*/
        }
        .breadcrumb a:first-child:before {
            left: 14px;
        }
        .breadcrumb a:last-child {
            border-radius: 0 5px 5px 0; /*this was to prevent glitches on hover*/
            padding-right: 40px;
        }

        .breadcrumb a.active, .breadcrumb a:hover{

            background: #f24537;
        }
        .breadcrumb a.active:after, .breadcrumb a:hover:after {
            background: #f24537;

        }

        .breadcrumb a:after {
            content: '';
            position: absolute;
            top: 15; 
            right: -18px; 
            width: 40px; 
            height: 36px;
            transform: scale(1.35) rotate(45deg);
            z-index: 1;
            background: -webkit-linear-gradient(top,#0078ae 0,#005e89 100%);
            box-shadow: 
                2px -2px 0 2px rgba(0, 0, 0, 0.4), 
                3px -3px 0 2px rgba(255, 255, 255, 0.1);
            border-radius: 0 0px 0 50px;
        }

        .breadcrumb a:last-child:after {
            content: none;
        }
         td{
             padding-left: 20px;
             padding-top: 10px;
             padding-right: 20px;
             width: 400px;
             padding-bottom: 30px;
             font-family: sans-serif;
         }
         #pizbody{
             background: #E6E6E6;
             margin-left: 70px;
             border-radius: 10px;
             width:1120px;
             height:1100px;
         }
         th{
             padding-right: 200px;
            
            
         }
         li{
            list-style-type: none;
         }
         
          
        
        .myButton {
            -moz-box-shadow:inset 0px 0px 0px 0px #f5978e;
            -webkit-box-shadow:inset 0px 0px 0px 0px #f5978e;
            box-shadow:inset 0px 0px 0px 0px #f5978e;
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f24537), color-stop(1, #c62d1f));
            background:-moz-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background:-webkit-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background:-o-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background:-ms-linear-gradient(top, #f24537 5%, #c62d1f 100%);
            background:linear-gradient(to bottom, #f24537 5%, #c62d1f 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f24537', endColorstr='#c62d1f',GradientType=0);
            background-color:#f24537;
            -moz-border-radius:24px;
            -webkit-border-radius:24px;
            border-radius:24px;
            border:3px solid #d02718;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Arial;
            font-size:20px;
            font-weight:bold;
            padding:13px 63px;
            text-decoration:none;
            text-shadow:0px 1px 0px #810e05;
         }
        .myButton:hover {
            background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #c62d1f), color-stop(1, #f24537));
            background:-moz-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background:-webkit-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background:-o-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background:-ms-linear-gradient(top, #c62d1f 5%, #f24537 100%);
            background:linear-gradient(to bottom, #c62d1f 5%, #f24537 100%);
            filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#c62d1f', endColorstr='#f24537',GradientType=0);
            background-color:#c62d1f;
         }
        .myButton:active {
            margin-top:1000px;
         }
         button{
            margin-right: 40px;
         }
         img{
            margin-right: 20px;
         }

         #type{
            display:none;
         }
         #border{
             padding-bottom:300px;
         }
         #pad{
             padding-bottom: 400px;
         }
         #first{
             padding-top: 23px;
             padding-bottom: 270px;
         }
         
         .pepperoni{
             display:none;
         }
         .italian{
             display:none;
         }
         .sliced{
             display:none;
         }
         .beef{
             display:none;
         }
         .philly{
             display:none;
         }
         .ham{
             display:none;
         }
         .bacon{
             display:none;
         }
         .salami{
             display:none;
         }
         .chicken{
             display:none;
         }
         .ccheese
         {
             display:none;
         }
         .fcheese
         {
             display:none;
         }
         .sparmesian
         {
             display:none;
         }
         .sprovolone
         {
             display:none;
         }
         .bpeppers
         {
             display:none;
         }
         .olives
         {
             display:none;
         }
         .garlic
         {
             display:none;
         }
         .gpeppers
         {
             display:none;
         }
         .jpeppers
         {
             display:none;
         }
         .hotsauce
         {
             display:none;
         }
         .dtomato
         {
             display:none;
         }
         .tomatoes
         {
             display:none;
         }
         .spinach
         {
             display:none;
         }
         .rpeppers
         {
             display:none;
         }
         .onions
         {
             display:none;
         }
         .pineapple
         {
             display:none;
         }
         .mushroom
         {
             display:none;
         }
     </style>   
        
     </head>
    
    
    
    <body>
        
        <form method="post" action="pizza.php">
        <div id = "first" class = "card--overlay" >
            <div id = "heading">
                <h1>Pizza Builder</h1>
            </div>
            <div class="breadcrumb">
                <a href="index.html" class="active">SIZE AND CRUST</a>
                <a href="cheese.html" class="active">CHEESE AND SAUCE</a>
                <a href="#" class="active">TOPPINGS</a>
            </div>
            <div id = "pizbody">
                <div>
                    <h2>CHOOSE TOPPINGS</h2>
                    <table>
                        <tr>
                        <th>CHOOSE MEATS</th>
                        <th>CHOOSE NON-MEATS</th>
                        </tr>
                        <tr>
                            <td id="border">
                                <ul>
                                    <li><input id="meat" type="checkbox" name="meat" value="pepperoni"> Pepperoni</li>
                                    <br/>
                                    <img class="pepperoni" src="image1.png"/>
                                    <select class="pepperoni">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                 <ul>
                                    <li><input id="isausage" type="checkbox" name="meat" value="italiansausage"> Italian Sausage</li>
                                    <br/>
                                    <img class="italian" src="image1.png"/>
                                    <select class="italian">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="ssausage" type="checkbox" name="meat" value="slicedsausage"> Sliced Italian Sausage</li>
                                    <br/>
                                    <img class="sliced" src="image1.png"/>
                                    <select class="sliced">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="beefy"type="checkbox" name="meat" value="beef"> Beef</li>
                                    <br/>
                                    <img class="beef" src="image1.png"/>
                                    <select class="beef">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="psteak" type="checkbox" name="meat" value="steak"> Philly Steak</li>
                                    <br/>
                                    <img class="philly" src="image1.png"/>
                                    <select class="philly">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="hamy" type="checkbox" name="meat" value="ham">Ham</li>
                                    <br/>
                                    <img class="ham" src="image1.png"/>
                                    <select class="ham">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="bac" type="checkbox" name="meat" value="bacon"> Bacon</li>
                                    <br/>
                                    <img class="bacon" src="image1.png"/>
                                    <select class="bacon">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="sal" type="checkbox" name="meat" value="salami"> Salami</li>
                                    <br/>
                                    <img class="salami" src="image1.png"/>
                                    <select class="salami">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="chick" type="checkbox" name="meat" value="chicken"> Premium Chicken</li>
                                    <br/>
                                    <img class="chicken" src="image1.png"/>
                                    <select class="chicken">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                            </td>
                            
                            
                            
                            
                            <td id="pad">
                                <ul>
                                    <li><input id="cheddar" type="checkbox" name="nonmeat" value="cheddar"> Cheddar Cheese</li>
                                    <br/>
                                    <img class="ccheese" src="image1.png"/>
                                    <select class="ccheese">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="feta" type="checkbox" name="nonmeat" value="feta">Feta Cheese</li>
                                    <br/>
                                    <img class="fcheese" src="image1.png"/>
                                    <select class="fcheese">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="parmesian" type="checkbox" name="nonmeat" value="parmesian"> Shredded Parmesian Asiago</li>
                                    <br/>
                                    <img class="sparmesian" src="image1.png"/>
                                    <select class="sparmesian">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="provolone" type="checkbox" name="nonmeat" value="provolone"> Shredded Provolone Cheese</li>
                                    <br/>
                                    <img class="sprovolone" src="image1.png"/>
                                    <select class="sprovolone">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="banana" type="checkbox" name="nonmeat" value="banana"> Banana Peppers</li>
                                    <br/>
                                    <img class="bpeppers" src="image1.png"/>
                                    <select class="bpeppers">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="black" type="checkbox" name="nonmeat" value="olives"> Black Olives</li>
                                    <br/>
                                    <img class="olives" src="image1.png"/>
                                    <select class="olives">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="gar" type="checkbox" name="nonmeat" value="garlic"> Garlic</li>
                                    <br/>
                                    <img class="garlic" src="image1.png"/>
                                    <select class="garlic">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                            </td>
                            <td id="first">
                                <ul>
                                    <li><input id="green" type="checkbox" name="nonmeat" value="greenpepper"> Green Peppers</li>
                                    <br/>
                                    <img class="gpeppers" src="image1.png"/>
                                    <select class="gpeppers">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="jalapeno" type="checkbox" name="nonmeat" value="jalapeno"> Jalapeno Peppers</li>
                                    <br/>
                                    <img class="jpeppers" src="image1.png"/>
                                    <select class="jpeppers">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="mush" type="checkbox" name="nonmeat" value="mushrooms"> Mushrooms</li>
                                    <br/>
                                    <img class="mushroom" src="image1.png"/>
                                    <select class="mushroom">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="pine" type="checkbox" name="nonmeat" value="pineapple"> Pineapple</li>
                                    <br/>
                                    <img class="pineapple" src="image1.png"/>
                                    <select class="pineapple">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="onion" type="checkbox" name="nonmeat" value="onions"> Onions</li>
                                    <br/>
                                    <img class="onions" src="image1.png"/>
                                    <select class="onions">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="roasted" type="checkbox" name="nonmeat" value="roastedred"> Roasted Red Peppers</li>
                                    <br/>
                                    <img class="rpeppers" src="image1.png"/>
                                    <select class="rpeppers">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="spi" type="checkbox" name="nonmeat" value="spinach"> Spinach</li>
                                    <br/>
                                    <img class="spinach" src="image1.png"/>
                                    <select class="spinach">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="tomato" type="checkbox" name="nonmeat" value="tomatoes"> Tomatoes</li>
                                    <br/>
                                    <img class="tomatoes" src="image1.png"/>
                                    <select class="tomatoes" >
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="diced" type="checkbox" name="nonmeat" value="dicedtomatoes"> Diced Tomatoes</li>
                                    <br/>
                                    <img class="dtomato" src="image1.png"/>
                                    <select class="dtomato" >
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                                <ul>
                                    <li><input id="hot" type="checkbox" name="nonmeat" value="hotsauce"> Hot Sauce</li>
                                    <br/>
                                    <img class="hotsauce" src="image1.png"/>
                                    <select class="hotsauce">
                                      <option value="normal">Normal</option>
                                      <option value="light">Light</option>
                                      <option value="extra">Extra</option>
                                      <option value="double">Double</option>
                                      <option value="triple">Triple</option>
                                    </select>
                                </ul>
                            </td>
                        </tr>  
                 
        </table>
                </div>
                        <input type="submit" value="submit"/>
<!--                    <button type="submit" class="myButton">BUILD</button>-->
<!--                    <button id="cancel" class="myButton" type="cancel">CANCEL</button>-->
                
                </div>
        </div>
    <script src="jquery-1.11.0.min.js" type="text/javascript"></script>    
    <script src="script.js" type="text/javascript"></script>
        </form>
    </body>
</html>