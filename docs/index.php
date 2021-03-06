

<?php
/*====================PHP MAILER================*/

require 'PHPMailer/PHPMailerAutoload.php';
require 'credential.php';

if(isset($_POST['send'])){

    // print_r($_POST);
$name=$_POST['name'];
$email=$_POST['email'];
$message= strip_tags($_POST['emailbody']);
$project=$_POST['project'];

$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = EMAILID;                 // SMTP username
$mail->Password = PASSWORD;                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom(EMAILID, 'karan');
$mail->addAddress('karan.agarwal1742@gmail.com', 'Karan Agarwal');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = $project;
$mail->Body    = $name . ' send you this message ' . $message  . ' by this mail id ' . $email;
$mail->AltBody = $email;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
// } else {
//     echo 'Message has been sent';
}}
?>



<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="icon" href="assets/img/icons8-k-50.png">
        
        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        
        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css?v=<?php echo time();?>">

        <title>Karan Agarwal</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">Karan</a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list grid">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">
                                <i class="uil uil-estate nav__icon"></i> Home
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#about" class="nav__link">
                                <i class="uil uil-user nav__icon"></i> About
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#skills" class="nav__link">
                                <i class="uil uil-file-alt nav__icon"></i> Skills
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#services" class="nav__link">
                                <i class="uil uil-briefcase-alt nav__icon"></i> Services
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#portfolio" class="nav__link">
                                <i class="uil uil-scenery nav__icon"></i> Portfolio
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">
                                <i class="uil uil-message nav__icon"></i> Contactme
                            </a>
                        </li>
                    </ul>
                    <i class="uil uil-times nav__close" id="nav-close"></i>
                </div>

                <div class="nav__btns">
                    <!-- Theme Change Button -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>


                    <div class="nav__toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>   
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__content grid">
                        <div class="home__social">
                            <a href="https://linkedin.com/in/karan-agarwal-16b843171"  target="_blank" class="home__social-icon">
                                <i class="uil uil-linkedin-alt"></i>
                            </a>
                            <a href="https://dribbble.com/kagarwal1742" target="_blank" class="home__social-icon">
                                <i class="uil uil-dribbble"></i>
                            </a>
                            <a href="https://github.com/i-m-karanagarwal" target="_blank" class="home__social-icon">
                                <i class="uil uil-github-alt"></i>
                            </a>
                        </div>
                        <div class="home__img">
                            <svg class="home__blob" viewBox="0 0 200 187" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <mask id="mask0" mask-type="alpha">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                    130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                    97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                    0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>
                                </mask>
                                <g mask="url(#mask0)">
                                    <path d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                    165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                    129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                    -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"/>

                                    <image class="home__blob-img" x='25' y='-10' xlink:href="assets/img/profile.png"/>
                                </g>
                            </svg>
                        </div>
                        <div class="home__data">
                            <h1 class="home__title">Hi, I'm Karan</h1>
                            <h3 class="home__subtitle">I'm a <span class="typing" style="color: hsl(250, 69%, 61%)"></span></h3>
                            <a href="#contact" class="button button-flex">
                                Contact Me <i class="uil uil-message button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <div class="home__scroll">
                        <a href="#about" class="home__scroll-button button--flex">
                            <i class="uil uil-mouse-alt home__scroll-mouse"></i>
                            <span class="home__scroll-name">Scroll Down</span>
                            <i class="uil uil-arrow-down home__scroll-arrow"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
                <h2 class="section__title">About Me</h2>
                <span class="section__subtitle">My Introduction</span>
                <div class="about__container container grid">
                    <img src="assets/img/about.jpg" alt="" class="about__img">
                    <div class="about__data">
                        <p class="about__description">
                            You can't use up creativity. The more you use the more you have.
                        </p>
                        <div class="about__info">
                            <div>
                                <span class="about__info-title">01+</span>
                                <span class="about__info-name">Years <br> experience</span>
                            </div>

                            <div>
                                <span class="about__info-title">05+</span>
                                <span class="about__info-name">Completed <br> project</span>
                            </div>

                            <div>
                                <span class="about__info-title">05+</span>
                                <span class="about__info-name">Clients <br> worked</span>
                            </div>
                        </div>
                        <div class="about__buttons">
                            <a download="" href="assets/pdf/Karan Agarwal CV.pdf" class="button button--flex">
                                Download CV<i class="uil uil-download-alt button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>
        
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
                <h2 class="section__title">Skills</h2>
                <span class="section__subtitle">My technical level</span>
                <div class="skills__container container grid">
                    <div>
                        <!--==================== SKILLS 1 ====================-->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>

                                <div>
                                    <h1 class="skills__tilte">Frontend Developer</h1>
                                    <span class="skills__subtitle">More than 1 year</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__number">70%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__number">50%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__react"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--==================== SKILLS 2 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>

                                <div>
                                    <h1 class="skills__tilte">Backend Developer</h1>
                                    <span class="skills__subtitle">Less than 1 year</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__node"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Firebase</h3>
                                        <span class="skills__number">15%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__firebase"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__number">55%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__python"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <!--==================== SKILLS 3 ====================-->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>

                                <div>
                                    <h1 class="skills__tilte">Designer</h1>
                                    <span class="skills__subtitle">Less than 1 year</span>
                                </div>

                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Figma</h3>
                                        <span class="skills__number">20%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__figma"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Sketch</h3>
                                        <span class="skills__number">25%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__sketch"></span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">Photoshop</h3>
                                        <span class="skills__number">25%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__photoshop"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
                <h2 class="section__title">Qualification</h2>
                <span class="section__subtitle">My personal Journey</span>
                <div class="qualification__container container">
                    <div class="qualification__tabs">
                        <div class="qualification__button button--flex qualification__active"   data-target='#education'>
                            <i class="uil uil-graduation-cap qualification__icon"></i>
                            Education
                        </div>

                        <!-- <div class="qualification__button button--flex" data-target='#work'>
                            <i class="uil uil-briefcase-alt qualification__icon"></i>
                            Work
                        </div> -->
                    </div>

                    <div class="qualification__section">
                        <!--==================== QUALIFICATION CONTENT 1 ====================-->
                        <div class="qualification__content qualification__active" data-content id="education">
                            <!--==================== QUALIFICATION 1 ====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Computer Engineer</h3>
                                    <span class="qualification__subtitle">Graphic Era University</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - Pursuing
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            <!--==================== QUALIFICATION 2 ====================-->
                            <div class="qualification__data">

                                <div></div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Web Design</h3>
                                    <span class="qualification__subtitle">Learning from a friend</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - Pursuing
                                    </div>
                                </div>

                                
                            </div>

                            <!--==================== QUALIFICATION 3 ====================-->
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Web development</h3>
                                    <span class="qualification__subtitle">Learning from a friend</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - Pursuing
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <!--span class="qualification__line"></span-->
                                </div>
                            </div>

                            <!--==================== QUALIFICATION 4 ====================-->
                            <!-- <div class="qualification__data">
                                <div></div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <!-- <span class="qualification__line"></span>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Master in Ui/Ux</h3>
                                    <span class="qualification__subtitle">Graphic Era University</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2020 - Pursuing
                                    </div>
                                </div>
                            </div> -->
                        </div>

                        <!--==================== QUALIFICATION CONTENT 2 ====================-->
                         <!-- <div class="qualification__content" data-content id="work">
                             
                            <div class="qualification__data"> 
                                <div>
                                    <h3 class="qualification__title">Software Engineer</h3>
                                    <span class="qualification__subtitle">Tesla- India</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2025 - 2028
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>

                            
                            <div class="qualification__data">

                                <div></div>
                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                                <div>
                                    <h3 class="qualification__title">Frontend Developer</h3>
                                    <span class="qualification__subtitle">Apple Inc - India</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2028 - 2032
                                    </div>
                                </div>

                                
                            </div>

                            
                            <div class="qualification__data">
                                <div>
                                    <h3 class="qualification__title">Ui Designer</h3>
                                    <span class="qualification__subtitle">Adobe - India</span>                    
                                    <div class="qualification__calender">
                                        <i class="uil uil-calendar-alt"></i>
                                        2032 - 2036
                                    </div>
                                </div>

                                <div>
                                    <span class="qualification__rounder"></span>
                                    <span class="qualification__line"></span>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>

            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
                <h2 class="section__title">Services</h2>
                <span class="section__subtitle">What I Offer</span>

                <div class="services__container container grid">
                    <!--==================== SERVICES 1 ====================-->

                    <div class="services__content">
                        <div>
                            <i class="uil uil-web-grid services__icon"></i>
                            <h3 class="services__title">Ui/Ux <br> Designer</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Ui/Ux <br> Designer</h4>
                                <i class="uil uil-times services__modal-close"></i>
                                
                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I develop the user interface</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Design user flows and wireframes.</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I create ux element  interactions</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Create prototypes</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                     <!--==================== SERVICES 2 ====================-->

                     <div class="services__content">
                        <div>
                            <i class="uil uil-arrow services__icon"></i>
                            <h3 class="services__title">Frontend <br> Developer</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Frontend <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>
                                
                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I prioritize user experience</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Web Page Development</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I Bring a concept to life with HTML, CSS, and JavaScript.</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I design new features, and maintain old features
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                     <!--==================== SERVICES 3 ====================-->

                     <div class="services__content">
                        <div>
                            <i class="uil uil-server-network  services__icon"></i>
                            <h3 class="services__title">Backend <br> Developer</h3>
                        </div>
                        <span class="button button--flex button--small button--link services__button">
                            View More
                            <i class="uil uil-arrow-right button__icon"></i>
                        </span>
                        <div class="services__modal">
                            <div class="services__modal-content">
                                <h4 class="services__modal-title">Backend <br> Developer</h4>
                                <i class="uil uil-times services__modal-close"></i>
                                
                                <ul class="services__modal-services grid">
                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I troubleshoot and debug applications</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>Perform UI tests to optimize performance</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I write clean code to develop functional web applications</p>
                                    </li>

                                    <li class="services__modal-service">
                                        <i class="uil uil-check-circle services__modal-icon"></i>
                                        <p>I provide training and support to internal teams
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
               <h2 class="section__title">PortFolio</h2> 
               <span class="section__subtitle">Most recent work</span>

               <div class="portfolio__container container swiper-container">
                   <div class="swiper-wrapper">
                       <!--==================== PORTFOLIO 1 ====================-->
                       <div class="portfolio__content grid swiper-slide">
                           <img src="assets/img/portfolio1.jpg" alt="" class="portfolio__img">

                           <div class="portfolio__data">
                               <h3 class="portfolio__title">Modern Website</h3>
                               <p class="portfolio__description">Website adaptable to all devices, with ui components
                                   and animated interactions.
                               </p>
                               <a href="#" class="button button--flex button--small portfolio__button">
                                   Demo
                                   <i class="uil uil-arrow-right button__icon"></i>
                               </a>
                           </div>
                       </div>

                       <!--==================== PORTFOLIO 2 ====================-->
                       <div class="portfolio__content grid swiper-slide">
                        <img src="assets/img/portfolio2.jpg" alt="" class="portfolio__img">

                        <div class="portfolio__data">
                            <h3 class="portfolio__title">Ui/Ux design</h3>
                            <p class="portfolio__description">A modern Ui/Ux design for a advisory company.
                            </p>
                            <a href="https://drive.google.com/file/d/1zTlKVZGUVk4eeRDN6bnzvTT0ccHDYcuV/view?usp=sharing" target="_blank"
                             class="button button--flex button--small portfolio__button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                       </div>

                        <!--==================== PORTFOLIO 3 ====================-->
                        <div class="portfolio__content grid swiper-slide">
                            <img src="assets/img/portfolio3.jpg" alt="" class="portfolio__img">

                            <div class="portfolio__data">
                                <h3 class="portfolio__title">Some Basic Sites</h3>
                                <p class="portfolio__description">Basic sites made by me.
                                </p>
                                <a href="https://github.com/i-m-karanagarwal/HTML" target='_blank' class="button button--flex button--small portfolio__button">
                                    Demo
                                    <i class="uil uil-arrow-right button__icon"></i>
                                </a>
                            </div>
                        </div>    
                    </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next">
                            <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
               </div>
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
                <div class="project__bg">
                    <div class="project__container container grid">
                        <div class="project__data">
                            <h2 class="project__title">You have a new project</h2>
                            <p class="project__description">Contact me now and get a 30% discount on your new project</p>
                            <a href="#contact" class="button button--flex button--white">
                                Contact Me
                                <i class="uil uil-message project__icon button__icon"></i>
                            </a>
                        </div>
                        <img src="assets/img/project.png" alt="" class="project__img">
                    </div>
                </div>

            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
                <h2 class="section__title">My testimonial</h2>
                <span class="section__subtitle">My Client Saying</span>
                <div class="testimonial__container container swiper-container">
                    <div class="swiper-wrapper">
                         <!--==================== TESTIMONIAL 1 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial__img">
                                    <div>
                                        <h3 class="testimonial__name">Vansh Patpatia</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">I get a good impression, I carry out my project with
                                all the possible quality and attention and support 24 hurs a day.
                            </p>
                        </div>

                        <!--==================== TESTIMONIAL 2 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial2.jpg" alt="" class="testimonial__img">
                                    <div>
                                        <h3 class="testimonial__name">Vanshika Jain</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">He took the time to listen to what I wanted but also brought their own ideas,
                                 experience and creativity so that the end design was more rounded.
                            </p>
                        </div>

                        <!--==================== TESTIMONIAL 3 ====================-->
                        <div class="testimonial__content swiper-slide">
                            <div class="testimonial__data">
                                <div class="testimonial__header">
                                    <img src="assets/img/testimonial3.jpg" alt="" class="testimonial__img">
                                    <div>
                                        <h3 class="testimonial__name">Harshit Dhiman</h3>
                                        <span class="testimonial__client">Client</span>
                                    </div>
                                </div>

                                <div>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                    <i class="uil uil-star testimonial__icon-star"></i>
                                </div>
                            </div>

                            <p class="testimonial__description">Fantastic work! I am just impressed by their 
                                service quality and working strategy.
                            </p>
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-pagination-testimonial"></div>
                </div>

            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
                <h2 class="section__title">Contact Me</h2>
                <span class="section__subtitle">Get in touch</span>

                <div class="contact__container container grid">
                    <div class="contact__information">
                        <i class="uil uil-phone contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Call Me</h3>
                            <span class="contact__subtitle">+91-9084110655</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-envelope contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Email</h3>
                            <span class="contact__subtitle">karan.agarwal1742@gmail.com</span>
                        </div>
                    </div>

                    <div class="contact__information">
                        <i class="uil uil-map-marker contact__icon"></i>

                        <div>
                            <h3 class="contact__title">Location</h3>
                            <span class="contact__subtitle">Wahid Nagar, Najibabad UP India</span>
                        </div>
                    </div>

                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST"  class="contact__form grid">
                    <div class="contact__inputs grid">
                            <div class="contact__content">
                                <label for="" class="conatct__label">Name</label>
                                <input type="text" class="contact__input" name="name">
                            </div>

                            <div class="contact__content">
                                <label for="" class="conatct__label">Email</label>
                                <input type="email" class="contact__input" name="email">
                            </div>
                            
                        <div class="contact__content">
                            <label for="" class="conatct__label">Project</label>
                            <input type="text" class="contact__input" name="project">
                        </div>

                        <div class="contact__content">
                            <label for="" class="conatct__label">Message</label>
                            <textarea  id="" cols="0" rows="7"  name="emailbody" class="contact__input"></textarea>
                        </div>
                    
                        <div class="contact__submit">
                            <input type="submit" value="Send message"  name="send" class="button button--flex button--send">
                        </div>
                        </div>
                    </form>
                    
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
            <div class="footer__bg">
                <div class="footer__container container grid">
                    <div>
                        <h1 class="footer__title">Karan Agarwal</h1>
                        <span class="footer__subtitle">Frontend Developer</span>
                    </div>

                    <ul class="footer__links">
                        <li>
                            <a href="#services" class="footer__link">Services</a>
                        </li>
                        <li>
                            <a href="#portfolio" class="footer__link">Portfolio</a>
                        </li>
                        <li>
                            <a href="#contact" class="footer__link">Contact Me</a>
                        </li>
                    </ul>

                    <div class="footer__socials">
                        <a href="https://www.facebook.com/k.agarwal.5201" target="_blank" class="footer__social">
                            <i class="uil uil-facebook-f"></i>
                        </a>

                        <a href="https://www.instagram.com/i_m_karanagarwal/" target="_blank" class="footer__social">
                            <i class="uil uil-instagram"></i>
                        </a>

                        <a href="https://twitter.com/karanag08903800" target="_blank" class="footer__social">
                            <i class="uil uil-twitter-alt"></i>
                        </a>
                    </div>
                </div>
                <p class="footer__copy">&#169; Karan Agarwal. All right reserved</p>
            </div>
        </footer>
        
        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class="uil uil-arrow-up scrollup__icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--===================== TYPING JS ====================-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>