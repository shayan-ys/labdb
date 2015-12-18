<?php

require_once 'vendor/fzaninotto/faker/src/autoload.php';

$faker = Faker\Factory::create();
echo $faker->name."<br>";
echo $faker->numberBetween(5,25)."<br>";
echo $faker->address."<br>";
echo $faker->text."<br>";
echo $faker->email."<br>";


$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "labdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//$sql = "INSERT INTO patient (`name`,email,`password`,birthday,gender,last_visit) VALUES";
//for($index=0; $index<50; $index++){
//    $subQuery =
//        " '".$faker->name."' , ".
//        " '".$faker->email."' , ".
//        " '".$faker->numberBetween(1000,9999)."' , ".
//        " '".$faker->date()."' , ".
//        " '".$faker->numberBetween(0,1)."' , ".
//        " NOW() " ;
//    $sql .= "(".$subQuery."),\n";
//}
//echo "<pre>";
//echo $sql;
//$result = $conn->query($sql);

$sql = "INSERT INTO doctor (`name`,email,`password`,`specialty`) VALUES";
for($index=0; $index<50; $index++){
    $subQuery =
        " '".$faker->name."' , ".
        " '".$faker->email."' , ".
        " '".$faker->numberBetween(1000,9999)."' , ".
        " '".$faker->firstNameMale."' ";
    $sql .= "(".$subQuery."),\n";
}
$sql = substr($sql, 0, -2);
echo "<pre>";
echo $sql;

$result = $conn->query($sql);
var_dump($result);

$conn->close();