<style>
#search{
    border-radius: 20px;
}
#singup {
    margin: 5px;
}
#login {
    margin: 5px;
    margin-top: 8px;
}
#logout{
    margin-left: 9px;
    margin-right: 8px;
}
#navbar {
    position: sticky;
    top: 0px;
    z-index: 99;
}
</style>
<?php
session_start();
echo 
'<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar">
    <div class="container-fluid">
        <a class="navbar-brand" href="about.php"><img src="img/logo_vw.png" height="40px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact.php?">Contact Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Top Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">';

                    $sql="SELECT category_name,category_id FROM `forums`LIMIT 10";
                    $result=mysqli_query($connect,$sql);
                    while ($row=mysqli_fetch_assoc($result)) {
                        echo
                        '<li><a class="dropdown-item" href="threadlist.php?catid='.$row['category_id'].'">'.$row['category_name'].'</a></li>';
                       
                              }
                     

                   echo   
                   ' </ul>
                </li>
            </ul>';
           
            if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true) {
          echo
            ' <form class="d-flex" action="search.php" method="get" >
                <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" id="search">
                <button class="btn btn-success me-2" type="submit">Search</button>
              </form>
            <form class="d-frex my-2" action="/logout.php">
                <button class="btn btn-outline-danger" type="submit" id="logout">Logout</button>
            </form>
            <p class="text-warning my-0 mx-2"> Welcome '. $_SESSION['user_name'] .' </p>';
            }

         else{
                echo    
                '<form class="d-flex" action="search.php" method="get">
                    <input class="form-control me-2" name="search" type="search" placeholder="Search" aria-label="Search" id="search">
                    <button class="btn btn-success me-2" type="submit">Search</button>
                </form>
    
                <form class="d-frex" action="/login.php">
                    <button class="btn btn-outline-success me-2" type="submit" id="login">Login</button>
    
                </form>
                <form class="d-frex" action="/singup.php">
                    <button class="btn btn-outline-success me-2" type="submit" id="SingUp">Sign Up</button>
    
                </form>';
                }
echo
        '</div>
    </div>
</nav>';

?>