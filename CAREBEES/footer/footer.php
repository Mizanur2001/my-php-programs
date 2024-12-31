<?php
$hostUrl = $_SERVER['HTTP_HOST'];
echo "
<div class='footer'>
    <div class='up'>
        <div class='up1 upper'>
            <div class='line'></div>
            <ul>
                <li><a href='http://$hostUrl/carebees/index.php'>Home</a></li>
                <li><a href='http://$hostUrl/carebees/index.php#allservices'>Services</a></li>
                <li><a href='http://$hostUrl/carebees/palliativecare/care.php'>Cares</a></li>
                <li><a href='http://$hostUrl/carebees/about/aboutus.php'>About Us</a></li>
            </ul>
        </div>
        <div class='up2 upper'>
            <div class='line'></div>
            <ul>
                <li><a href='http://$hostUrl/carebees/index.php#whyus'>Why Us?</a></li>
                <li><a href='http://$hostUrl/carebees/index.php#experts'>Our Experts</a></li>
                <li><a href='http://$hostUrl/carebees/index.php#customerReview'>Customer Review</a></li>
            </ul>
        </div>
        <div class='up3 upper'>
            <div class='line'></div>
            <div class='linked-face'>
                <a href='#'><i class='fa-brands fa-linkedin-in'></i></a>
                <a href='#'><i class='fa-brands fa-facebook-f'></i></a>
            </div>
            <div class='insta-x'>
                <a href='#'><i class='fa-brands fa-instagram'></i></a>
                <a href='#'><i class='fa-brands fa-x-twitter'></i></a>
            </div>
        </div>
        <div class='up4 upper'>
            <div class='line'></div>
            <span>Location</span> <br>
            <div class='googleMap'>
                <iframe
                    src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.798237587998!2d88.48798487437175!3d22.586648279481647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020ac7b088374f%3A0x744b574c82e9efeb!2sEcospace%2C%20Premises%20-%2011F%2F12%2C%20Campus%20-%202B%2C%20Action%20Area%20II%2C%20Newtown%2C%20New%20Town%2C%20Chakpachuria%2C%20West%20Bengal%20700156!5e0!3m2!1sen!2sin!4v1709218143894!5m2!1sen!2sin'
                    width='200' height='100' style='border:0;' allowfullscreen='' loading='lazy'
                    referrerpolicy='no-referrer-when-downgrade'></iframe>
            </div>
        </div>
    </div>
    <div class='down'>
        <p class='company'>All rights reserved @carebees.com</p>
        <p class='team'>Designed and Developed by @Develovers</p>
    </div>
</div>"
?>
