<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Amr</title>
    <link rel="icon" href="img/fav.png" type="image/x-icon">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- main css -->
    <link href="css/style.css" rel="stylesheet">


    <!-- modernizr -->
    <script src="js/modernizr.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div class="pre-container">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- end Preloader -->

    <div class="container-fluid"> 
       <!-- box-header -->
        <header class="box-header">
            <div class="box-logo">
                <a href="index.php"><img src="img/logo.png" width="80" alt="Logo"></a>
            </div>
            <!-- box-nav -->
            <a class="box-primary-nav-trigger" href="#0">
                <span class="box-menu-text">Menu</span><span class="box-menu-icon"></span>
            </a>
        </header>
        <!-- end box-header -->
        
        <!-- nav -->
       <?php include "navbar.php"; ?>
        <!-- end nav -->  
    </div>
    
    <!-- Top bar -->
    <div class="top-bar">
        <h1>About Me</h1>
        <p><a href="#">Home</a> / About me</p>
    </div>
    <!-- end Top bar -->
    
    <!-- Main container -->
    <div class="container main-container clearfix"> 
        <div class="col-md-6">
            <img src="img/Amr.jpg" class="img-responsive" alt="" />
        </div>
        <div class="col-md-6">
           <h3 class="uppercase">About Me </h3>
           <h5>Front-End Web Developer</h5>
           <div class="h-30"></div>
            <p>Experienced front-end web developer with a demonstrated history of working in the computer software industry. Skilled in Bootstrap, Cascading Style Sheets (CSS),javascript,Networking, HTML, and Adobe Photoshop. Strong professional with a Bachelor of Multimedia and Communication focused in Web/Multimedia Management and Webmaster  </p>

            <p>I have 3 years experience as a web/interface designer.I have a love of clean, elegant styling. I have lots of experience in the production of CSS and HTML for modern websites.

 </p>
            <div class="h-10"></div>
            <ul class="social-ul">
                <li class="box-social"><a href="https://www.facebook.com/amr.niyas"><i class="ion-social-facebook"></i></a></li>
                <li class="box-social"><a href="https://www.instagram.com/amr_niyaz/?hl=en"><i class="ion-social-instagram-outline"></i></a></li>
                <li class="box-social"><a href="https://twitter.com/amr_niyaz"><i class="ion-social-twitter"></i></a></li>
                <li class="box-social"><a href="https://www.linkedin.com/in/amr-bin-niyaz/"><i class="ion-social-dribbble"></i></a></li>
            </ul>


        </div>
    </div>
    <!-- end Main container -->


    <!-- footer -->
     <?php include "footer.php"; ?>
    <!-- end footer -->
    
    <!-- back to top -->
    <a href="#0" class="cd-top"><i class="ion-android-arrow-up"></i></a>
    <!-- end back to top -->



    <!-- jQuery -->
    <script src="js/jquery-2.1.1.js"></script>
    <!--  plugins -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/animated-headline.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>


    <!--  custom script -->
    <script src="js/custom.js"></script>

</body>

</html>