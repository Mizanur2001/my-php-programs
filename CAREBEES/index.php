<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAREBEES</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="navbar/nav.css">
    <link rel="stylesheet" href="contact/contact.css">
    <link rel="stylesheet" href="footer/footer.css">
</head>

<body>
    <div class="main">

        <div class="navWrapper">
            <?php
            include ("navbar/header.php");
            ?>
        </div>

        <div class="allIndex">

            <!-- Slider with auto-play properties -->
            <div class="container">
                <div class="top">
                    <div class="frame">
                        <div class="slider">
                            <img src="/image/slide1.png" alt="slide1" class="slide-image">
                            <img src="/image/slide2.png" alt="slide2" class="slide-image">
                            <img src="/image/slide3.png" alt="slide3" class="slide-image">
                            <img src="/image/slide4.png" alt="slide4" class="slide-image">
                        </div> <!-- slider end -->
                    </div> <!-- frame end -->
                </div> <!-- top end  -->
                <div class="bottom">
                    <!-- <div class="button"></div>
            <div class="button"></div>
            <div class="button"></div>
            <div class="button"></div> -->
                </div> <!-- bottom end -->
            </div> <!-- Container end -->

            <!-- Creating services section -->
            <div class="services" id="whyus">
                <div class="allSection">
                    <div class="whatWeDo">
                        <div class="heading">
                            <p>What We Do</p>
                        </div>
                        <div class="underline1"></div>
                        <div class="sec-1and2">
                            <div class="sec1">
                                <p>At Carebees Healthcare, we understand that every patient is unique, and their
                                    healthcare
                                    journey should reflect that individuality. We believe that personalized care is not
                                    just
                                    a service, but a commitment to providing the highest level of attention and tailored
                                    support to each and every patient.</p>
                            </div>
                            <div class="sec2">
                                <p>At Carebees Healthcare, we are not just a home medical service company; we are your
                                    partner in health. Your journey is unique, and we are here to make it exceptional.
                                    Experience the warmth of truly personalized care, where you are at the center of
                                    everything we do.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="image">
                            <img src="image/card1.png" alt="card">
                        </div>
                        <div class="text1">
                            <span>Our Dedication: </span>
                            <p>Dedicated to compassionate, exceptional home care for
                                independence, dignity, and quality of life."</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="allSection" id="why_us">
                <div class="card">
                    <div class="image">
                        <img src="image/card2.png" alt="card">
                    </div>
                    <div class="text2">
                        <span>Our Promise to You: </span>
                        <p>Our promise to provide a high quality,
                            better engagement and healthy services.</p>
                    </div>
                </div>
                <div class="whyUs">
                    <div class="heading">
                        <p>Why Us?</p>
                    </div>
                    <div class="underline2"></div>
                    <div class="sec-1and2">
                        <div class="sec2">
                            <p> Tailored care plans reflect your unique needs, preferences, and goals, fostering
                                independence and individuality.</p>
                            <p>Experienced healthcare team ensures holistic care, addressing physical, emotional, and
                                psychological well-being with compassion.</p>
                        </div>
                        <div class="sec1">
                            <p> Continuous support prioritizes well-being, fostering a healing journey and empowerment
                                for
                                you and your family.</p>
                            <p>Transparent communication, cultural sensitivity, and quality care at home ensure trust,
                                comfort, and empowerment in your healthcare journey.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- All Services -->
        <div class="allServices" id="allservices">
            <div class="allServiceCard">
                <a href="doctorService/doctor.php" class="serviceCard serviceCard1">
                    <div class="imgs">
                        <img src="image/appoint a doctor.jpg" alt="Appoint a Doctor">
                    </div>
                    <div class="title">
                        <p>Appoint a Doctor</p>
                    </div>
                </a>
                <a href="physioTherapy/physio.php" class="serviceCard serviceCard2">
                    <div class="imgs">
                        <img src="image/physiotherapist.jpg" alt="Appoint a Physiotherapist">
                    </div>
                    <div class="title">
                        <p>Appoint a Physiotherapist</p>
                    </div>
                </a>
                <a href="nurseService/nurse.php" class="serviceCard serviceCard3">
                    <div class="imgs">
                        <img src="image/nurse.jpg" alt="Appoint a Nurse">
                    </div>
                    <div class="title">
                        <p>Appoint a Nurse</p>
                    </div>
                </a>
                <a href="24hours/24hours.php" class="serviceCard serviceCard4">
                    <div class="imgs">
                        <img src="image/24 hours care.jpg" alt="24hrs care giver">
                    </div>
                    <div class="title">
                        <p>Appoint a 24 hrs Care giver</p>
                    </div>
                </a>
                <a href="dietician/dietician.php" class="serviceCard serviceCard5">
                    <div class="imgs">
                        <img src="image/Dietician.jpg" alt="Dietician">
                    </div>
                    <div class="title">
                        <p>Appoint a Dietician</p>
                    </div>
                </a>
                <a href="occupationalTherapy/occtherapy.php" class="serviceCard serviceCard6">
                    <div class="imgs">
                        <img src="image/Occupational therapy.jpg" alt="Occupational therapy">
                    </div>
                    <div class="title">
                        <p>Appoint an Occupational therapy</p>
                    </div>
                </a>
                <a href="speechTherapy/speech.php " class="serviceCard serviceCard7">
                    <div class="imgs">
                        <img src="image/speech therapy.jpg" alt="Speech therapy">
                    </div>
                    <div class="title">
                        <p>Appoint a Speech therapy</p>
                    </div>
                </a>
            </div>
            <div class="arrow">
                <i class="fa-solid fa-arrow-right"></i>
            </div>
            <div class="points">

            </div>
        </div>


        <!-- Book a date wala circle -->
        <div class="bookContainer">
            <div class="book-a-date">
                <p>Process for any Service</p>
                <div class="line">

                </div>
                <div class="circle1">

                </div>
                <div class="big-circle">
                    <p>BOOK<br>A<br>DATE</p>
                </div>
                <div class="circle2">

                </div>
            </div>

            <!-- <div class="book-a-date">
                <p>Process for any Service</p>
                <div class="line">

                </div>
                <div class="circle1">

                </div>
                <div class="big-circle">
                    <p>BOOK<br>A<br>DATE</p>
                </div>
                <div class="circle2">

                </div>
            </div>

            <div class="book-a-date">
                <p>Process for any Service</p>
                <div class="line">

                </div>
                <div class="circle1">

                </div>
                <div class="big-circle">
                    <p>BOOK<br>A<br>DATE</p>
                </div>
                <div class="circle2">

                </div>
            </div>

            <div class="book-a-date">
                <p>Process for any Service</p>
                <div class="line">

                </div>
                <div class="circle1">

                </div>
                <div class="big-circle">
                    <p>BOOK<br>A<br>DATE</p>
                </div>
                <div class="circle2">

                </div>
            </div> -->
        </div>

        <!-- Meet Our Experts -->
        <div class="experts" id="experts">
            <div class="expert-title">
                <p>Meet Our Experts</p>
                <div class="line">
                    <!-- for underlin purpose -->
                </div>
            </div>
            <div class="expert-card">
                <div class="expert-card1">
                    <div class="expert-image">
                        <img src="image/DP.JPG" alt="expertImage">
                    </div>
                    <div class="expert-text">
                        <p class="expert-name">Rohit Jaiswal</p>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <p>Rohit is very good boy and he is expert in problem solving.</p>
                    </div>
                </div>
                <div class="expert-card2">
                    <div class="expert-image">
                        <img src="image/DP.JPG" alt="expertImage">
                    </div>
                    <div class="expert-text">
                        <p class="expert-name">Rohit Jaiswal</p>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <p>Rohit is very good boy and he is expert in problem solving.</p>
                    </div>
                </div>
                <div class="expert-card3">
                    <div class="expert-image">
                        <img src="image/DP.JPG" alt="expertImage">
                    </div>
                    <div class="expert-text">
                        <p class="expert-name">Rohit Jaiswal</p>
                        <div class="social">
                            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        </div>
                        <p>Rohit is very good boy and he is expert in problem solving.</p>
                    </div>
                </div>
            </div>
            <div class="know-more">
                <button>Know More</button>
            </div>
        </div>


        <!-- Customer Review -->
        <div class="customer-review" id="customerReview">
            <div class="review-title">
                <p>Customer Review</p>
                <div class="line">
                    <!-- for underline -->
                </div>
            </div>
            <!-- Main Container for Clients Review -->
            <div class="review_container">
                <!-- Clients Review Section -->
                <div class="reviewSection">

                    <!-- Clients Review-1 Section Starts from Here  -->
                    <div class="reviewItem">
                        <div class="topsection">
                            <div class="clientImage">
                                <span>-Salumethil R</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </div>
                        <article>
                            <p class="review">My dad had done physiotherapy for Sciatica for a week. It was a good
                                experience.
                                Our ortho doctor had suggested Carebees healthcare. They had promptly contacted us and
                                we opted
                                for
                                home care services. Dr Ranadip had done a great job. I would highly recommend them for
                                physiotherapy. Thankyou so much.</p>
                        </article>
                    </div>

                    <!-- Clients Review-2 Section Starts from Here  -->
                    <div class="reviewItem">
                        <div class="topsection">
                            <div class="clientImage">
                                <span>-Keerthana Hegde</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </div>
                        <article>
                            <p class="review">We had reached out to homecare physiotherapy after my father was
                                discharged from
                                disc
                                compression surgery. We need a physical assistance
                                for him to get back to normal routine.
                                The center sent us home a physiotherapist
                                Nazariya under Dr Randeep's supervision. She was
                                really patient throughout the program and treatment helped him gain back 70% of
                                strength. A
                                bit expensive compare to other centers but service was good.</p>
                        </article>
                    </div>

                    <!-- Clients Review-3 Section Starts from Here  -->
                    <div class="reviewItem">
                        <div class="topsection">
                            <div class="clientImage">
                                <span>-Sushumna</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </div>
                        <article>
                            <p class="review">My grandfather suffered a second stroke in the month of March and the
                                nuerologist
                                suggested
                                for physiotherapy. Got in contact with Dr Ranadeep
                                and got the physiotherapy done from them.
                                Their service is very good and they used to come to our place and give the physiotherapy
                                sessions and they are very caring and committed to their work. Thankyou so much.</p>
                        </article>
                    </div>

                    <!-- Clients Review-4 Section Starts from Here  -->
                    <div class="reviewItem">
                        <div class="topsection">
                            <div class="clientImage">
                                <span>-Vishalakshi H</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star-half-stroke"></i></li>
                            </ul>
                        </div>
                        <article>
                            <p class="review">I underwent spine surgery recently and was advised physiotherapy by the
                                spine/nuero surgeon.
                                I consulted Dr Randeep, head of Carebees Healthcare
                                for home physiotherapy services. He promptly visited my home
                                and arranged a physiotherapist residing near my vicinity. I received very good services
                                from
                                this company at my home itself. Sometimes I used to call Dr Randeep Sir to clear my
                                doubts and
                                he promptly attended my calls and guided me properly with a lot of patience. My
                                heartfelt thanks to Dr Randeep sir and his team.</p>
                        </article>
                    </div>

                    <!-- Clients Review-5 Section Starts from Here  -->
                    <div class="reviewItem">
                        <div class="topsection">
                            <div class="clientImage">
                                <span>-Ashwini Sheshadri</span>
                            </div>
                            <ul>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-solid fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                                <li><i class="fa-regular fa-star"></i></li>
                            </ul>
                        </div>
                        <article>
                            <p class="review">I would highly recommend Carebees Healthcare for physiotherapy treatments.
                                The
                                staffs are
                                very good listen to the patients
                                thereby providing excellent services.</p>
                        </article>
                    </div>
                </div>
                <!-- Right arrow starts here -->
                <div class="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>

            </div>
        </div>



        <!-- Adding Contact page -->
        <div class="contactWrapper">
            <?php
            include ('contact/contact.php');
            ?>
        </div>

        <!-- Adding footer -->
        <div class='FooterWrapper'>
            <?php
            include ('footer/footer.php')
                ?>
        </div>


    </div> <!-- Main section end -->

    <!-- Adding script -->
    <script src="javascript/script.js"></script>
    <!-- <script src="../javascript/Scroll.js"></script> -->
</body>

</html>