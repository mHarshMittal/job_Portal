<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal Main</title>

    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        .mainBanner {
            padding-right: calc(var(--bs-gutter-x) * 0);
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            height: 400px; /* Fixed height for the carousel */
        }

        .carousel-inner {
            height: 100%;
        }

        .carousel-item img {
            width: 100%;
            height: 100%; /* Ensure the image covers the area */
            object-fit: cover; /* Maintain aspect ratio and cover the container */
            border-radius: 20px;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.5);
            border-radius: 10px;
            bottom: 20px;
            text-align: center;
        }

        .alert-main {
            bottom: 50px;
        }

        .mainView {
            background: #ffffff;
            border-radius: 20px;
            box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);
            padding: 40px;
            position: relative;
            overflow: hidden;
        }

        .slide-left {
            animation: slideLeft 1s ease-out;
        }

        @keyframes slideLeft {
            from { transform: translateX(-100%); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }

        .btn-primary {
            background-color: #2196f3;
            border-color: #2196f3;
            border-radius: 25px;
            padding: 12px 24px;
            font-size: 1rem;
            transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
            position: relative;
        }

        .btn-primary:hover {
            background-color: #1976d2;
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
        }

        .btn-outline-primary {
            border-radius: 25px;
            padding: 12px 24px;
            font-size: 1rem;
            border: 2px solid #2196f3;
            color: #2196f3;
            transition: border-color 0.3s ease, color 0.3s ease, transform 0.3s ease;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-outline-primary:hover {
            border-color: #1976d2;
            color: #1976d2;
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        h1 {
            font-size: 2.5rem;
            color: #333;
            text-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        p {
            font-size: 1.1rem;
            color: #555;
        }
    </style>
</head>
<body>
    <?php
        include 'init_db.php';

        session_start();
        $tempFlash = '';
        if (isset($_SESSION['flash_mode']) && $_SESSION['flash_mode'] == "alert-success") {
            $tempFlash = $_SESSION['flash_mode'];
            unset($_SESSION['flash_mode']);
        }
    ?>

    <!-- Flash message -->
    <div class="container-fluid">
        <?php if (isset($_SESSION['flash_mode']) || $tempFlash) { ?>
            <div class="row justify-content-center position-relative">
                <div class="col">
                    <div class="alert <?php echo (isset($_SESSION['flash_mode']) ? $_SESSION['flash_mode'] : $tempFlash); ?> fade-in fade-out-alert alert-main" role="alert">
                        <i class="bi <?php echo (isset($tempFlash) && $tempFlash == "alert-success" ? "bi-check-circle" : (isset($_SESSION['flash_mode']) && $_SESSION['flash_mode'] == "alert-primary" ? "bi-info-circle" : "")); ?> me-2"></i>
                        <div><?php echo isset($_SESSION['flash']) ? $_SESSION['flash'] : ''; ?></div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="container mt-5 mainView">
            <div class="row align-items-center">
                <div class="col ms-4 slide-left">
                    <!-- Heading and text -->
                    <h1 class="text-center mb-4">Alumni Portal</h1>
                    <p class="text-center mb-4">Stay connected with your alma mater and friends. Build networks and propel your career to the next stage.</p>
                    
                    <div class="row justify-content-center mt-4">
                        <!-- Login button -->
                        <div class="col-auto mb-2 mb-md-0">
                            <a role="button" href="login.php" class="btn btn-primary fw-medium px-4 py-2">Login</a>
                        </div>
                        <!-- Register button -->
                        <div class="col-auto">
                            <a role="button" href="registration.php" class="btn btn-outline-primary fw-medium px-4 py-2">Register</a>
                        </div>
                    </div>
                </div>

                <!-- Main banner carousel -->
                <div class="col-8 mainBanner">
                    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/5.jpg" class="d-block w-100" alt="Image 1">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 1</h5>
                                    <p>Description for image 1.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="images/13.jpg" class="d-block w-100" alt="Image 2">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 2</h5>
                                    <p>Description for image 2.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="images/3.jpg" class="d-block w-100" alt="Image 3">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 3</h5>
                                    <p>Description for image 3.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="images/4.jpg" class="d-block w-100" alt="Image 4">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 4</h5>
                                    <p>Description for image 4.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="images/5.jpg" class="d-block w-100" alt="Image 5">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 5</h5>
                                    <p>Description for image 5.</p>
                                </div> -->
                            </div>
                            <div class="carousel-item">
                                <img src="images/6.jpg" class="d-block w-100" alt="Image 6">
<!--                                 <div class="carousel-caption d-none d-md-block">
                                    <h5>Image 6</h5>
                                    <p>Description for image 6.</p>
                                </div> -->
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myCarousel = document.querySelector('#carouselExampleCaptions');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 2000 // Set carousel interval to 2 seconds
            });
        });
    </script>
</body>
</html>
