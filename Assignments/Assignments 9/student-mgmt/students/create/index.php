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
    <form method="post" action="../save/" enctype="multipart/form-data">
        <!--html le by default dina dinna ani maile jabar jasti pathauna lai enctype...use garnu parxa-->
        <div class="form-group">
            <label for="name">Name</label>
            <!--for "name" name ma click garda tyo box ma focus gardinxa laide jasto-->
            <input type="text" id="name" placeholder="Enter name" value="" name="name">
        </div>
        <!--div hanesi br br hanna pardaina-->
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="xyz@gmail.com" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="*********" name="password">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <!--Form ra id ma yautai huna parxa-->
            <input type="date" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label for="favourite-color">Favourite colour</label>
            <input type="color" id="favourite-color" name="color">
        </div>
        <div class="form-group">
            <label for="weight">Weight:</label>
            <input type="number" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label>
            <!--male ra female lai duitai lai tick garni banauna namilne lai name use pani garinxa-->
            <label for="male">Male</label>
            <input type="radio" id="male"  value="male" name="gender">
            <label for="female">Female</label>
            <input type="radio" id="female" value="female" name="gender">
            <label for="others">Others</label>
            <input type="radio" id="other" value="other" name="gender">
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
                <option value="NP" >Nepal</option>
                <option value="IND" >India</option>
                <option value="CH" >China</option>
                <option value="RUS" >Russia</option>
            </select>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <input type="file" id="profile" accept="image/png" name="profile" />
            </div>
            <div class="form-group">
                <button type="submit" name="submit">Submit</button>
                
                <input type="reset" value="cancel">
                <!--never rely on client side-->
            </div>
    </form>
    <!--pathauni method define garena vane default(getMethod)use garxa-->
</body>
</html>