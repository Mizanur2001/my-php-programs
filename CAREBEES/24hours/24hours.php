<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>24hours Care</title>
    <link rel="stylesheet" href="24hours.css" />
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
                Call 24Hrs Care Taker<br /> For Your Household!            </h3>
        </div>
        <div class="box">
            <div id="box1"><img src="../image/24hours/box2.jpg" alt="box2" /></div>
            <div id="box2"><img src="../image/24hours/box1.jpg" alt="box1" /></div>
        </div>
        <div class="box20">
            <div id="box21"></div>
            <div id="box22"></div>
        </div>
        <div class="doctor">
            <img src="../image/24hours/24hrs care giver.png" alt="24hours care" />
            <button>Get 24Hrs Caregiver</button>
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
                    <p>24-hour caregivers at home offer a comprehensive and person-centered approach to patient care. They enhance safety, provide personal support, and improve the overall quality of life for patients, making it an excellent option for those
                        in need of ongoing assistance.</p>
                </div>
            </div>
            <div class="box1" id="redcolor">
                <div id="innerdiv-2">
                    <h1>What we <br> provide</h1>
                </div>
                <ul style="list-style-type:number" class="para">
                    <li>Comprehensive care: 24-hour caregivers offer a holistic approach to patient needs, addressing physical, emotional, and social aspects of well-being.</li>
                    <li>Enhanced safety: Constant supervision ensures immediate response to emergencies, reducing risks and promoting peace of mind for patients and their families.</li>
                    <li>Personal support: Caregivers provide individualized assistance tailored to each patient's unique requirements, fostering independence and dignity.</li>
                    <li>Improved quality of life: By delivering consistent, compassionate care, caregivers help patients maintain a sense of normalcy and fulfillment amidst health challenges</li>
                </ul>

            </div>
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
                    <p>Elder Care</p>
                    <p class="para">Assistance in daily activities, preventing falls and injuries providing emotional support and companionship.
                    </p>
                </div>
                <div class="AllBox" id="boxC"><img src="../image/boxC.jpg" alt="boxC">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxD">
                    <p>Routine Bed Side Care</p>
                    <p class="para">Routine care of bed ridden patients and patients with restricted mobility in their daily activities & personal hygiene.</p>
                </div>
                <div class="AllBox" id="boxE"><img src="../image/boxE.jpg" alt="boxE">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxF">
                    <p>Post Operative Care</p>
                    <p class="para">Complete care post a surgery ensuring uneventful healing & reducing the need for a re-hospitalization.</p>
                </div>
                <div class="AllBox" id="boxG"><img src="../image/boxG.jpg" alt="boxG">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxH">
                    <p>Intensive abs Specialised Care</p>
                    <p class="para">Specialized care of patients with critical conditions & provide a range of quality healthcare services.</p>
                </div>
                <div class="AllBox" id="boxI"><img src="../image/boxI.jpg" alt="boxI">
                    <!-- <p class="para">Benefits- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p> -->
                </div>
                <div class="AllBox" id="boxJ">
                    <p></p>
                    <p class="para"></p>
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