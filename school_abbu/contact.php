<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/castomer_support.png">
    <title> Contact Us</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" media="screen and (max-width: 780px)" href="css/tab_head_foot.css">
    <link rel="stylesheet" media="screen and (max-width: 460px)" href="css/phone_head_foot.css">
    <style>
      @media (max-width:440px)  {
        #para {
            padding: 6px 18px;
        }
    }
    @media (max-width:340px)  {
        #contacts {
         margin: 5px;
         overflow: auto;
        }
    }
    </style>
</head>

<body>
    
    <?php require "partial/header.php" ?>

    <div id="container">
        <h1 id="h1">Contact Us</h1>
        <p id="para">If you have any Question , Please feel free to ask in Bhabta Azizia High Madrasah results section
            Website and Also you can ask on Virtual World contacts Section for any technical error . You may also call
            us mail us for any Problem . We will try to reach you as soon as possible :)</p>
    </div>
    <div id="contacts">
        <div class="box">
            <h1>Call Us </h1>
            <img src="img/phone.png" alt="Phone">
            <p>Contact No :- 9735947911</p>
        </div>
        <div class="box">
            <h1>Mail Us </h1>
            <img src="img/mail.png" alt="mail">
            <p>Mail Id :- infobhabtaazizia@gmail.com</p>
        </div>
        <div class="box">
            <h1>Cotact Virtual World</h1>
            <img src="img/castomer_support.png" alt="castomer_support">
            <p>Visit <a href="http://virtualworldforums.epizy.com/contact.php?" target="_blank"><img id="img" src="img/logo1.png" alt=""></a> Website We are rady to help you :)</p>
        </div>
    </div>

   <?php require "partial/footer.php" ?>
</body>

</html>