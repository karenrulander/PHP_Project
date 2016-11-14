<?php
// to connect to a MySQL Database
// Database Name: terry (on locahost using MAMP and PHPMyAdmin)

// use a try/catch block to catch any errors that might occur.

try {
  $db = new PDO("mysql:host=localhost;dbname=terry;port=3306","root","root");
  $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully to Terry's database.";
} catch (Exception $e) {
  echo "Unable to connect to Terry's database";
//  echo $e->getmessage();
  exit;
}
/*

try {
  $sql = "SELECT lastName, firstName FROM roster ";
  $results = $db->query($sql);
  $final = $results->fetchAll();
  echo 'Roster Query Executed.' . PHP_EOL;
  echo "Results:  ";
  var_dump($final);
} catch (Exception $e) {
  echo "Bad Query: Unable to retrieve roster.";
}

echo  "Team Roster:  " . PHP_EOL;
$output = '<ul class="rosterList">';

foreach ($final as $row) {
  echo $row['firstName'] . ' ' .  $row['lastName'] . PHP_EOL;
$output .="<li>" . $row['firstName'] . ' ' . $row['lastName'] . "</p>";
}
$output.="</ul>";
echo "Team Roster - output". PHP_EOL;

echo $output;
*/
