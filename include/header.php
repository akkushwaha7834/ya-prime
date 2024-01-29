<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YaPrime</title>
    <link rel="stylesheet" href="./vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./vendor/font-awesome/css/all.min.css" />
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
            opacity: 0.5;
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
            background-color: #f8c117;
            opacity: .7;
        }

        .cursor.hover::before {
            position: absolute;
            content: "";
            color: #000;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>

<body>

    <div class="cursor d-lg-block d-none"></div>
    <div class="cursor2 d-lg-block d-none"></div>

    <header class="header">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Services
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>