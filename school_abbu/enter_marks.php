<!--PHP part to check login or not-->

<?php

 session_start();
 if (($_SESSION['Loggedin']==false)&&(!isset($_SESSION['u_name']))&&(!isset($_SESSION['password']) )) {
   header("location:login.php");
   exit;
 }

?>


<!-- PHP part for GET Request -->

<?php
 $sub_id=$_SESSION['sl_no'];
 $s_val=$_GET['s'];

  if($s_val==1) {
    $type_s_w="S1(W)";
    $type_s_p="S1(P)";
    $inp_name_w="marks";
    $inp_name_p="s1_p";

            if ($sub_id==2) {
              $sub_name_w="bengali";
              $sub_name_p="be_s1_p";
            }
            elseif ($sub_id==3) {
              $sub_name_w="english";
              $sub_name_p="en_s1_p";
            }
            elseif ($sub_id==4) {
              $sub_name_w="history";
              $sub_name_p="hi_s1_p";
            }
            elseif ($sub_id==5) {
              $sub_name_w="geography";
              $sub_name_p="ge_s1_p";
            }
            elseif ($sub_id==6) {
              $sub_name_w="mathematics";
              $sub_name_p="ma_s1_p";
            }
            elseif ($sub_id==7) {
              $sub_name_w="physics";
              $sub_name_p="ph_s1_p";
            }
            elseif ($sub_id==8) {
              $sub_name_w="l.science";
              $sub_name_p="li_s1_p";
            }
            elseif ($sub_id==9) {
              $sub_name_w="islam_parichay";
              $sub_name_p="is_s1_p";
            }
            elseif ($sub_id==10) {
              $sub_name_w="arabic";
              $sub_name_p="ar_s1_p";
            }

  }
  elseif ($s_val==2) {
     $type_s_w="S2(W)";
     $type_s_p="S2(P)";
     $inp_name_w="s2_w";
     $inp_name_p="s2_p";

          if ($sub_id==2) {
            $sub_name_w="be_s2_w";
            $sub_name_p="be_s2_p";
          }
          elseif ($sub_id==3) {
            $sub_name_w="en_s2_w";
            $sub_name_p="en_s2_p";
          }
          elseif ($sub_id==4) {
            $sub_name_w="hi_s2_w";
            $sub_name_p="hi_s2_p";
          }
          elseif ($sub_id==5) {
            $sub_name_w="ge_s2_w";
            $sub_name_p="ge_s2_p";
          }
          elseif ($sub_id==6) {
            $sub_name_w="ma_s2_w";
            $sub_name_p="ma_s2_p";
          }
          elseif ($sub_id==7) {
            $sub_name_w="ph_s2_w";
            $sub_name_p="ph_s2_p";
          }
          elseif ($sub_id==8) {
            $sub_name_w="li_s2_w";
            $sub_name_p="li_s2_p";
          }
          elseif ($sub_id==9) {
            $sub_name_w="is_s2_w";
            $sub_name_p="is_s2_p";
          }
          elseif ($sub_id==10) {
            $sub_name_w="ar_s2_w";
            $sub_name_p="ar_s2_p";
          }      

  }
  elseif ($s_val==3) {
     $type_s_w="S3(W)";
     $type_s_p="S3(P)";
     $inp_name_w="s3_w";
     $inp_name_p="s3_p";

      
         if ($sub_id==2) {
           $sub_name_w="be_s3_w";
           $sub_name_p="be_s3_p";
         }
         elseif ($sub_id==3) {
           $sub_name_w="en_s3_w";
           $sub_name_p="en_s3_p";
         }
         elseif ($sub_id==4) {
           $sub_name_w="hi_s3_w";
           $sub_name_p="hi_s3_p";
         }
         elseif ($sub_id==5) {
           $sub_name_w="ge_s3_w";
           $sub_name_p="ge_s3_p";
         }
         elseif ($sub_id==6) {
           $sub_name_w="ma_s3_w";
           $sub_name_p="ma_s3_p";
         }
         elseif ($sub_id==7) {
           $sub_name_w="ph_s3_w";
           $sub_name_p="ph_s3_p";
         }
         elseif ($sub_id==8) {
           $sub_name_w="li_s3_w";
           $sub_name_p="li_s3_p";
         }
         elseif ($sub_id==9) {
           $sub_name_w="is_s3_w";
           $sub_name_p="is_s3_p";
         }
         elseif ($sub_id==10) {
           $sub_name_w="ar_s3_w";
           $sub_name_p="ar_s3_p";
         }  

  }

?>


