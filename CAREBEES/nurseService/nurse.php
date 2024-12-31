<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nurse Caring</title>
    <link rel="stylesheet" href="nurse.css" />
    <link rel="stylesheet" href="../navbar/nav.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../contact/contact.css">
    <link rel="stylesheet" href="../footer/footer.css">
</head>

<body>

    <!-- navbar Wrapper--------------------------- -->
    <div class="navWrapper">
        <?php
        include('../navbar/header.php');
        ?>
    </div>

    <!-- home section starts here --------------------------------------------------------------->
    <section class="home" id="home">
        <div class="text">
            <h3>
                Appoint A Nurse <br /> At Your Home!
            </h3>
        </div>
        <div class="box">
            <div id="box1"><img src="../image/nurse/box1.jpg" alt="box1" /></div>
            <div id="box2"><img src="../image/nurse/box2.jpg" alt="box2" /></div>
        </div>
        <div class="box20">
            <div id="box21"></div>
            <div id="box22"></div>
        </div>
        <div class="doctor">
            <img src="../image/nurse/nurse.png" alt="nurse" />
            <button>Appoint Nurse</button>
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
                    <p>Home nursing care offers numerous benefits, including personalized and cost-effective care, comfort, and support in the familiar surroundings of the patient's home. It can improve recovery outcomes and overall well-being, making it
                        a valuable choice in healthcare delivery.</p>
                </div>
            </div>
            <div class="box1" id="redcolor">
                <div id="innerdiv-2">
                    <h1>What we <br> provide</h1>
                </div>
                <ul style="list-style-type:number" class="para">
                    <li>Home nursing care provides personalized, cost-effective support in familiar surroundings, enhancing comfort and well-being.
                    </li>
                    <li>It promotes better recovery outcomes by catering to individual needs and preferences.</li>
                    <li>Patients receive care in the comfort of their homes, reducing stress and enhancing overall satisfaction.
                    </li>
                    <li>Home nursing is a valuable option in healthcare delivery, ensuring continuity and convenience for patients.
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- about service ends here ---------------------------------------------------------------------->
    <!-- benefits section starts here----------------------------------------------------------------->
    <section class="benefit">
        <div class="boxes">
            <div class="box1">
                <h1>Services That You Can Get</h1>
            </div>
            <div class="box2">
                <div class="AllBox" id="boxA">
                    <img src="../image/boxA.jpg" alt="boxA">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxB">
                    <p>Wound Care</p>
                    <p class="para">Wound management & dressing including diabetic wound care.</p>
                </div>
                <div class="AllBox" id="boxC"><img src="../image/boxC.jpg" alt="boxC">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxD">
                    <p>IV Injections</p>
                    <p class="para">Intravenous fluid and electrolyte administration for various conditions.</p>
                </div>
                <div class="AllBox" id="boxE"><img src="../image/boxE.jpg" alt="boxE">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxF">
                    <p>Injection & Vaccination</p>
                    <p class="para">Administer prescribed medicines via IM or SC routes and vaccines according to age-specific guidelines.</p>
                </div>
                <div class="AllBox" id="boxG"><img src="../image/boxG.jpg" alt="G">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxH">
                    <p>Stoma Care</p>
                    <p class="para">Complete care and management of patients with Stoma.
                    </p>
                </div>
                <div class="AllBox" id="boxI"><img src="../image/boxI.jpg" alt="boxI">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxJ">
                    <p>Folleys and Ryles Tube Care</p>
                    <p class="para">Complete catheter care: Insertion, monitoring and management.</p>
                </div>
            </div>
            <div class="box3">
                <div class="line"></div>
                <div class="content">
                    <p>
                        <strong>About the palliative care: </strong>Palliative care is an approach to healthcare that focuses on improving the quality of life for individuals facing serious illnesses or conditions, often in advanced stages. When palliative
                        care is provided at home, it offers several significant benefits for both patients and their families.

                    </p><button class="btn" onclick="window.location.href = '../palliativecare/care.php';">Read More</button>

                </div>
            </div>
        </div>

    </section>
    <!-- benefits section ends here----------------------------------------------------------------->


    <!-- cntact wrapper----------------------- -->
    <div class="contactWrapper">
        <?php
        include('../contact/contact.php');
        ?>
    </div>


    <!-- Footer Wrapper---------------------------- -->
    <div class="FooterWrapper">
        <?php
        include('../footer/footer.php');
        ?>
    </div>

</body>

</html>