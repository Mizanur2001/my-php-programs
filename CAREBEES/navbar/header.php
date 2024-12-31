<?php
$hostUrl = $_SERVER['HTTP_HOST'];
echo "<header class='header' id='navbar'>
   <div class='menuclick' id='mobMenu'>
   <button onclick='menubar()'><i class='fa-solid fa-bars'></i></button>
   </div>
   <div class='menucut' id='mobMenuCut'>
   <button onclick='menubarcut()'><i class='fa-solid fa-xmark'></i></button>
   </div>
    <!-- Creating left box for logo -->
    <div class='lefts'>
        <a href='http://$hostUrl/index.php'><img src='http://$hostUrl/image/carebeeslogo.png' alt='logo'></a>
    </div>
    <!-- Creating middle box for navigation -->
    <div class='middle' id='middlebar'>
        <ul class='list'>
            <li><a href='http://$hostUrl/index.php' class='active'>Home</a></li>
            <li>
                <div class='drop-services'>
                    <button class='servicebtn active'>Services</button>
                    <div class='service-content'>
                        <div class='cntnt1'>
                            <a href='http://$hostUrl/doctorService/doctor.php'><img src='http://$hostUrl/image/doctor%20icon.png'
                                    alt='Doctors Treatment' class='img1'><br>
                                    Doctor's <br> Treatment</a>
                            <a href='http://$hostUrl/speechTherapy/speech.php'><img src='http://$hostUrl/image/speech%20therapy%20icon.png'
                            alt='Speech Therapy' class='img5'><br>Speech <br> Therapy</a>
                            </div>
                            <div class='cntnt2'>
                            <a href='http://$hostUrl/nurseService/nurse.php'><img src='http://$hostUrl/image/nurse%20icon.png' alt='Nurse Care'
                            class='img2'><br>Nurse
                                <br> Care</a>
                                <a href='http://$hostUrl/occupationalTherapy/occtherapy.php'><img
                                    src='http://$hostUrl/image/occupasional%20therapy%20icon.png' alt='Occupational Therapy'
                                    class='img6'><br>Occupational <br> Therapy</a>
                        </div>
                        <div class='cntnt3'>
                            <a href='http://$hostUrl/physioTherapy/physio.php'><img src='http://$hostUrl/image/physio%20icon.png'
                            alt='Physio Therapy' class='img3'><br>Physio
                            <br> Therapy</a>
                            <a href='http://$hostUrl/dietician/dietician.php'><img src='http://$hostUrl/image/dietician%20icon.png'
                            alt='Dietician Consultation' class='img7'><br>Dietician <br> Consultation</a>
                            </div>
                        <div class='cntnt4'>
                            <a href='http://$hostUrl/24hours/24hours.php'><img src='http://$hostUrl/image/24%20hrs%20care%20icon.png'
                            alt='24 hrs Care Taker' class='img4'><br> 24 hrs <br> Care Taker</a>
                            </div>
                            </div>
                            </div>
            </li>
            <li><a href='http://$hostUrl/palliativecare/care.php' class='active'>Palliative Care</a></li>
            <li><a href='http://$hostUrl/about/aboutus.php' class='about active' id='navMobile'>About Us</a></li>
            </ul>
            </div>
            <!-- creating right box for buttons -->
            <div class='rights'>
        <div class='call'>
            <a href='tel:+919939530258'><i class='fa-solid fa-phone'></i></a>
        </div>
        <div class='dropdown'>
        <a href='whatsapp://send?phone=+919939530258'><button class='dropbtn'>WhatsApp</button></a>
            </div>
            <div class='navwhatsapp'>
            <i class='fa-brands fa-whatsapp'></i>
            </div>
            </div>
            </header>"
    ?>


<!-- Javascript code -->
<?php
$hostUrl = $_SERVER['HTTP_HOST'];
echo "<script>

let navList = document.querySelectorAll('.active');
// console.log(navList);

if(window.location.href == 'http://$hostUrl/index.php' || window.location.href == 'http://$hostUrl/index.php#allservices' || window.location.href == 'http://$hostUrl/index.php#whyus' || window.location.href == 'http://$hostUrl/index.php#experts' || window.location.href == 'http://$hostUrl/index.php#customerReview' || window.location.href == 'http://$hostUrl/index.php#' || window.location.href == 'http://$hostUrl/' || window.location.href == 'http://$hostUrl/#')
{
    navList[0].style.color='#4A7CFE';
}
else if(window.location.href == 'http://$hostUrl/doctorService/doctor.php' || window.location.href == 'http://$hostUrl/nurseService/nurse.php' || window.location.href == 'http://$hostUrl/physioTherapy/physio.php' || window.location.href == 'http://$hostUrl/24hours/24hours.php' || window.location.href == 'http://$hostUrl/speechTherapy/speech.php' || window.location.href == 'http://$hostUrl/occupationalTherapy/occtherapy.php' || window.location.href == 'http://$hostUrl/dietician/dietician.php' || window.location.href == 'http://$hostUrl/doctorService/doctor.php#' || window.location.href == 'http://$hostUrl/nurseService/nurse.php#' || window.location.href == 'http://$hostUrl/physioTherapy/physio.php#' || window.location.href == 'http://$hostUrl/24hours/24hours.php#' || window.location.href == 'http://$hostUrl/speechTherapy/speech.php#' || window.location.href == 'http://$hostUrl/occupationalTherapy/occtherapy.php#' || window.location.href == 'http://$hostUrl/dietician/dietician.php#')
{
    navList[1].style.color='#4A7CFE';
}
else if(window.location.href == 'http://$hostUrl/carebe/palliativecare/care.php' || window.location.href == 'http://$hostUrl/palliativecare/care.php#')
{
    navList[2].style.color='#4A7CFE';
}
else
{
    navList[3].style.color='#4A7CFE';
}

</script>"
    ?>

<!-- Media Query -->
<script>
    let mobileMenu = document.getElementById("mobMenu");
    let mobileMenuCut = document.getElementById("mobMenuCut");
    let middleBar = document.getElementById("middlebar");
    function menubar() {
        mobileMenu.style.display = 'none';
        mobileMenuCut.style.display = 'block';
        middleBar.style.display = 'block';
    }
    function menubarcut() {
        mobileMenu.style.display = 'block';
        mobileMenuCut.style.display = 'none';
        middleBar.style.display = 'none';
    }
</script>