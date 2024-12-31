<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo.png">
    <title>Marksheet Search </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/marksheet_search.css">
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
    
    <?php require "partial/header.php" ?>

    <div id="container">
        <div class="box">
            <h1>Marksheets</h1>
            <p>All Studentds marksheets Print</p>
            <div class="button">
                <button class="btn"><?php echo'<a href="marksheet_print.php?s='. 12 .'" target="_blunk">S1&S2</a>'?></button>
                <button class="btn" id="s3-btn"><?php echo'<a href="marksheet_print.php?s='. 3 .'" target="_blunk">S3</a>'?></button>
            </div>
        </div>
        <div class="box mb-80">
            <h1>Serach</h1>
            <p>Search marksheet by Roll No</p>
            <form action="marksheet_print_one.php" method="post">
                <div class="form-group">
                    <label for="marks">Student Roll No:) </label>
                    <input type="number" id="Marks" name="roll_no" placeholder="Enter Roll No">
                </div>
                <div class="button">
                    <button class="btn" >Search</button>
                </div>
            </form>
        </div>
    </div>



    <?php require "partial/footer.php" ?>

</body>

</html>