<?php
$name = ["ANil","Bisahal", "Rohit" , "DEV"];

$age =array( 30,24,21,90);

echo $name[0];
echo "<br/>";
echo $name[1];
echo "<br/>";

echo $age[0];
echo "<br/>";
echo $age[1];
echo "<br/>";


// single associative array
$student = [
    "anil" => 30,
    "bishal" => 40,
    "rahul" =>30,

];

echo  $student["bishal"];


echo "ioop==";

foreach($students as $name => $roll){
    echo "the roll no of $name is $roll";
    echo "<br/>";
}

?>