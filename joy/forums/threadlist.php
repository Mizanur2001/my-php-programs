<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Thread List</title>
</head>

<body>
<?php require "partial/dbconnect.php"?>
    <?php require "partial/nevber.php"?>
  
    <?php  $id=$_GET['catid'];?>

    <?php
     $alert=false;
if($method=$_SERVER['REQUEST_METHOD']=="POST")
{ 
  $t_title=$_POST['title'];
  $t_desc=$_POST['desc'];
  $user_slno=$_SESSION['user_slno'];

  //sanitizing data 
  $t_title=str_replace("<","&lt",$t_title);
  $t_title=str_replace(">","&gt",$t_title);
  $t_desc=str_replace("<","&lt",$t_desc);
  $t_desc=str_replace(">","&gt",$t_desc);

  if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){

  $t_sql="INSERT INTO `question` ( `thread_title`, `thread_desc`, `thread_cat_id`,
   `thread_user_id`, `Time`) VALUES ( '$t_title', '$t_desc','$id', '$user_slno', current_timestamp())";
  $result3=mysqli_query($connect,$t_sql);
 $alert=true;
}
  else{
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error! </strong>  Unable to submit the question You are not loggedin..
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>  ';
  }
}
 
  
  ?>
    <?php
    if($alert){
        echo '
             <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success! </strong>  Your Question has been added! Please wait for community to respond.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>  ';
      
    }
    ?>
    <?php
$catid=$_GET['catid'];
$sql="SELECT * FROM `forums` WHERE category_id=$catid";
$result=mysqli_query($connect,$sql);
while ($row=mysqli_fetch_assoc($result)) {
     $cat_name= $row['category_name'];
     $cat_description =$row['category_description'];
          }
?>

    <div class="contener my-3 container-fluid ">

        <div class="jumbotron">
            <h1 class="display-4 text-center">Welcome to <?php echo $cat_name;?> forums</h1>
            <p class="lead"><b><?php echo $cat_description;?></b></p>
            <hr class="my-4">
            <p>
                1.No personal attacks.<br>
                2.No racism/sexism.<br>
                3.No making public of confidential conversations.<br>
                4.No out and out obscene pics.<br>
                5.No HUGE pictures that stretch the forums.

            </p>

            <a class="btn btn-info" href="#" role="button">^</a>

            <h2 class="text-center mt-3">Raise your Question...</h2>
        </div>
    </div>


   
<div class="contener container-fluid mt-4">
    <?php 
  if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
   echo
    '<div class="contener  container-fluid mt-3" style=" display: flex; flex-direction: column;  align-items: center; ">
        <form action="'. $_SERVER['REQUEST_URI'].'" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Problem Tttle</b></label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">Keep your question shost and crisp aspossible </div>
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label"><b>Description</b></label>
                <textarea class="form-control" name="desc" id="desc" cols="10" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>'; }

    else {
        echo
       ' <div class="contener text-center my-4">
          <p class="text-danger"><b> Please <a href="login.php">login </a> to ask Question </b></p>
        
        </div>';
    }
              
    ?>


    <h2 class="text-center my-2">Browse Quertion</h2>

    <?php
        $num=true;
       //$id is initialize on line 19
        $sql="SELECT * FROM `question` WHERE thread_cat_id=$id";
        $result=mysqli_query($connect,$sql);
        while($row=mysqli_fetch_assoc($result))
        { $num=false;
          $t_id=$row['thread_id'];
          $title=$row['thread_title'];
          $desc=$row['thread_desc'];
          $thread_time=$row['Time'];
          $thread_user_id=$row['thread_user_id'];
          $sql2="SELECT user_name FROM `users` WHERE sl_no ='$thread_user_id'";
          $result2=mysqli_query($connect,$sql2);
          $row2=mysqli_fetch_assoc($result2);
          echo
          ' <div class="media container-fluid">
               <img src="img/2.jpg" class="mr-3" height="45px" alt="...">
               <div class="media-body">
               <p class="front-weight-bold my-0 text-danger"><b> '.$row2['user_name'] .'</b></p>
                   <h5 class="mt-0 "><a class="text-dark" href ="thread.php?tid='.$t_id.'">'. $title .'</a></h5>
                   <p class="my-0">'. $desc .'</p>
                  <p> Time:'.$thread_time.'</p>
               </div>
           </div><br>';
        }
       
      
      if($num){
               echo
        ' <div class="media container-fluid">
        <img src="img/oops.png" class="mr-3 " height="150px" alt="...">
        <div class="media-body">
            <h3 class="my-0"> No Question Found on DataBase..</h3>
            <p> <b>Be the first person to ask a question</b> </p>
        </div>
    </div><br>';
             
       
    }

    ?>



    </div>


    <?php require "partial/footer.php" ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
</body>

</html>