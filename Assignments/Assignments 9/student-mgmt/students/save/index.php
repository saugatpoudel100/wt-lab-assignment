<?php

require_once "../utls/db.php";

if (isset($_POST['submit'])) {

    if (isset($_FILES['profile'])) {
        $errors = array();

        $file_name = $_FILES['profile']['name'];

        $file_size = $_FILES['profile']['size'];

        $file_tmp = $_FILES['profile']['tmp_name'];
        $file_type = $_FILES['profile']['type'];

        $file_ext = end(explode('.', $file_name));



        $extensions = array("png");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "This extension file not allowed, Please choose a png file.";
        }


        $new_name = time() . "-" . basename($file_name);
        $target = "../Imge/" . $new_name;

        if (
            empty($errors) == true
        ) {
            move_uploaded_file($file_tmp, $target);
        } else {
            print_r($errors);
            die();
        }
    }



            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = password_hash($_POST['password'] ?? '',PASSWORD_DEFAULT); //encrypts password
            $dob = $_POST['dob'] ?? '';
            $favorite_color = $_POST['color'] ?? '';
            $gender = $_POST['gender'] ?? '';
            $weight = $_POST['weight'] ??'';
            $hobbies = implode(",",$_POST['hobbies'] ?? []);
            $nationality = $_POST['nationality'] ?? '';
            


            $sql = "INSERT INTO students (name, email, password, dob, favorite_color, weight, gender, hobbies, nationality,profile)
            VALUES ('$name', '$email', '$password', '$dob', '$favorite_color', '$weight', '$gender', '$hobbies', '$nationality','$new_name ')";


        if ($conn->query($sql)==TRUE)
        {
               header('Location:../?success=sucess');//die ("success");
        }else
        {
            die("error");
        }
}
if (isset($_POST['update'])) {





    $id = $_POST['id'] ?? ' ';


    
            $name = $_POST['name'] ?? '';
            $email = $_POST['email'] ?? '';
            $password = password_hash($_POST['password'] ?? '',PASSWORD_DEFAULT); //encrypts password
            $dob = $_POST['dob'] ?? '';
            $color = $_POST['color'] ?? '';
            $gender = $_POST['gender'] ?? '';
            $weight = $_POST['weight'] ??'';
            $hobbies = implode(",",$_POST['hobbies'] ?? []);
            $nationality = $_POST['nationality'] ?? '';




    $sql = "UPDATE students SET name='$name',email='$email',password='$password',dob='$dob',favorite_color='$color',weight=$weight,gender='$gender',hobbies='$hobbies',nationality='$nationality' WHERE id='$id'";









    if ($conn->query($sql) == TRUE) {
        // die("SUCESS");
        header('Location:../?sucess=sucess');
        // echo "<p>Sucess</p>";
    } else {
        header('Location:../?sucess=error');
    }
}

//implode
//explode
//exam ma auxa
?>