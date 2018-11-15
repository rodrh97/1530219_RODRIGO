<!DOCTYPE html>
<!--
Item Name: Elisyam - Web App & Admin Dashboard Template
Version: 1.5
Author: SAEROX

** A license must be purchased in order to legally use this template for your project **
-->
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Elisyam - Clean Dashboard</title>
        <meta name="description" content="Elisyam is a Web App and Admin Dashboard Template built with Bootstrap 4">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Google Fonts -->
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
          WebFont.load({
            google: {"families":["Montserrat:400,500,600,700","Noto+Sans:400,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
        <!-- Stylesheet -->
        <link rel="stylesheet" href="assets/vendors/css/base/bootstrap.min.css">
        <link rel="stylesheet" href="assets/vendors/css/base/elisyam-1.5.min.css">
        <link rel="stylesheet" href="assets/css/animate/animate.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl-carousel/owl.theme.min.css">
        <link rel="stylesheet" href="assets/css/leaflet/leaflet.min.css">
        <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    </head>
    <body id="page-top">
        <!-- Begin Preloader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <!-- End Preloader -->
                                <div class="row flex-row">
                            <div class="col-xl-4">
                                <!-- Begin Widget 36 -->
                                
                                <!-- End Widget 36 -->
                            </div>
                            
                            <div class="col-xl-4 col-md-6">
                                <!-- Begin Widget 34 -->
                                <div class="widget widget-34 has-shadow">
                                    <!-- Begin Widget Header -->
                                    <h1>GRAFICA 1</h1>  
                                    <div class="widget-header d-flex align-items-center">
                                     
                                    <h2>Overall Ratings</h2>
                                        <div class="widget-options">
                                            <div class="dropdown">
                                                <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                    <i class="la la-circle-o-notch"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a href="#" class="dropdown-item"> 
                                                        <i class="la la-edit"></i>Edit Widget
                                                    </a>
                                                    <a href="#" class="dropdown-item faq"> 
                                                        <i class="la la-question-circle"></i>FAQ
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Header -->
                                    <!-- Begin Widget Body -->
                                    <div class="widget-body hidden">
                                    	<div class="row">
                                    		<div class="col-12 d-flex align-items-center">
		                                        <div class="r-title">
		                                            4.0
		                                        </div>
		                                        <div class="star-rating">
			                                        <ul>
			                                        	<li><i class="la la-star rate"></i></li>
			                                        	<li><i class="la la-star rate"></i></li>
			                                        	<li><i class="la la-star rate"></i></li>
			                                        	<li><i class="la la-star rate"></i></li>
			                                        	<li><i class="la la-star"></i></li>
			                                        </ul>
			                                    </div>
		                                    </div>
		                                </div>
                                        <div class="chart">
                                            <div class="row justify-content-center">
                                                <div class="col-12">
                                                    <!-- Begin Chart -->
                                                    <div class="chart-graph">
                                                        <div class="chart">
                                                            <canvas id="reviews-stats"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Widget Body -->
                                </div>
                                <!-- End Widget 34 -->
                                <a href="home"><button class="btn btn-success">Volver al inicio</button></a>
                            </div>
                        </div>
                        <!-- End Row -->

                        
                    </div>
                    <!-- End Container -->
                    
                    <a href="#" class="go-top"><i class="la la-arrow-up"></i></a>
                    <!-- Offcanvas Sidebar -->
                    <div class="off-sidebar from-right">
                        <div class="off-sidebar-container">
                            <header class="off-sidebar-header">
                                <ul class="button-nav nav nav-tabs mt-3 mb-3 ml-3" role="tablist" id="weather-tab">
                                    <li><a class="active" data-toggle="tab" href="#messenger" role="tab" id="messenger-tab">Messages</a></li>
                                    <li><a data-toggle="tab" href="#today" role="tab" id="today-tab">Today</a></li>
                                </ul>
                                <a href="#off-canvas" class="off-sidebar-close"></a>
                            </header>
                            <div class="off-sidebar-content offcanvas-scroll auto-scroll">
                                <div class="tab-content">
                                    <!-- Begin Messenger -->
                                    <div role="tabpanel" class="tab-pane show active fade" id="messenger" aria-labelledby="messenger-tab">
                                        <!-- Begin Chat Message -->
                                        <span class="date">Today</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        Hi David, what's up?
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">2 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Hi Brandon, fine and you?
                                                   </p>
                                                    <p>
                                                       I'm working on the next update of Elisyam
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">3 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-02.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        <span class="mb-2">Brandon wrote</span>
                                                        I can't wait to see
                                                    </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localization font-size-small">5 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       I'm almost done
                                                   </p>
                                                </div>
                                                <div class="messenger-details">
                                                    <span class="messenger-message-localisation font-size-small">10 minutes ago</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="date">Yesterday</span>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        I updated the server tonight
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Didn't you have any problems?
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-sender">
                                            <img class="messenger-image messenger-image-default" src="assets/img/avatar/avatar-05.jpg" alt="...">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                        No!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="messenger-message messenger-message-recipient">
                                            <div class="messenger-message-wrapper">
                                                <div class="messenger-message-content">
                                                    <p>
                                                       Great!
                                                   </p>
                                                    <p>
                                                       See you later!
                                                   </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Chat Message -->
                                        <!-- Begin Message Form -->
                                        <div class="enter-message">
                                            <div class="enter-message-form">
                                                <input type="text" placeholder="Enter your message..."/>
                                            </div>
                                            <div class="enter-message-button">
                                                <a href="#" class="send"><i class="ion-paper-airplane"></i></a>
                                            </div>
                                        </div>
                                        <!-- End Message Form -->
                                    </div>
                                    <!-- End Messenger -->
                                    <!-- Begin Today -->
                                    <div role="tabpanel" class="tab-pane fade" id="today" aria-labelledby="today-tab">
                                        <!-- Begin Today Stats -->
                                        <div class="sidebar-heading pt-0">Today</div>
                                        <div class="today-stats mt-3 mb-3">
                                            <div class="row">
                                                <div class="col-4 text-center">
                                                    <i class="la la-users"></i>
                                                    <div class="counter">264</div>
                                                    <div class="heading">Clients</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-cart-arrow-down"></i>
                                                    <div class="counter">360</div>
                                                    <div class="heading">Sales</div>
                                                </div>
                                                <div class="col-4 text-center">
                                                    <i class="la la-money"></i>
                                                    <div class="counter">$ 4,565</div>
                                                    <div class="heading">Earnings</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Today Stats -->
                                        <!-- Begin Friends -->
                                        <div class="sidebar-heading">Friends</div>
                                        <div class="quick-friends mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-02.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Brandon Smith</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-03.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Louis Henry</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-04.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Nathan Hunter</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-05.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Megan Duncan</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-left align-self-center mr-3">
                                                            <img src="assets/img/avatar/avatar-06.jpg" alt="..." class="img-fluid rounded-circle" style="width: 35px;">
                                                        </div>
                                                        <div class="media-body align-self-center">
                                                            <a href="javascript:void(0);">Beverly Oliver</a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Friends -->
                                        <!-- Begin Settings -->
                                        <div class="sidebar-heading">Settings</div>
                                        <div class="quick-settings mt-3 mb-3">
                                            <ul class="list-group w-100">
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Email</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Notifications Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox">
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="list-group-item">
                                                    <div class="media">
                                                        <div class="media-body align-self-center">
                                                            <p class="text-dark">Chat Message Sound</p>
                                                        </div>
                                                        <div class="media-right align-self-center">
                                                            <label>
                                                                <input class="toggle-checkbox" type="checkbox" checked>
                                                                <span>
                                                                    <span></span>
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- End Settings -->
                                    </div>
                                    <!-- End Today -->
                                </div>
                            </div>
                            <!-- End Offcanvas Container -->
                        </div>
                        <!-- End Offsidebar Container -->
                    </div>
                    <!-- End Offcanvas Sidebar -->
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page Content -->
        </div>
        <!-- Begin Vendor Js -->
        <script src="assets/vendors/js/base/jquery.min.js"></script>
        <script src="assets/vendors/js/base/core.min.js"></script>
        <!-- End Vendor Js -->
        <!-- Begin Page Vendor Js -->
        <script src="assets/vendors/js/nicescroll/nicescroll.min.js"></script>
        <script src="assets/vendors/js/noty/noty.min.js"></script>
        <script src="assets/vendors/js/chart/chart.min.js"></script>
        <script src="assets/vendors/js/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/vendors/js/calendar/moment.min.js"></script>
        <script src="assets/vendors/js/calendar/fullcalendar.min.js"></script>
        <script src="assets/vendors/js/leaflet/leaflet.min.js"></script>
        <script src="assets/vendors/js/app/app.min.js"></script>
        <!-- End Page Vendor Js -->
        <!-- Begin Page Snippets -->
        <script src="assets/js/dashboard/db-clean.min.js"></script>
        <!-- End Page Snippets -->
    </body>
</html>