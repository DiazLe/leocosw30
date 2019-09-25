<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Population Table</title>
        <style>
            body{
                background-color:#c2e2c3;
            }
            
            p{
                text-align:center;
                font-size:20px;
            }
            
            table, th, td {
              border: 2px solid black;
              font-size:24px;
              margin: 5% auto;
              background-color:white;
            }
            
            th, td {
              padding: 5px;
              text-align: center;    
            }
        </style>
    </head>
    <body>
                <p><a href="quote.html">Quote Page</a></p>
        <table> <!--First Table by population (high to low)-->
            <thead>
                <tr>
                    <th colspan="3"><h2>The 15 Most Populous Cities as of July 1, 2017</h2></th>
                </tr>
                <tr>
                    <th>Rank</th>
                    <th>City, State</th>
                    <th>2017 Total Population</th>
                </tr>
             </thead>
             <tbody>
        
        <?php
        
            //Create array
                $cstate = [
                   'New York, New York'=> 8622698,
                   'Los Angeles, California' => 3999759,
                   'Chicago, Illinois' => 2716450,
                   'Houston, Texas' => 2312717,
                   'Phoenix, Arizona' => 1626078,
                   'Philadelphia, Pennsylvania' => 1580863,
                   'San Antonio, Texas' => 1511946,
                   'San Diego, California' => 1419516,
                   'Dallas, Texas' => 1511946,
                   'San Jose, California' => 1035317,
                   'Austin, Texas' => 950715,
                   'Jacksonville, Florida' => 892062,
                   'San Francisco' => 884363,
                   'Columbus' => 879170,
                   'Fort Worth' => 874168];
                   
               
               $i = 1; 
                  while($i<=count($cstate))
                 { foreach($cstate as $state => $population){                               
                              echo  "<tr><td>$i</td>
                                      <td>$state</td>"
                                   .  "<td>" .  number_format($population).  "</td></tr>";$i++;}} 
                                   
                   ?>
                   
            </tbody>
        </table>
        <!--Second table alphabetized by city-->
         <table>
            <thead>
                <tr>
                    <th colspan="3"><h2>The 15 Most Populous Cities as of July 1, 2017 by CityName</h2></th>
                </tr>
                <tr>
                    <th>Rank</th>
                    <th>City, State</th>
                    <th>2017 Total Population</th>
                </tr>
             </thead>
             <tbody>
        
        <?php
        //Create array
                $cstate = [
                   'New York, New York'=> 8622698,
                   'Los Angeles, California' => 3999759,
                   'Chicago, Illinois' => 2716450,
                   'Houston, Texas' => 2312717,
                   'Phoenix, Arizona' => 1626078,
                   'Philadelphia, Pennsylvania' => 1580863,
                   'San Antonio, Texas' => 1511946,
                   'San Diego, California' => 1419516,
                   'Dallas, Texas' => 1511946,
                   'San Jose, California' => 1035317,
                   'Austin, Texas' => 950715,
                   'Jacksonville, Florida' => 892062,
                   'San Francisco' => 884363,
                   'Columbus' => 879170,
                   'Fort Worth' => 874168];
                
              #sort by ascending order/alphabetized
              ksort($cstate);
           
             $i = 1; 
                  while($i<=count($cstate))
                 { foreach($cstate as $state => $population){                               
                             echo  "<tr><td>$i</td>
                                    <td>$state</td>"
                                   .  "<td>" .  number_format($population).  "</td></tr>";$i++;}} 
       
                                   
        ?>
            </tbody>
        </table>
    </body>
</html>