<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>Search results</title>
</head>
<style>
.container {
    min-height: 1000 px
}
</style>

<style>
#br {
    min-height: 680px;
}
</style>

<body>
    <?php require "partial/dbconnect.php";?>

    <?php require "partial/nevber.php"?>

    <div class="container container-fluid" id="br">
        <h1 class="my-3">Search reasult for <em>"<?php echo $_GET['search']?>"</em></h1>
        <br>

     <?php
     $not_found=true;
     $search=$_GET['search'];
    $sql="SELECT * FROM `question`WHERE MATCH (thread_title,thread_desc) against ('$search') ";
     $result=mysqli_query($connect,$sql);
     while ($row=mysqli_fetch_assoc($result)) {
     $thread_title= $row['thread_title'];
     $Thread_desc=$row['thread_desc'];
     $thread_id=$row['thread_id'];
     $url="thread.php?tid=". $thread_id;
     echo
     '<div class="result">
         <h3><a href="'.$url.'" class="text-dark"> '.$thread_title.' </a></h3>
         <p> '.$Thread_desc.'</p>
      </div> <br>';
     $not_found=false;

     }
     if ($not_found) {
         echo
         '<div class="contener">
         <p><b>Did not match any documents.</b></p>
         <div class="contener">
         <p>Suggestions:</p>
         <ul>
       <li>  Make sure that all words are spelled correctly.</li>
       <li> Try different keywords.</li>
       <li> Try more general keywords.</li>
         
         </ul>
         </div>
         </div>
        <img src="img/no-data-found.png" class="mr-3 " height="150px" alt="...">';
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