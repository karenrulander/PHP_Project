<?php
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipcode = $_POST["zipcode"];
$jerseynumber = $_POST["jerseynumber"];
$UniformSize = $_POST["UniformSize"];

echo $firstName . "\n";
echo $lastName . "\n";


// Message to user.


echo " <div>";
echo "<h1>  $firstName Has Been Added. </h1>";
echo "</div>";
?>
