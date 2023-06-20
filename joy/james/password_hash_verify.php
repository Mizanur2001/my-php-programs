<?php
$login=false;

if ($_SERVER["REQUEST_METHOD"]=="POST") {
 
  $email=$_POST["email"];
  $password=$_POST["password"];

  require '#password_test.php';

  $sql = "SELECT * from `#password` where  `email`='$email'";

 $result = mysqli_query($connect,$sql);
 $num =mysqli_num_rows($result);

 if ($num==1) {
   while ($row=mysqli_fetch_assoc($result)) {
     //Debuging
    echo "true... <br>";
    echo var_dump ($row) . "<br>";

    $pH=password_verify($password,$row['password']);
    
    echo var_dump($pH);
    echo "<br>password is-->>" . $password;

      if(password_verify($password,$row['password'])){
      session_start();

      $_SESSION['Email']=$email;
      $_SESSION['Loggedin']=true;
      $_SESSION['Password']=$password;
      header("location:password_hash_page.php");
      }
          else {
            $login=true;
            echo "<br>Session does not start...";
          }
  

        }
      }

      else {
        echo "<br>No Data found in dataBase";
      }


}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <title>#Password_Varify</title>
  </head>
  <body>
    <h3 class = 'text-center'>#Passsword_Varify</h3>
   <br><br>

    <div class="contener" style=" display: flex; flex-direction: column; align-items: center;">

  <form action="/james/password_hash_verify.php" method="post">
  <div class="form-grup col-md-20">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <br>
  <div class="form-grup col-md-20">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name = "password" id="password">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    -->
  </body>
</html>