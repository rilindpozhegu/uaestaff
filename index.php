<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Tab Logo -->
    <link rel="icon" href="img/favicon-01.png">
    <title>UAE STAFF</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" href="build/styles.css">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">


<!-- NavigationBar -->
    <?php include 'navigation_bar.php';?>

<!-- Homepage First Section -->

<!-- Header Section On homepage -->
<div class="mobile_back_home_1">
<form id="video-landing" class="home_page_hero">
<section class="video-holder">
    <section id="video-landing" class="hm-black-strong mobile-d-n">
        <video autoplay="autoplay" loop="loop" id="bgvid" poster="img/background/backg_1-01.png" muted>
            <source src="img/uaev2.mp4" type="video/mp4" mute="muted" controls/> 
            <!-- <source src="http://mdbootstrap.com/images/video/Agua-natural.mp4" type="video/mp4" /> -->
        </video>
    </section>
</section>
</form>

<div class="home_cover_section main_covers_text">
    <div class="container">
        <div class="row">
            <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">JOIN US FOR SOME EXCITING OPPORTUNITIES</p>
            <h1 class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">WELCOME TO UAE STAFF</h1>
            <p class=" wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">A modern talent agency that takes the staff at your events<br> to the next level.</p>
            <button class="button_colored wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">Register with Us</button>
            <button class="button_transparent wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".5s">Hire our Staff</button>
        </div> 
    </div>
</div>
</div>
<!-- Our Event Staffing Solutions -->
    <?php include 'event_solutions_section.php';?>
<!-- Choose N’Go -->
    <?php include 'choose_n_go_section.php';?>


<!-- Beneftis Section Homepage -->

<section class="benefits_section_homepage">
    <section class="container">
        <div class="row">
            <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">Benefits</h1>
            <hr>
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".3s">
                <p>Working with UAE Staff means collaborating with a professional and experienced team that will make your events come alive and leave unforgettable impressions on your guests.Not only is our staff a good fit for any size or type of event, be it a concert or a house party, but we also do not settle for anything short of amazing when it comes to providing our clients with the perfect solutions.</p>
                <p>We are also committed to being a green company and treating our staff fairly and with care. We are committed to providing opportunities and opening doors for our partners.</p>
                <a href="contact.php"><button class="button_colored">Contact</button></a>
            </div>
            <div class="col-md-5 col-md-offset-1 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
                <h4><i class="fa fa-check" aria-hidden="true"></i> Diverse staff</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Professionalism</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Punctuality</h4>
                <h4><i class="fa fa-check" aria-hidden="true"></i> Social Responsibility</h4>
            </div>
        </div>
    </section>
</section>


<!-- Add staff -->

<section class="add_staff_home_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".2s">
                <img src="img/icons/add_staff1-01.svg">
                <h2>Hire Staff</h2>
                <p>Organizing an event? Look no further! Just click below to get started, select your staff, and get a quote!</p>
                <a href="contact.php"><button class="button_colored_dark">Get a Quote</button></a>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay=".4s">
                <img src="img/icons/add_staff2-01.svg">
                <h2>Become a Partner</h2>
                <p>Join our team and start working with other talented and ambitious people such as yourself. Just click below to register!</p>
                <a href="apply.php"><button class="button_colored">Apply</button></a>
            </div>
        </div>
    </div>
</section>


<!-- testimonial Section Homepage -->

    <?php include 'testimonial_section_home_ab.php';?>
<!-- Contact Form Section -->
    <?php include 'contact_section_input.php';?>

<!-- Footer all Pages -->    
    <?php include 'footer_all.php';?>

<!-- jQuery -->

    <script type="text/javascript" src="build/scripts.js"></script>

</body>

</html>
