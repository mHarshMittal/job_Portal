<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | Main Menu</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            color: #333;
        }


        h5 {
            font-weight: 500;
            font-size: 1.25rem;
        }

        p {
            font-size: 1rem;
            line-height: 1.6;
        }

        .navbar {
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .navbar-nav .nav-link {
            font-size: 1.1rem;
            padding: 10px 20px;
        }

        .nav-bi {
            margin-right: 8px;
            font-size: 1.5rem;
        }

        .card {
            width: 23rem;
            border: none;
            box-shadow: 0 4px 4px rgba(0, 0, 0, .2);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            transition: transform 0.3s ease;
            object-fit: cover;
        }

        .card:hover .card-img-top {
            transform: scale(1.05);
        }

        .card-title {
            margin-bottom: 15px;
        }

        .card-text {
            margin-bottom: 20px;
        }

        .card-btn {
            background: linear-gradient(90deg, #1c92d2, #f2fcfe);
            color: #fff;
            transition: background 0.3s ease;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

        .card-btn:hover {
            background: linear-gradient(90deg, #1f77d0, #e0f7fc);
        }

        .container {
            max-width: 1200px;
            padding: 20px 15px;
        }

        @media (max-width: 768px) {
            .card {
                width: 100%;
                margin-bottom: 20px;
            }

            .navbar-nav .nav-link {
                padding: 8px 15px;
            }

            .card-btn {
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include 'logged_user.php';
    ?>

    <!-- Top nav bar -->
    <nav class="navbar sticky-top navbar-expand-lg mb-5">
        <div class="container">
            <a class="navbar-brand mx-0 mb-0 h1" href="main_menu.php">Alumni Portal</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item mx-1">
                        <a class="nav-link nav-main-active px-5" aria-current="page" href="main_menu.php"><i class="bi bi-house-door-fill nav-bi"></i> Home</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-5" href="view_alumni.php"><i class="bi bi-people nav-bi"></i> Alumni</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-5" href="view_events.php"><i class="bi bi-calendar-event nav-bi"></i> Events</a>
                    </li>
                    <li class="nav-item mx-1">
                        <a class="nav-link px-5" href="view_advertisements.php"><i class="bi bi-megaphone nav-bi"></i> Ads</a>
                    </li>
                </ul>
            </div>
            <?php include 'nav_user.php' ?>
        </div>
    </nav>

    <div class="container slide-left">
        <div class="row justify-content-center">

            <!-- Alumni Friends -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/social_image.jpg" class="card-img-top" alt="Expand your network with Alumni Friends">
                    <div class="card-body">
                        <h5 class="card-title">Alumni Friends</h5>
                        <p class="card-text">Expand your network. Reconnect with your alma mater</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn fw-medium py-2" href="view_alumni.php">View Alumni</a> </div>
                </div>
            </div>

            <!-- Events/News -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/social_event.jpg" class="card-img-top" alt="Keep an eye out below for our evolving list of events">
                    <div class="card-body">
                        <h5 class="card-title">Events/News</h5>
                        <p class="card-text">Keep an eye out below for our evolving list of events</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn fw-medium py-2" href="view_events.php">View News/Events</a> </div>
                </div>
            </div>

            <!-- Advertisements -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/advertisement_photo.jpeg" class="card-img-top" alt="Access exclusive job listings, workshops, seminars to nurture your professional growth">
                    <div class="card-body">
                        <h5 class="card-title">Advertisements</h5>
                        <p class="card-text">Access exclusive job listings, workshops, seminars to nurture your professional growth</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn fw-medium py-2" href="view_advertisements.php">View Advertisements</a> </div>
                </div>
            </div>

            <!-- Update Profile -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center">
                    <img src="images/profile_picture.jpg" class="card-img-top" alt="Highlight your latest professional achievements and relevant skills">
                    <div class="card-body">
                        <h5 class="card-title">Update Profile</h5>
                        <p class="card-text">Highlight your latest professional achievements and relevant skills</p>
                    </div>
                    <div class="d-grid gap-2"> <a role="button" class="btn card-btn fw-medium py-2" href="<?php echo 'update_profile.php?email='.htmlspecialchars($_SESSION['logged_account']['email'])?>">View Profile</a> </div>
                </div>
            </div>

            <!-- Placeholder cards -->
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center"></div>
            </div>
            <div class="col-auto mb-5 mx-auto">
                <div class="card text-center"></div>
            </div>

        </div>
    </div>

   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBC6qCuVRrCBq2BYwtf7W8WW" crossorigin="anonymous"></script>
</body>

</html>
