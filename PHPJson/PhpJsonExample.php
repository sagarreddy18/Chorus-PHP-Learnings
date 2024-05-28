<?php
$myObj = new stdClass();
$myObj->name = "John";
$myObj->age = 30;
$myObj->city = "New York";

// $myArr = array("John", "Mary", "Peter", "Sally");     Array Example.....
// $arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
// echo json_encode($arr);
// $myJSON = json_encode($myArr);
// echo $myJSON;

$myJSON = json_encode($myObj);     //Objects in PHP can be converted into JSON by using the PHP function.....

echo $myJSON;
?>
