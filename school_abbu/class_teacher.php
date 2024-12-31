<!--PHP part login check -->

<?php

 session_start();
 if (($_SESSION['Loggedin']==false)&&(!isset($_SESSION['u_name']))&&(!isset($_SESSION['password']) )) {
   header("location:login.php");
   exit;
 }

?>

<!-- PHP part to update name from madal-->

<?php

    require "partial/db_connect.php";
 if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset( $_POST['snoEdit'])){
      // Update the record
      $sno = $_POST["snoEdit"];
      $E_roll_no = $_POST["roll_no"];
      $E_name = $_POST["name"];
    
      // Sql query to be executed
      //change hare in update version 0.1.1
      $sql = "UPDATE `students` SET `name` = '$E_name' , `roll_no` = '$E_roll_no' WHERE `students`.`sl_no` = $sno;";
      $result = mysqli_query($connect, $sql);
        if($result){
        $update = true;
        }
        else{
           echo "We could not update the record successfully.....";
        }   
    }
     else {
            //fetch dara from data base

         $sql_f="SELECT * from `students`";
         $result = mysqli_query($connect,$sql_f);
         $num =mysqli_num_rows($result); 

         $name=$_POST['name'];
         $rollNo=$_POST['rollno'];

         //Insest data into data base 
        //  change hare in update version 0.1.1
         $sql="INSERT INTO `students` (`roll_no` ,`name`) VALUES ('$rollNo' ,'$name');";
         $result = mysqli_query($connect,$sql); 
       }

}
?>

<?php

    //fetch dara from data base

    require "partial/db_connect.php";
    $sql_f="SELECT * from `students`";
    $result = mysqli_query($connect,$sql_f);
    $num =mysqli_num_rows($result); 

?>

<!--HTML Part-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Class Teacher Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/class_teacher.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
    <style>
      @media (max-width:340px)  {
        #container {
         margin: 5px;
         overflow: auto;
        }
    }
    </style>
</head>

<body>
    <?php require "partial/header.php";?>

     <!--Edit Modal-->
     <?php require "partial/edit_modal_ct.php" ?>

    <div id="container">
    <!-- change hare in update version 0.1.1 -->
        <div id="input-box">
            <h1 class="h-primary center" style="margin-top:15px;">SL No:-<?php echo $num+1;?></h1>
            <div id="input">
                <form action="class_teacher.php" method="post">
                    <div class="form-group ct-form">
                        <label for="rollno">Roll No :) </label>
                        <input type="number" id="rollno" name="rollno" placeholder="Enter Student Roll No">
                        <label for="Name">Student Name :) </label>
                        <input type="text" id="name" name="name" placeholder="Enter Student name">
                    </div>
                    <button class="btn">Submit</button>
                </form>
            </div>
        </div>

        <div id="table">
            <table id="myTable">
                <tr>
                    <th>Roll No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>

             <?php

                //fatching data from data base
                // change hare in update version 0.1.1
                $sql_f="SELECT * from `students` ORDER BY `sl_no` DESC";
                $result = mysqli_query($connect,$sql_f);
                while ($row=mysqli_fetch_assoc($result)) {
                $roll_no=$row['roll_no'];
                $name=$row['name'];
                echo
                 '<tr>
                      <td>'.$roll_no.'</td>
                      <td>'.$name.'</td>
                      <td><button class="t-btn edit" id='.$row['sl_no'].'>Edit</button></td>
                 </tr>';
                }
                
             ?>
            </table>
        </div>

    </div>





    <?php require "partial/footer.php";?>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
      <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
  
  <script>
    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
      element.addEventListener("click", (e) => {
        console.log("edit ");
        tr = e.target.parentNode.parentNode;
        title = tr.getElementsByTagName("td")[0].innerText;
        description = tr.getElementsByTagName("td")[1].innerText;
        console.log(title, description);
        titleEdit.value = title;
        descriptionEdit.value = description;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

  </script>
</body>

</html>