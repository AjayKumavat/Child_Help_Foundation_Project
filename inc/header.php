<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Required meta tag from bootstrap starter template -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <link href="assests/src/css/bootstrap.min.css" rel="stylesheet">
    <link href="assests/src/css/normalize.css" rel="stylesheet">

    <!-- JS file link -->
    <script src="assests/src/js/bootstrap.min.js"></script>
    <script src="assests/src/js/popper.min.js"></script>
    <script src="assests/src/js/bootstrap.bundle.min.js"></script>

    <!-- Bootstrap icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <!-- client slider cdn required these cdn -->
    <link href="assests/src/owl-carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assests/src/owl-carousel/owl.theme.default.min.css" rel="stylesheet">
    <script src="assests/src/owl-carousel/owl.carousel.min.js"></script>

    <!-- Counter up (code-pn-cd) -->
    <script src="assests/src/counter/jquery.counterup.min.js"></script>
    <script src="assests/src/counter/waypoints.min.js"></script>

    <!-- Font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Link of Style.css folder -->
    <link rel="stylesheet" type="text/css" href="assests/src/css/custom.css">

    <!-- Link of responsive.css folder -->
    <link rel="stylesheet" type="text/css" href="assests/src/css/responsive.css">

    <title> Child Help Foundation Project </title>

    <script>
        // client slider js code
        (function($) {
            function initOwlCarousel() {
                $('.owl-carousel').owlCarousel({
                    loop: true,
                    nav: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    animateOut: 'fadeOut',
                    animateIn: 'fadeIn',
                    smartSpeed: 2500,
                    dots: false,
                    arrows: false,
                    pauseOnHover: false,
                    margin: 0,
                    responsive: {
                        0: {
                            items: 5
                        },
                        280: {
                            items: 2
                        },
                        360: {
                            items: 3
                        },
                        375: {
                            items: 4
                        },
                        390: {
                            items: 3
                        },
                        412: {
                            items: 3
                        },
                        414: {
                            items: 3
                        },
                        540: {
                            items: 4
                        },
                        1000: {
                            items: 5
                        }
                    }
                });
            }

            $(document).ready(function() {
                initOwlCarousel();
            });
        })(jQuery);

        // Counter JS code

        jQuery(document).ready(function($) {
            $('.count-go').counterUp({
                delay: 10,
                time: 3000
            });
        });
    </script>

</head>

<body>


    <nav class="head_navo navbar navbar-expand-lg px-5" style="background-color: #17105c;">
        <div class="navbar-brand">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item px-2">
                    <a class="iconn" href="#"><i class="fa fa-facebook" aria-hidden="true" style="color: #fff;"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="iconn" href="#"><i class="fa fa-twitter" aria-hidden="true" style="color: #fff;"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="iconn" href="#"><i class="fa fa-linkedin" aria-hidden="true" style="color: #fff;"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="iconn" href="#"><i class="fa fa-whatsapp" aria-hidden="true" style="color: #fff;"></i></a>
                </li>
                <li class="nav-item px-2">
                    <a class="iconn" href="#"><i class="fa fa-instagram" aria-hidden="true" style="color: #fff;"></i></a>
                </li>
            </ul>

        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse1" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse1 navbar-collapse" id="navbarToggleExternalContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end my-1">
                <li class="nav-item px-2">
                    <a href="#" class="iconn" style="color: #fff;"><i class="fa fa-envelope-o right-icon mr-2" aria-hidden="true" style="color: #fff;"></i>info@example.com</a>
                    
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="iconn" style="color: #fff;"><i class="fa fa-clock-o right-icon mr-2" aria-hidden="true" style="color: #fff;"></i>+234 567 234 875</a>
                    
                </li>
                <li class="nav-item px-2">
                    <a href="#" class="iconn" style="color: #fff;"><i class="fa fa-phone right-icon mr-2" aria-hidden="true" style="color: #fff;"></i>Mon-Fri: 8:00 - 16:00</a>
                    
                </li>
                <li class="nav-item px-2 mt-1">
                    <a class="iconn" href="#"><input class="btn btn-primary more-link1" type="reset" value="DONATE" style="height: 3rem;"></a>
                </li>
                <li class="nav-item px-2 mt-1">
                    <a class="iconn" href="#"><input class="btn btn-primary more-link1" type="submit" value="SIGN IN/LOGIN" style="height: 3rem;"></a>
                </li>
            </ul>
            
        </div>
    </nav>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light navbarrr py-3 px-5">
        <div class="container-fluid nav-fluid">
            <a class="navbar-brand pok-logo" href="#">
                <img src="https://in.childhelpfoundation.in/assets/img/chf-india1.png" alt="logo" height="82rem" width="140rem">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navvv" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end navv">
                    <li class="nav-item mr-3">
                        <a class="nav-link nav-text nav-content nav-hover1" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link nav-text dropdown-toggle nav-hover1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <div class="dropdown-menu drop-list1" aria-labelledby="navbarDropdown" style="text-transform: uppercase; font-size: 15px;">
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Who are we</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Our Founders</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Management</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Where we work</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Awards</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Our Locations</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Financials/Legal</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Bank Details</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Contact Us</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link nav-text dropdown-toggle nav-hover1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Programmes
                        </a>
                        <div class="dropdown-menu drop-list1" aria-labelledby="navbarDropdown" style="text-transform: uppercase; font-size: 15px;">
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Emergency Medical Support</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Education</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Clean water and sanitation</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Gender Equality</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Zero Hunger</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Life on Land</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Life below water</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Humanitarian Relief</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Success Stories</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link nav-text dropdown-toggle nav-hover1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Get Involved
                        </a>
                        <div class="dropdown-menu drop-list1" aria-labelledby="navbarDropdown" style="text-transform: uppercase; font-size: 15px;">
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Donation</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Volunteerism</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Career</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Implementation Partners</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Corporate</a>
                        </div>
                    </li>

                    <li class="nav-item mr-3">
                        <a class="nav-link nav-text nav-hover1" href="gallery_webpage.php">Bank Details</a>
                    </li>

                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link nav-text dropdown-toggle nav-hover1" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Media
                        </a>
                        <div class="dropdown-menu drop-list1" aria-labelledby="navbarDropdown" style="text-transform: uppercase; font-size: 15px;">
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Blog</a>
                            <a class="dropdown-item nav-text nav-hover1 drop-hover1" href="#">Blog/Media</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>