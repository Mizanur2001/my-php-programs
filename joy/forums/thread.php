<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Thread</title>
</head>

<body>
<?php require "partial/dbconnect.php";?>
    <?php require 'partial/nevber.php';?>

    <style>
    #ques {
        min-height: 430px;
    }
    </style>

<?php
$id=$_GET["tid"];
$sql="SELECT * FROM `question` WHERE thread_id=$id";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_assoc($result)) {
 $title=$row['thread_title'];
 $desc=$row['thread_desc'];
 $thread_user_id=$row['thread_user_id'];
}
$sql5="SELECT user_name FROM `users` WHERE sl_no ='$thread_user_id'";
$result5=mysqli_query($connect,$sql5);
$row2=mysqli_fetch_assoc($result5);
$user_name=$row2['user_name'];

?>

    <?php

$method=$_SERVER['REQUEST_METHOD'];
if($method=="POST"){
$comment_desc=$_POST['comment'];
$comment_by=$_SESSION['user_slno'];

//sanitizing data 
$comment_desc=str_replace("<","&lt",$comment_desc);
$comment_desc=str_replace(">","&gt",$comment_desc);

if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){

$sql2="INSERT INTO `comments` ( `comment_content`, `thread_id`, `comment_by`, `comment_time`) VALUES 
( '$comment_desc', '$id', '$comment_by', current_timestamp())";

$result2=mysqli_query($connect,$sql2);
echo
         '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>  Your Comment has been added! Thank you For This Comment
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';

     }
     else{
        echo
        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
           <strong>Error! </strong>  Unable to Add this comment You are not loggedin..
           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
         </div>';
     }

}

?>

    <div class="contener my-3 container-fluid ">

        <div class="jumbotron">
            <h1 class="display-4 text-center"><?php echo $title; ?></h1>
            <p class="lead mt-5"><b><?php echo $desc;?></b></p>
            <hr class="my-4">
            <p>
                1.No personal attacks.<br>
                2.No racism/sexism.<br>
                3.No making public of confidential conversations.<br>
                4.No out and out obscene pics.<br>
                5.No HUGE pictures that stretch the forums.

            </p>

            <p class="text-danger"> <b>Posted by :  <?php echo $user_name;?></p></b>

        </div>
    </div>

    <div class="contener container-fluid" id="ques">
    <?php

      if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
        
        echo
        '<form action="'.$_SERVER['REQUEST_URI'].'" method="post">

            <div class="mb-3">
                <label for="comment" class="form-label"><b>Comment</b></label>
                <textarea class="form-control" name="comment" id="comment" cols="10" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Post Comment</button>
        </form>';
      }
      else {
        echo
        ' <div class="contener text-center my-4">
           <p class="text-danger"><b> Please <a href="login.php">login </a> to raise comment </b></p>
         </div>';
      }
      
      ?>

        <h1 class="text-center my-3">Discussion</h1>

        <?php
         $data=true;
        $sql3="SELECT * FROM `comments` WHERE thread_id=$id";
        $result3=mysqli_query($connect,$sql3);
        while ($row=mysqli_fetch_assoc($result3)) {
           $data=false;
           $content=$row["comment_content"];
           $comment_time=$row['comment_time'];
           $comment_by=$row['comment_by'];
           $sql4="SELECT user_name FROM `users` WHERE sl_no ='$comment_by'";
           $result4=mysqli_query($connect,$sql4);
           $row4=mysqli_fetch_assoc($result4);

          echo
          '<div class="media mt-3 container-fluid">
           <img src="img/2.jpg" class="mr-3 " height="54px" alt="...">
           <div class="media-body">
           <p class="front-weight-bold my-0 text-danger"><b> '. $row4['user_name']  .' </b></p>
              <p class="my-0"><b>'. $content.'</b> </p>
             <p class="text-primary"> Comment time :'.$comment_time .'</p>
           </div>
       </div><br>';
        }
        
        
        

        if($data){
        echo

       ' <div class="media mt-3 container-fluid">
            <img src="img/oops.png" class="mr-3 " height="150px" alt="...">
            <div class="media-body">
                <h3 class="my-0"> No Comment Found on DataBase..</h3>
                <p><b> Please wait for community to respond</b> </p>
            </div>
        </div>';

    
        }


   ?>
   </div>
    <?php  require 'partial/footer.php';?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>