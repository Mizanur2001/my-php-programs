<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dietician</title>
    <link rel="stylesheet" href="dietician.css" />
    <link rel="stylesheet" href="../navbar/nav.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../contact/contact.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>

<body>


<!-- Nav Wrapper----------------------------- -->
<div class="navWrapper">
    <?php
    include('../navbar/header.php');
    ?>
</div>


    <!-- home section starts here --------------------------------------------------------------->
    <section class="home" id="home">
        <div class="text">
            <h3>
                Dietician Consulting <br /> At Your Door Step!
            </h3>
        </div>
        <div class="box">
            <div id="box1"><img src="../image/dietician/box1.jpg" alt="box1" /></div>
            <div id="box2"><img src="../image/dietician/box2.jpg" alt="box2" /></div>
        </div>
        <div class="box20">
            <div id="box21"></div>
            <div id="box22"></div>
        </div>
        <div class="doctor">
            <img src="../image/dietician/dietacian.png" alt="dietician" />
            <button>Appoint Dietician</button>
        </div>

        <div class="rectangle">
        </div>
        <div class="circle">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
            <div class="square"></div>
            <div class="circle4"></div>
        </div>

    </section>
    <!-- home section ends here --------------------------------------------------------------------->
    <!-- about service starts here ------------------------------------------------------------------>
    <section class="service">
        <div class="box">
            <div class="box1" id="bluecolor">
                <div id="innerdiv-1">
                    <h1>About the <br> service</h1>
                </div>
                <div class="para1">
                    <p>Dietitian visits at a patient's home provide a highly personalized and practical approach to nutrition and dietary counseling. This approach fosters better adherence to dietary recommendations, ensures that dietary changes are realistic
                        in the patient's daily life, and ultimately promotes improved nutrition and overall health</p>
                </div>
            </div>
            <div class="box1" id="redcolor">
                <div id="innerdiv-2">
                    <h1>What we <br> provide</h1>
                </div>
                <ul style="list-style-type:number" class="para">
                    <li> Home visits by dietitians offer personalized nutrition counseling tailored to individual needs.</li>
                    <li>ractical advice provided during home visits enhances adherence to dietary recommendations.</li>
                    <li> Realistic dietary changes integrated into daily life lead to better health outcomes.</li>
                    <li> The personalized approach fosters improved nutrition and overall well-being in patients.</li>
                    <li>Direct interaction at home facilitates effective implementation of dietary advice.</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- about service ends here ---------------------------------------------------------------------->
    <!-- benefits section starts here----------------------------------------------------------------->
    <div class="box3">
        <div class="line"></div>
        <div class="content">
            <p>
                <strong>About the palliative care: </strong>Palliative care is an approach to healthcare that focuses on improving the quality of life for individuals facing serious illnesses or conditions, often in advanced stages. When palliative care
                is provided at home, it offers several significant benefits for both patients and their families.
            </p><button class="btn" onclick="window.location.href = '../palliativecare/care.php';">Read More</button>

        </div>
    </div>
    </div>

    <!-- benefits section ends here----------------------------------------------------------------->


     <!-- contact wrapper -->
     <div class="contactWrapper">
        <?php
        include('../contact/contact.php');
        ?>
    </div>

    <!-- Footer Wrapper -->
    <div class="FooterWrapper">
        <?php
        include('../footer/footer.php');
        ?>
    </div>

</body>

</html>