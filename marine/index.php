<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clarion</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/custom-styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <div class="page-sections">
        
        <section class="sections">
            <div class="section-1-video">
                <div class="main-video">
                    <video onloadeddata="this.play();" poster="assets/img/poster.png" playsinline muted loop autoplay>
                        <source src="assets/img/video.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="container">
                    <div class="content-slider">
                        <div class="content-slider-content">
                            <div class="first-slide">
                                <div class="slider-logo">
                                    <img src="assets/img/logo-section-5.png" alt="">
                                </div>
                                <div class="main-slider-content">
                                    <h1>We are launching our <strong>website</strong> in</h1>
                                    <h5 id="timer">10</h5>
                                    <button id="start-btn" onclick="startCountdown()">Start</button>
                                    <a href="" id="launch-btn" style="display:none;">Launch Website now</a>
                                </div>
                            </div>
                        </div>
                        <div class="content-slider-content">
                            <div class="second-slide">
                                <div class="slider-logo">
                                    <img src="assets/img/logo-section-5.png" alt="">
                                </div>
                                <h2><strong>Clarion Marine Network</strong> offer a single point of contact to fulfill marine logistics requirements.</h2>
                                <p>Clarion Marine Network will offer its customers a single point of contact to fulfill its regional marine logistics requirements. Our logistics experts will deploy their best-of-class professional capabilities to offer a one-stop integrated shipping solution to meet their regional logistics demands.</p>
                                <div class="why-choose">
                                    <img class="why-choose-pic" src="assets/img/section-2-content-ovelay.png" alt="">
                                    <div class="why-choose-content">
                                        <h4>WHY CHOOSE US</h4>
                                        <div class="why-choose-blocks">
                                            <div class="why-choose-block">
                                                <img class="img-fluid" src="assets/img/why-choose-1.png" alt="">
                                                <h6>Partners with leading logistics companies</h6>
                                            </div>
                                            <div class="why-choose-block">
                                                <img class="img-fluid" src="assets/img/why-choose-2.png" alt="">
                                                <h6>Covers 9 countries in Asia</h6>
                                            </div>
                                            <div class="why-choose-block">
                                                <img class="img-fluid" src="assets/img/why-choose-3.png" alt="">
                                                <h6>Lead by experts in the field</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections">
            <div class="service-wrap">
                <div class="container">
                    <h2>Services overview</h2>
                    <p>Our personnel have decades of experience in offering unique marine logistics solutions and understand the unique requirements of ship owners and crew members. We act as local representatives on behalf of owners, charterers and operators of all types of vessels</p>
                    <div class="service-slider">
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-1.png" alt="">
                            <h4>Crew handling</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-2.png" alt="">
                            <h4>Cash to Master</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-3.png" alt="">
                            <h4>Supplies of bunker fuels, lubricants, and chemicals</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-4.png" alt="">
                            <h4>Provisions and freshwater</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-5.png" alt="">
                            <h4>Spares clearance and delivery</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-6.png" alt="">
                            <h4>Inward / outward clearance of ships </h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-7.png" alt="">
                            <h4>Liaison with local authorities and communications assistance</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-8.png" alt="">
                            <h4>Comprehensive support for dry-docking and repair supervision</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-9.png" alt="">
                            <h4>Follow-up activities with workshops, contractors, etc.</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-10.png" alt="">
                            <h4>Medical evacuation</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-11.png" alt="">
                            <h4>Sludge/Slop disposal</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-12.png" alt="">
                            <h4>De-bunkering</h4>
                        </div>
                        <div class="service-slides">
                            <img src="assets/img/service-slider-icon-13.png" alt="">
                            <h4>Underwater services</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections">
            <div class="global-wrap">
                <div class="container">
                    <div class="global-contents">
                        <h2>Clarion Global Coverage</h2>
                        <p>With decades of experience in offering unique marine logistics solutions and understanding the unique requirements of ship owners and crew members. CMN will act as local representatives on behalf of owners, charterers, and operators of all types of vessels</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="sections">
            <div class="last-section">
                <div class="container">
                    <div class="last-section-contents">
                        <img src="assets/img/logo-section-5.png" alt="">
                        <h3>Reach us</h3>
                        <p>Thurburn Wing, 400, Deans Road, Colombo 10 (01000), Sri Lanka</p>
                        <div class="contact">
                            <div class="contact-info">
                                <h4>Phone</h4>
                                <a href="tel:94 11 2167000">94 11 2167000</a>
                            </div>
                            <div class="contact-info">
                                <h4>Email</h4>
                                <a href="mailto:info@clarion.lk">info@clarion.lk</a>
                            </div>
                        </div>
                        <div class="social">
                            <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </div>
                        <div class="copyright">
                            <p>Copyright 2023 Clarion Marine Network. All Rights Reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/scrollify/1.0.21/jquery.scrollify.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/custom.js"></script> 
     
</body>
</html>