<!--HTML part-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Marks Entry page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/enter_marks.css">
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
    <?php require "partial/header.php"?>

     <!--Edit Modal-->

     <?php require "partial/edit_modal_ma.php" ?>

    
     <!--PHP part for Edit data entering into db using modal-->

     <?php
     
     require "partial/db_connect.php";
     if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        if (isset( $_POST['snoEdit'])){
          // Update the record
          $sno = $_POST["snoEdit"];
          $E_roll_no = $_POST["roll_no"];
          $E_name = $_POST["name"];
          $E_marks_w = $_POST[$inp_name_w];
          $E_marks_p = $_POST[$inp_name_p];
          
          // Sql query to be executed
          $sql = "UPDATE `students` SET `$sub_name_w` = '$E_marks_w' WHERE `students`.`sl_no` = $sno;";
          $result = mysqli_query($connect, $sql);

          $sql = "UPDATE `students` SET `$sub_name_p` = '$E_marks_p' WHERE `students`.`sl_no` = $sno;";
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
             require "partial/db_connect.php";
     
             $sql_f="SELECT * from `students` where `$sub_name_w`='0'";
             $result = mysqli_query($connect,$sql_f);
             $row=mysqli_fetch_assoc($result);
    
          if ($row['roll_no']!=NULL) {
          
             $roll_no=$row['roll_no'];
             $name=$row['name'];
              // Post request
               $marks_w = $_POST[$inp_name_w];
               $marks_p = $_POST[$inp_name_p];
                //change hare in update version 0.1.1
               $sql="UPDATE `students` SET `$sub_name_w` = '$marks_w' WHERE `students`.`roll_no` = '$roll_no';";
               $result = mysqli_query($connect,$sql); 

               $sql="UPDATE `students` SET `$sub_name_p` = '$marks_p' WHERE `students`.`roll_no` = '$roll_no';";
               $result = mysqli_query($connect,$sql); 
             
          }  
         
        }
    }
     
     
     ?>

    <!--PHP part fatching data from db -->

 <?php

   //fetch dara from data base
    
      $sql_f="SELECT * from `students` where `$sub_name_w`='0'";
      $result = mysqli_query($connect,$sql_f);
      $row=mysqli_fetch_assoc($result);
     
   if ($row['roll_no']!=NULL) {
   
      $roll_no=$row['roll_no'];
      $name=$row['name'];
    }  
   else {
     echo"Every things is upto date";
     $roll_no="No data :(";
     $name="No data :(";
   }
  

 ?>

   <!--PHP Part for taking subject name from data base-->
    <?php
     require "partial/db_connect.php";
     $sql = "SELECT * from `teachers`where  `sl_no`= '$_SESSION[sl_no]'";
     $result = mysqli_query($connect,$sql);
     $row=mysqli_fetch_assoc($result);
     echo
     '<h1 id="h-sub">'.$row['subject'].'</h1>';
    ?>

    <div id="container">
        <div id="input-box">
            <h1 class="h-primary ">Roll No:-<?php echo $roll_no;?></h1>
            <h1 class="h-primary mb">Name :- <?php echo $name;?></h1>
            <div id="input">
                <form action="enter_marks.php?s=<?php echo $s_val ?>" method="post">
                    <div class="form-group">
                        <label for="marks"><?php echo $type_s_w ?> Marks :) </label>
                        <input type="number" id="s_w" name="<?php echo $inp_name_w?>" placeholder=" '-1' for '0' and '-2' for 'AB'">
                    </div>
                    <div class="form-group">
                        <label for="marks"><?php echo $type_s_p ?> Marks :) </label>
                        <input type="number" id="s_p" name="<?php echo $inp_name_p ?>" placeholder="'-1' for '0' and '-2' for 'AB'">
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
                    <th><?php echo $type_s_w ?></th>
                    <th><?php echo $type_s_p ?></th>
                    <th>Action</th>
                   
                </tr>

                <?php
                //fatching data from data base
                $sql_f="SELECT * from `students`";
                $result = mysqli_query($connect,$sql_f);
                while ($row=mysqli_fetch_assoc($result)) {
                $roll_no=$row['roll_no'];
                $name=$row['name'];
                $subject_w=$row[$sub_name_w];
                $subject_p=$row[$sub_name_p];

                //sanitizing data 
                $subject_w=str_replace("-1","Zero",$subject_w);
                $subject_w=str_replace("-2","AB",$subject_w);
                $subject_p=str_replace("-1","Zero",$subject_p);
                $subject_p=str_replace("-2","AB",$subject_p);
                
                echo
                '<tr>
                    <td>'.$roll_no.'</td>
                    <td>'.$name.'</td>
                    <td>'.$subject_w.'</td>
                    <td>'.$subject_p.'</td>
                    <td><button class="t-btn edit" id='.$row['sl_no'].'>Edit</button></td>
                </tr>';
                }
                ?>
            </table>
        </div>

    </div>

    <?php require "partial/footer.php"?>


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
        marks = tr.getElementsByTagName("td")[2].innerText;
        marks_p = tr.getElementsByTagName("td")[3].innerText;
        console.log(title, description,marks,marks_p);
        titleEdit.value = title;
        descriptionEdit.value = description;
        marksEdit.value = marks;
        marks_pEdit.value = marks_p;
        snoEdit.value = e.target.id;
        console.log(e.target.id)
        $('#editModal').modal('toggle');
      })
    })

  </script>
</body>

</html>