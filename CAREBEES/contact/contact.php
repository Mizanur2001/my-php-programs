<!-- Code for solving the problem of form re-submission after refresh the page. -->
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<!-- End -->
<div class="contact-us" id="contact">
    <div class="form-title">
        <p>Contact Us</p>
        <div class="line"></div>
    </div>
    <div class="left-right">
        <div class="left">

            <div class="left1 left-next">
                <div>
                    <a href="tel:+919939530258"><i class="fa-solid fa-phone"></i></a>
                </div>
                <div class="text">
                    <span>Call Us</span> <br><a href="tel:+919939530258">+91xxxxxxx258</a>
                </div>
            </div>

            <div class="left2 left-next">
                <div>
                    <a href="mailto: abc@example.com"><i class="fa-regular fa-envelope"></i></a>
                </div>
                <div class="text">
                    <span>Email Us</span> <br><a href="mailto: abc@example.com">jaisxxxxxxxxxx028@gmail.com</a>
                </div>
            </div>

            <div class="left3 left-next">
                <div>
                    <i class="fa-solid fa-location-dot"></i>
                </div>
                <div class="text">
                    <span>Address</span> <br>Aliah University Boys Hostel
                </div>
            </div>
        </div>



        <div class="right">
            <form action="#" method="POST">
                <input type="text" name="fullname" value="" placeholder="Name" class="fname"><br>
                <input type="text" name="phone" value="" placeholder="Ph" class="phn">
                <input type="email" name="mail" value="" placeholder="Email" class="mailid"><br>
                <input type="text" name="subject" value="" placeholder="Subject" class="sbj"><br>
                <textarea name="message" id="messg" cols="68" rows="5" placeholder="Message" class="msg"></textarea><br>
                <input type="submit" name="submit" value="Send Message" class="btn">
            </form>
        </div>
    </div>
</div>


<?php
// Connecting database......................................
if ($_SERVER['REQUEST_URI'] == "/carebees/index.php" || $_SERVER['REQUEST_URI'] == "/carebees/") {
    include ('connect.php');
} else {
    include ('../connect.php');
}

// Taking all variables.....................................
$name = $phone = $email = $subject = $message = "";

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Server request method....................................
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function test_input($data)
    {
        $data = trim($data); // trim() function is used for remove un-neccessary whitespaces.
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = htmlentities($data);
        return $data;
    }

    $name = test_input($_POST['fullname']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['mail']);
    $subject = test_input($_POST['subject']);
    $message = test_input($_POST['message']);
    $userIp = test_input($_SERVER['REMOTE_ADDR']);

    /* #######################################################
            Form Validation Start
       ####################################################### */

    // Check the form is empty or not
    if (empty($name)) {
        echo "<script>alert('Name is required');
        window.history.back();</script>";
        die();
    } elseif (empty($phone)) {
        echo "<script>alert('Phone number must be required');
        window.history.back();</script>";
        die();
    } elseif (empty($email)) {
        echo "<script>alert('email must be required');
        window.history.back();</script>";
        die();
    } elseif (empty($subject)) {
        echo "<script>alert('Subject is mandatory');
        window.history.back();</script>";
        die();
    } elseif (empty($message)) {
        echo "<script>alert('Write somthing in your message');
        window.history.back();</script>";
        die();
    } else {
        // check the name should contain only alphabet.
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            echo "<script>alert('Only Alphabet allowed in Name.');
            window.history.back();</script>";
            die();
        }
        // Phone Validation
        elseif (!preg_match("/^(?:\+?1)?[0-9]{10}$/", $phone)) {
            echo "<script>alert('Phone number must be numeric and 10 digits');
            window.history.back();</script>";
            die();
        }
        // Email Validation
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Write Your correct Email');
            window.history.back();</script>";
            die();
        }
        /* #########################################################
                 Form Validation end.
           ######################################################## */ else {
            // SQl Query.
            $sql = "INSERT INTO `contact_us` (`name`, `phone`, `email`, `subject`, `message`, `ip`) VALUES ('$name', '$phone', '$email', '$subject', '$message', '$userIp')";
            $result = mysqli_query($conn, $sql);
            if ($result) {

                // Sending email to the user..........................
                // $to = $email;
                // $subject = "Form Submitted Successfully..!!";
                // $message = "Thankyou for contacting us , we will get back you soon";
                // $header = "From:do-notreply@carebees.in \r\n";
                // $header .= "Content-type: text/html";
                // $mail = mail($to, $subject, $message, $header);

                echo "<script>alert('Thank You...!! Your Message has been sent.');</script>";

            } else {
                echo "Something wrong....!! " . mysqli_error($conn);
            }
        }
    }


    /* #############################################################################
                PHP Mailer Start.
       ############################################################################# */

    //Load Composer's autoloader
    if ($_SERVER['REQUEST_URI'] == "/carebees/index.php" || $_SERVER['REQUEST_URI'] == "/carebees/") {
        require 'phpmailer/Exception.php';
        require 'phpmailer/PHPMailer.php';
        require 'phpmailer/SMTP.php';
    } else {
        require '../phpmailer/Exception.php';
        require '../phpmailer/PHPMailer.php';
        require '../phpmailer/SMTP.php';
    }
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                   //Enable SMTP authentication
        $mail->Username = 'mrjaiswal881@gmail.com';                     //SMTP username
        $mail->Password = 'jaiw wgpp ocbz gtfv';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('mrjaiswal881@gmail.com', 'Carebees@contactForm');
        $mail->addAddress('mrjaiswal881@gmail.com', 'Carebees Healthcare');     //Add a recipient
        // $mail->addAddress('wa277478@gmail.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        if($_SERVER['REQUEST_URI'] == "/carebees/index.php" || $_SERVER['REQUEST_URI'] == "/carebees/"){
        $mail->addAttachment('image/carebeeslogo.png', 'Carebees Logo');    //Optional name
        }
        else{
            $mail->addAttachment('../image/carebeeslogo.png', 'Carebees Logo');
        }

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'New Message from Carebees Healthcare';
        $mail->Body = "Dear Randeep, <br> Someone wants to contact with you. Please find the sender details below. <br> Sender Name - $name <br> Sender Email - $email <br> Sender Mob No: - $phone <br> Subject - $subject <br> Message - $message";
        // $mail->AltBody = 'This is a system generated mail, do not reply';

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

    /* ##########################################################################
               PHP Mailer End.
        ######################################################################### */

}

?>