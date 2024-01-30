<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Start Your Own Forex Brokerage | Forex Broker Services</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./vendor/font-awesome/css/all.min.css" />
    <link rel="stylesheet" href="./vendor/owl-carousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./css/style.css" />
    <style>
        * {
            cursor: none !important;
        }

        .cursor {
            width: 40px;
            height: 40px;
            border-radius: 100%;
            background-color: #f8c117;
            opacity: .7;
            transition: all 200ms ease-out;
            position: fixed;
            pointer-events: none;
            left: 0;
            top: 0;
            transform: translate(calc(-50% + 15px), -50%);
            z-index: 9999;
        }

        .cursor2 {
            width: 10px;
            height: 10px;
            border-radius: 100%;
            background: #010101;
            /* opacity: 0.5; */
            position: fixed;
            transform: translate(-50%, -50%);
            pointer-events: none;
            transition: width 0.3s, height 0.3s, opacity 0.3s;
            z-index: 9999;
        }

        .cursorinnerhover {
            width: 40px;
            height: 40px;
            opacity: 0.5;
        }

        .cursor.hover {
            width: 70px;
            height: 70px;
            background-color: #ffc107;
            opacity: .3;
        }

        .cursor.hover::before {
            position: absolute;
            content: "";
            color: #000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .offcanvas {
            --bs-offcanvas-width: 320px;
        }

        .mega-dropdown {
            position: static !important;
        }

        .mega-dropdown-menu {
            padding: 20px 0px;
            width: 100%;
            left: 0;
            top: 78%;
        }

        .mega-dropdown-menu ul.list-unstyled {
            padding: 0;
            margin: 0;
        }

        .mega-dropdown-menu ul.list-unstyled li a {
            display: inline-block;
            color: #222;
            padding: 3px 5px;
        }

        .mega-dropdown-menu ul.list-unstyled li a:hover,
        .mega-dropdown-menu ul.list-unstyled li a:focus {
            text-decoration: none;
            color: #ffc107;
        }

        .mega-dropdown-menu .dropdown-header {
            font-size: 18px;
            color: #ffc107;
            padding: 5px 60px 5px 5px;
            line-height: 30px;
            font-weight: 600;
        }

        @media (max-width: 991px) {
            * {
                cursor: auto !important;
            }
        }
    </style>
</head>

<body>

    <div class="cursor d-lg-block d-none"></div>
    <div class="cursor2 d-lg-block d-none"></div>

    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary px-xxl-5">
            <div class="container-fluid">
                <a class="navbar-brand" href="./">
                    <img src="images/logo.svg" alt="Logo" class="img-fluid" />
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas border-end-0 offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <a class="navbar-brand" href="./">
                            <img src="images/logo.svg" alt="Logo" class="img-fluid" />
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="navbar-collapse">
                            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">About</a>
                                    <div class="dropdown-menu mega-dropdown-menu border-0 shadow">
                                        <div class="container">
                                            <div class="row gx-5">
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li class="dropdown-header">Fonts</li>
                                                        <li><a href="#">Glyphicon</a></li>
                                                        <li><a href="#">Google Fonts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>
                                                        <li><a href="#">Primary Buttons & Default</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                        Liquidity
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu border-0 shadow">
                                        <div class="container">
                                            <div class="row gx-5">
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li class="dropdown-header">Fonts</li>
                                                        <li><a href="#">Glyphicon</a></li>
                                                        <li><a href="#">Google Fonts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>
                                                        <li><a href="#">Primary Buttons & Default</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                        Broker Setup
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu border-0 shadow">
                                        <div class="container">
                                            <div class="row gx-5">
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li class="dropdown-header">Fonts</li>
                                                        <li><a href="#">Glyphicon</a></li>
                                                        <li><a href="#">Google Fonts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>
                                                        <li><a href="#">Primary Buttons & Default</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown mega-dropdown">
                                    <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown">
                                        Advisory
                                    </a>
                                    <div class="dropdown-menu mega-dropdown-menu border-0 shadow">
                                        <div class="container">
                                            <div class="row gx-5">
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Features</li>
                                                        <li><a href="#">Auto Carousel</a></li>
                                                        <li><a href="#">Carousel Control</a></li>
                                                        <li><a href="#">Left & Right Navigation</a></li>
                                                        <li><a href="#">Four Columns Grid</a></li>
                                                        <li>
                                                            <hr class="dropdown-divider" />
                                                        </li>
                                                        <li class="dropdown-header">Fonts</li>
                                                        <li><a href="#">Glyphicon</a></li>
                                                        <li><a href="#">Google Fonts</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Plus</li>
                                                        <li><a href="#">Navbar Inverse</a></li>
                                                        <li><a href="#">Pull Right Elements</a></li>
                                                        <li><a href="#">Coloured Headers</a></li>
                                                        <li><a href="#">Primary Buttons & Default</a></li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <ul class="list-unstyled">
                                                        <li class="dropdown-header">Much more</li>
                                                        <li><a href="#">Easy to Customize</a></li>
                                                        <li><a href="#">Calls to action</a></li>
                                                        <li><a href="#">Custom Fonts</a></li>
                                                        <li><a href="#">Slide down on Hover</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Wealth</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Institutional Clients</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Metatrader Support</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Request Quote</button>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>