<?php

require_once "../utls/db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = password_hash($_POST['password'] ?? '',PASSWORD_DEFAULT); //encrypts password
$dob = $_POST['dob'] ?? '';
$favorite_color= $_POST['color'] ?? '';
$gender = $_POST['gender'] ?? '';
$weight = $_POST['weight'] ??'';
$hobbies = implode(",",$_POST['hobbies'] ?? []);
$nationality = $_POST['nationality'] ?? '';



$sql = "UPDATE students SET name ='name$',password ='$password',email = '$email',dob='$dob',favorite_color='$favorite_color',weight='$weight', gender='$gender', hobbies='$hobbies', nationality = '$nationality' where email='$email';";


if ($conn->query($sql)==TRUE)
{
      die ("success");
}else
{
    die("error");
}

//implode
//explode
//exam ma auxa
?>