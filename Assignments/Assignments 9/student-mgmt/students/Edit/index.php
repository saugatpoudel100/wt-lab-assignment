<?php
         
    include_once "../utls/db.php";

    ?>

<!DOCTYPE html>
<html lang="en">  

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
        <?php
                    $sql = "SELECT * FROM students";

                    $id = $_POST['id'];

                    $sql = "SELECT * FROM students WHERE students.id = '$id'";

                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        $students = $result->fetch_assoc();
                        ?> 

    <form method="post" action="../save/" enctype="multipart/form-data">
        <!--html le by default dina dinna ani maile jabar jasti pathauna lai enctype...use garnu parxa-->
        <div class="form-group">
              <input type="hidden" class="form-control" id="name" name="id" value="<?= $students['id']; ?>" >
            <label for="name">Name</label>
            
            <!--for "name" name ma click garda tyo box ma focus gardinxa laide jasto-->
            <input type="text" id="name" placeholder="Enter name" value="<?= $students['name']?>" name="name">
        </div>
        <!--div hanesi br br hanna pardaina-->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="xyz@gmail.com" name="email" value="<?= $students['email'] ?>">

        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="*********" name="password">

        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <!--Form ra id ma yautai huna parxa-->
            <input type="date" id="dob" name="dob" value="<?= $students['dob'] ?>">
        </div>
        <div class="form-group">
            <label for="favorite_color">Favourite colour</label>
            <input type="color" id="favorite_color" name="color" value="<?= $students['favorite_color'] ?>">
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" id="weight" name="weight" value="<?= $students['weight'] ?>">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <!--male ra female lai duitai lai tick garni banauna namilne lai name use pani garinxa-->
            <label for="male">Male</label>
            <input type="radio" id="male"  value="male" name="gender"<?php if ($students['gender'] == 'male') {
                                                    echo "checked";
                                                } ?>>
            <label for="female">Female</label>
            <input type="radio" id="female" value="female" name="gender"<?php if ($students['gender'] == 'female') {
                                                    echo "checked";
                                                } ?>>
            <label for="others">Others</label>
            <input type="radio" id="other" value="other" name="gender"<?php if ($students['gender'] == 'other') {
                                                    echo "checked";
                                                } ?>>
        </div>
        <div class="form-group">
            <label>Hobbies:</label>
            <label for="travelling">Travelling</label>
            <input type="checkbox" id="travelling"  value="travelling" name="hobbies[]">
            <label for="music">Music</label>
            <input type="checkbox" id="music" value="music" name="hobbies[]">
            <label for="hobbies">Footsal</label>
            <input type="checkbox" id="Footsal" value="Footsal" name="hobbies[]">
            <label for="readingBooks">Reading Books</label>
            <input type="checkbox" id="readingBooks" value="readingBooks" name="hobbies[]">
        </div>
        <div class="form-group">
            <label for="nationality">Nationality:</label>
            <select name="nationality">
                <option value="NP" <?php if ($students['nationality'] == 'NP') {
                                                                echo "selected";
                                                            } ?>>Nepal</option>
                <option value="IND" <?php if ($students['nationality'] == 'IND') {
                                                                echo "selected";
                                                            } ?>>India</option>
                <option value="CH" <?php if ($students['nationality'] == 'CH') {
                                                                echo "selected";
                                                            } ?>>China</option>
                <option value="RUS" <?php if ($students['nationality'] == 'RUS') {
                                                                echo "selected";
                                                            } ?>>Russia</option>
            </select>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <input type="file" id="profile" accept="image/png" name="image" />
            </div>
            <div class="form-group">
                
                <button type="submit" name="update">Update</button>

                <input type="reset" value="cancel">
                <!--never rely on client side-->
            </div>
    </form> <?php
                    } else {
                        echo "no records found";
                    }
                    ?>

    <!--pathauni method define garena vane default(getMethod)use garxa-->
</body>

</html>