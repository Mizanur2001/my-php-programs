<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="img/logo_vw.ico">
    <title>Welcome to Virtual World forums</title>
    <style>
        .container-center{
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .card{
            box-shadow: 6px 6px 20px rgb(122 75 90 / 60%);
            border-radius: 10px;
            border: 0px solid rgba(0,0,0,.125);
        }
        .cardImg{
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .btn-primary{
            background: linear-gradient( to right bottom, rgba(173 , 60 , 170), rgb(107 117 221));
            border-color: #ffffff;;
        }
    </style>
</head>

<body>
    <?php require "partial/dbconnect.php";?>

    <?php require "partial/nevber.php"?>
  
  <?php

  if (isset($_GET['singup']) && $_GET['singup']=="true") {
      echo 
     '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
         <strong>success!</strong> You can login now
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  
  
  ?>

   <?php

if (isset($_GET['login']) && $_GET['login']=="true") {
    echo 
   '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
       <strong>Welcome!</strong> to Virtual World <strong> '.$_SESSION['user_name'].' </strong> you logged in
       <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}


?>
 <?php

  if (isset($_GET['logout']) && $_GET['logout']=="true") {
      echo 
     '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
         <strong>Success!</strong> Successfully logout...
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
  }
  
  
  ?>

    <div class="contener">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <?php
            echo
                '<div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./img/slider'.rand(1, 8).'.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/slider'.rand(1, 8).'.jpg" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./img/slider'.rand(1, 8).'.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>'
            ?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>



    <div class="contaner container-fluid">
        <h1 class='text-center mt-3'>Welcome to Virtual World forums</h1>
        <div class="row">

            <?php 
        
         $sql="SELECT * FROM `forums`";
         $result=mysqli_query($connect,$sql);
         while ($row=mysqli_fetch_assoc($result)) {
         // $row['category_id'];
          $name= $row['category_name'];
          $description =$row['category_description'];
          $id=$row['category_id'];
          $img_URL=$row['category_URL'];
         echo 
         '<div class="container-center col-md-4 my-3">
                <div class="card" style="width: 18rem;">
                    <img class ="cardImg" src='.$img_URL.' class="card-img-top" alt="'.$name.' image logo">
                    <div class="card-body">
                        <h5 class="card-title">'.$name .'</h5>
                        <p class="card-text">'.substr($description,0,80).'......</p>
                        <a href="threadlist.php?catid='.$id.'" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>';
             }
          ?>
        </div>
    </div>
    <br>

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