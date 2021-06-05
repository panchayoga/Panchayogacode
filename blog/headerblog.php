<?php //$base_url = 'http://'.$_SERVER['HTTP_HOST'].'/panchayoga/';?>
<?php  $base_url = 'https://www.panchayoga.com/';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Pancha Yoga</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords"> <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet"> 
            <link href="<?php echo $base_url; ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> <!-- Template Main CSS File -->
    <link href="<?php echo $base_url; ?>css/style.css" rel="stylesheet">
    <!-- <script> var BASE_URL = "https://www.panchayoga.com/demo/new-panchayoga-html";</script> -->
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="">
        <div class="container-fluid d-flex align-items-center justify-content-between">  <img
                    src="<?php echo $base_url; ?>img/pancha-yoga-logo.png" class="img-fluid">
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <div>
                <div id="topbar" class="d-none d-lg-flex align-items-center">
                    <div class="container d-flex">
                        <div class="contact-info ml-auto"> <i class="icofont-phone"></i> +91-9701234705 <i
                                class="icofont-envelope"></i> 
                                <a
                                href="mailto:info@panchayoga.com">info@panchayoga.com</a> </div>
                        <div class="social-links"> <a href=https://www.facebook.com/PanchaYogaa target="_blank" class="facebook"><img  src="<?php echo $base_url; ?>img/facebook.svg"
                                    class="img-fluid"> </a> <a href="https://www.instagram.com/vikas.panchayoga/?hl=en" target="_blank" class="instagram"><img src="<?php echo $base_url; ?>img/instagram.svg"
                                    class="img-fluid"></a> </div>
                    </div>
                </div>
                <nav class="nav-menu ml-auto d-none d-lg-block navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class=""><a href="../index.php">Home</a></li>
                        <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="javascript:void(0);"
                                data-toggle="dropdown"> Our Story </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../aboutus.php"> About Pancha Yoga</a></li>
                                <li><a class="dropdown-item" href="../meet-our-teacher.php"> Meet Vikas Shenoy </a></li>
                                <li><a class="dropdown-item" href="../our-values.php"> Our Values </a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="javascript:void(0);"
                                data-toggle="dropdown">Learn Yoga</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../learn-yoga.php"> Yoga Style</a></li>
                                <li><a class="dropdown-item" href="../classes.php"> Classes </a></li>
                                <li><a class="dropdown-item" href="../workshop.php"> Workshops</a></li>
                                <li><a class="dropdown-item" href="../personal-training.php"> Personal Training</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown"> <a class="nav-link  dropdown-toggle" href="javascript:void(0);"
                                data-toggle="dropdown"> Inspiration </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="../testimonials.php"> Testimonials</a></li>
                                <li><a class="dropdown-item" href="../blog.php"> Blogs </a></li>
                                <li><a class="dropdown-item" href="../gallery.php"> Gallery </a></li>
                                <!--<li><a class="dropdown-item" href="community.php"> Community </a></li>                <li><a class="dropdown-item" href="yoga-room.php"> Yoga Room </a></li>-->
                            </ul>
                        </li>
                        <li class=""><a href="<?php echo $base_url; ?>faq.php">FAQs</a></li>
                        <li class=""><a href="<?php echo $base_url; ?>contactus.php">Contact</a></li>
                    </ul>
                </nav> <!-- .nav-menu -->
            </div>
        </div>
    </header> <!-- End Header -->