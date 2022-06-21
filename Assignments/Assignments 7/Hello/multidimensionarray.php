<?php
// multi dimensional array
$names =[["rahul",1],["anil",2],["rohit",3]];

echo $name[0][1];
echo $name[1][0];
echo $name[1][1];


//multi dimensional associative array

$persons = [
    [
        "name" =>"rahul",
        "roll" =>1
    ],
    [
        "name" => "anil";
        "roll" => 2
    ],
    [
        "name" => "bishal",
        "roll"=>3
    ],


];

echo " $person[0]["name"];

echo " $person[0]["roll"];

echo " $person[1]["name"];

echo " $person[1]["roll"];

echo " $person[2]["name"];

echo " $person[2]["roll"];

?>