<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIH | INDEX</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap">
    <link rel="stylesheet" href="css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f7fa;
            color: #333;
        }
        .header {
            background: linear-gradient(90deg, rgba(33, 150, 243, 0.7), rgba(3, 169, 244, 0.7));
            color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .participant-card {
            transition: transform 0.3s ease;
            border: none;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .participant-card:hover {
            transform: scale(1.05);
        }
        .participant-photo {
            width: 100px;
            height: 100px;
            object-fit: cover;
            border-radius: 50%;
            border: 3px solid #ddd;
            padding: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .participant-name {
            font-weight: bold;
            margin-top: 10px;
        }
        .btn-primary {
            background-color: #2196f3;
            border-color: #2196f3;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #1e88e5;
            transform: scale(1.05);
        }
        .logo {
            width: 50px;
            height: 50px;
            margin-right: 10px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="container mt-5 d-flex align-items-center header">
        <img class="logo" src="profile_images/gla_logo.png" alt="GLA Logo">
        <h1>GLA Alumni Portal</h1>
    </div>
    
    <div class="container mb-5 py-4 px-4 mainView">
        <div class="row mb-5">
            <!-- Team Information -->
            <div class="col-12 mb-4">
                <h2>Smart India Solution</h2>
                <p><strong>Team ID:</strong> T-44</p>
            </div>
        </div>

        <!-- Participant Photos and Names -->
        <div class="row text-center">
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/harsh.png" alt="Harsh's Photo">
                    <p class="participant-name">Harsh</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/parmar.jpg" alt="Harshit's Photo">
                    <p class="participant-name">Harshit</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/agraj.jpg" alt="Agraj's Photo">
                    <p class="participant-name">Agraj</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/shubhankit.png" alt="Shubhankit's Photo">
                    <p class="participant-name">Shubhankit</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/vedanshu.jpg" alt="Vedanshu's Photo">
                    <p class="participant-name">Vedanshu</p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="participant-card">
                    <img class="participant-photo" src="profile_images/khushii.jpg" alt="Khushi's Photo">
                    <p class="participant-name">Khushi</p>
                </div>
            </div>
        </div>

        <hr/>
        
        <div class="row justify-content-center mt-5">
            <div class="col-auto">
                <a role="button" href="main.php" class="btn btn-primary py-2">Main Page</a>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
