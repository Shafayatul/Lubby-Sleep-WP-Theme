<!DOCTYPE html>
<html>

<head>
  <title><?php wp_title(''); ?></title>
  <meta charset="utf-8">
  <meta name="theme-color" content="#D1242B" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/ms-icon-144x144.png">


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/responsive.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/cpap-3.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/generic-page.css">
  <?php wp_head();?>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
  <!-- header-section -->
  <header class="" id="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container-fluid nav-container">
        <div class="logo-div">
          <a class="navbar-brand" href="<?php echo home_url();?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Lullaby.png">
          </a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">



        
          <ul class="navbar-nav menu-center">
             <li class="d-flex nav-item my-dwon in-nav-item active">
              <a class="nav-link" href="<?php echo site_url();?>">Home |</a>  <a class="nav-link" href="https://shop.lullabysleep.com.au/">Shop</a><span class="sr-only">(current)</span></a>
			      </li>  
            <li class="nav-item my-dwon ">
              <a class="nav-link " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Problems & Solutions
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('/tiredness');?>">Tiredness & Fatigue</a>
                <a class="dropdown-item" href="<?php echo site_url('/snoring');?>">Snoring</a>
                <a class="dropdown-item" href="<?php echo site_url('/insomnia');?>">Insomnia</a>
                <a class="dropdown-item" href="<?php echo site_url('/sleep-apnea');?>">Sleep Apnea</a>
                <a class="dropdown-item" href="<?php echo site_url('/restless-legs');?>">Restless Legs</a>
                <a class="dropdown-item" href="<?php echo site_url('/more-sleep-problems');?>">More Sleep Problems</a>
              </div>
            </li>
            
            <li class="nav-item my-dwon">
              <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Services
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('/sleep-testing');?>">Sleep Testing</a>
                <a class="dropdown-item" href="<?php echo site_url('/sleep-physician-consults');?>">Sleep Physician
                  Consults</a>
                <a class="dropdown-item" href="<?php echo site_url('/cpap-services');?>">CPAP Services</a>
                <a class="dropdown-item" href="<?php echo site_url('/driver-sleep-assessments');?>">Driver Sleep
                  Assessments</a>
                <a class="dropdown-item" href="<?php echo site_url('/corporate-executive-health');?>">Corporate &
                  Executive Health</a>
                <a class="dropdown-item" href="<?php echo site_url('/mas-dental-device');?>">Dental Device Checks</a>
              </div>
            </li>
            <li class="nav-item my-dwon ">
              <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                About
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href=<?php echo site_url('/our-team');?>">Our Team</a>
                <a class="dropdown-item" href="<?php echo site_url('/dr-dev-banerjee');?>">Dr Dev Banerjee</a>
                <a class="dropdown-item" href="<?php echo site_url('/media-2');?>">Media</a>

              </div>
            </li>
            <li class="nav-item my-dwon">
              <a class="nav-link " href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Resources
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('/info-for-doctors');?>">Info for Doctors</a>
                <a class="dropdown-item" href="<?php echo site_url('/referrals');?>">Referrals</a>
				<a class="dropdown-item" href="<?php echo site_url('/fact-sheets');?>">Fact Sheets & Resources</a>
                <a class="dropdown-item" href="<?php echo site_url('/faq');?>">FAQ’s</a>
                <a class="dropdown-item" href="<?php echo site_url('/quiz');?>">Self Sleep Quiz</a>
              </div>
            </li>

            <li class="nav-item my-dwon ">
              <a class="nav-link " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                Contact
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="<?php echo site_url('/book-appointment');?>">Book Appointment</a>
				<a class="dropdown-item" href="<?php echo site_url('/book-a-sleep-test');?>">Book a Sleep Test</a>
                <a class="dropdown-item" href="<?php echo site_url('/contact-us');?>">Contact us</a>
				<a class="dropdown-item" href="<?php echo site_url('/contact-us');?>">Locations</a>
																					 				
              </div>
            </li>

            <li class="nav-item active ">
              <a class="nav-link srch-desktop">
                <div class="search-box">
                  <input type="text" placeholder="Search">
                  <span><i onclick="myFunction()" class="fa fa-search"></i></span>
                </div>
              </a>
            </li>
            <li class="nav-item nav-more-desktop phone">
              <a class="nav-link" onclick="return gtag_report_conversion('tel:+1300 375 384');"
                href="tel:+1300 375 384"><i class="fa fa-phone"></i> 1300 375 384<br>
                <span class="text-center bulk"> Bulk Billing</span>
              </a>
            </li>
          </ul>


        </div>
      </div>
    </nav>
  </header>