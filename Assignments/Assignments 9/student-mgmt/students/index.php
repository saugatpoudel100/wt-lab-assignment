<?php


require_once "../students/utls/db.php";

$sql ="SELECT * FROM students";

 $result=$conn->query($sql);
//   if($result->num_rows>0)
//   {
//     while ($row = $result->fetch_assoc())
//     {
//      echo $row['id'].''.$row['name'];
//         echo"</br>";
//     }
//   }
  //if($result->num_rows>0){
//     while($row=$result->fetch_object()0
//     {
    //    echo $row->id.' '.$row->name;
//        
//     }) 
//   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>
    <?php if(isset($_GET['success']))
    {?>
    <div class= "alert alert-success">
        <div class="close">X</div>
    <?=$_GET['success'] ?>
    </div>
<?php } elseif(isset($_GET['error'])){
    ?>
    <div class="alert alert-danger">
        <div class = "close">X</div>
        <?=$_GET['error']
        ?>
        </div>
        <?php } ?>
    <h2>List Of Students</h2>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>Profile</th>
            <th>Name</th>
            <th>Email</th>
            <th>Date Of Birth</th>
            <th>Favourite Color</th>
            <th>Weight</th>
            <th>Gender</th>
            <th>Hobbies</th>
            <th>Nationality</th>
            <th>Action</th>
</tr>
</thead>
<tbody>
    <?php
      if ($result->num_rows>0)
      {
        while($student = $result->fetch_assoc())
        {
            ?>
            <tr> 
                <td><?=$student['id']?></td>
                <td><img style='width:30px;height:30px; border-radius:25%;' src ="./Imge/<?=$student['PROFILE']?>" alt="profile"></td>
                <td><?=$student['name']?></td>
                <td><?=$student['email']?></td>
                 <td><?=$student['dob']?></td>
                  <td><?=$student['favorite_color']?></td>
                   <td><?=$student['weight']?></td>
                    <td><?=$student['gender']?>
                </td>
                     <td><?=$student['hobbies']?></td>
                      <td><?=$student['nationality']?></td>
                      <td>
                        <a href="#"data-id="<?=$student['id']?>" class='edit'>EDIT</a>
                        <a href="#" data-id="<?=$student['id']?>" class='delete'>DELETE</a>
        </td>
        </tr>
        <?php
         }
      }else
         {
             ?>
        <tr>
            <td colspan = "11">No Record Found!</td>
        </tr>
    }
        <?php } ?>
        </tbody>
        </table>
         <script type="text/javascript">
        const deleteEl = document.querySelectorAll(".delete");
        for (el of deleteEl) {
            el.addEventListener("click", deleteStudent);
        }
        const updateEl = document.querySelectorAll(".edit");
        for (el of updateEl) {
            el.addEventListener("click", editStudent);
        }

        function editStudent(event) {
            const id = event.target.getAttribute('data-id');
            let formEl = document.createElement("form");
            formEl.setAttribute("method", "POST");
            formEl.setAttribute("action", "./Edit/");
            let idEl = document.createElement("input");
            idEl.setAttribute("type", "hidden");
            idEl.setAttribute("name", "id");
            idEl.setAttribute("value", id);
            formEl.appendChild(idEl);
            document.body.appendChild(formEl);
            formEl.submit();
        }


        function deleteStudent(event) {
            const id = event.target.getAttribute('data-id');
            let formEl = document.createElement("form");
            formEl.setAttribute("method", "POST");
            formEl.setAttribute("action", "./Delete/");
            let idEl = document.createElement("input");
            idEl.setAttribute("type", "hidden");
            idEl.setAttribute("name", "id");
            idEl.setAttribute("value", id);
            formEl.appendChild(idEl);
            document.body.appendChild(formEl);
            formEl.submit();
        }
    </script>
                   
</body>
</html>