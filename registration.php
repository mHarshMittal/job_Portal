<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 2 | Register</title>

    <link rel="stylesheet" href="css/styles.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <?php
    session_start();

    unset($_SESSION['login_errors']);
    // Navigate to main_menu if user is logged in
    if (isset($_SESSION['logged_account']) && $_SESSION['logged_account']['type'] == 'user')
        header('Location: main_menu.php');
    elseif (isset($_SESSION['logged_account']) && $_SESSION['logged_account']['type'] == 'admin')
        header('Location: main_menu_admin.php');

    // Assign session data or initialize new array
    $formData = isset($_SESSION['form_data']) ? $_SESSION['form_data'] : array();
    $errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array();
    $verified = isset($_SESSION['verified']) ? $_SESSION['verified'] : array();

    // Clear session data
    unset($_SESSION['form_data']);
    unset($_SESSION['errors']);
    unset($_SESSION['verified']);
    ?>

    <div class="container mt-5 bg-white mainView">
        <div class="row align-items-center">
            <!-- Registration banner -->
            <div class="col ms-3 mt-5 ms-5">
                <img class="img-fluid" src="images/signup-image.jpg" alt="Signup image" width="450" />
            </div>

            <div class="col my-5 me-5 <?php echo (isset($errors) && empty($errors)) ? 'slide-left' : NULL ?>">
                <h1>Register</h1>

                <form id="registrationForm"
                    class="form-floating needs-validation <?php echo (isset($errors) && !empty($errors)) ? 'animate__animated animate__headShake animate__fast' : NULL ?>"
                    action="<?php echo htmlspecialchars('process_register.php'); ?>" method="POST">
                    <!-- First name, Last name -->
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control <?php echo (isset($errors['firstName'])) ? 'is-invalid' : ((isset($verified['firstName'])) ? 'is-valid' : ''); ?>"
                                    id="firstName" name="firstName" placeholder="John"
                                    value="<?php echo isset($formData["firstName"]) ? htmlspecialchars($formData["firstName"]) : ""; ?>">
                                <label for="firstName">First Name<strong class="text-danger">*</strong></label>
                                <?php echo (isset($errors['firstName'])) ? '<div class="invalid-feedback">' . $errors['firstName'] . '</div>' : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control <?php echo (isset($errors['lastName'])) ? 'is-invalid' : ((isset($verified['lastName'])) ? 'is-valid' : ''); ?>"
                                    id="lastName" name="lastName" placeholder="Doe"
                                    value="<?php echo isset($formData['lastName']) ? htmlspecialchars($formData['lastName']) : ''; ?>">
                                <label for="lastName">Last Name<strong class="text-danger">*</strong></label>
                                <?php echo (isset($errors['lastName'])) ? '<div class="invalid-feedback">' . $errors['lastName'] . '</div>' : ''; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Date of Birth, Gender -->
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="date"
                                    class="form-control <?php echo (isset($errors['dob'])) ? 'is-invalid' : ((isset($verified['dob'])) ? 'is-valid' : ''); ?>"
                                    id="dob" name="dob"
                                    value="<?php echo isset($formData['dob']) ? htmlspecialchars($formData['dob']) : ''; ?>">
                                <label for="dob">Date of Birth<strong class="text-danger">*</strong></label>
                                <?php echo (isset($errors['dob'])) ? '<div class="invalid-feedback">' . $errors['dob'] . '</div>' : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <p class="mb-1">Gender<strong class="text-danger">*</strong></p>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input <?php echo (isset($errors['gender'])) ? 'is-invalid' : ((isset($verified['gender'])) ? 'is-valid' : ''); ?>"
                                    type="radio" name="gender" id="genderFemale" value="Female"
                                    <?php echo isset($formData['gender']) ? (($formData['gender'] == 'Female') ? 'checked' : '') : ''; ?>>
                                <label class="form-check-label" for="genderFemale">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input <?php echo (isset($errors['gender'])) ? 'is-invalid' : ((isset($verified['gender'])) ? 'is-valid' : ''); ?>"
                                    type="radio" name="gender" id="genderMale" value="Male"
                                    <?php echo isset($formData['gender']) ? (($formData['gender'] == 'Male') ? 'checked' : '') : ''; ?>>
                                <label class="form-check-label" for="genderMale">Male</label>
                            </div>
                            <?php echo (isset($errors['gender'])) ? '<div class="invalid-feedback">' . $errors['gender'] . '</div>' : ''; ?>
                        </div>
                    </div>

                    <!-- Status: Alumni or Student -->
                    <div class="row">
                        <div class="col">
                            <p class="mb-1">Status<strong class="text-danger">*</strong></p>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input <?php echo (isset($errors['status'])) ? 'is-invalid' : ((isset($verified['status'])) ? 'is-valid' : ''); ?>"
                                    type="radio" name="status" id="statusAlumni" value="Alumni"
                                    <?php echo isset($formData['status']) ? (($formData['status'] == 'Alumni') ? 'checked' : '') : ''; ?>>
                                <label class="form-check-label" for="statusAlumni">Alumni</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input
                                    class="form-check-input <?php echo (isset($errors['status'])) ? 'is-invalid' : ((isset($verified['status'])) ? 'is-valid' : ''); ?>"
                                    type="radio" name="status" id="statusStudent" value="Student"
                                    <?php echo isset($formData['status']) ? (($formData['status'] == 'Student') ? 'checked' : '') : ''; ?>>
                                <label class="form-check-label" for="statusStudent">Student</label>
                            </div>
                            <?php echo (isset($errors['status'])) ? '<div class="invalid-feedback">' . $errors['status'] . '</div>' : ''; ?>
                        </div>
                    </div>

                    <!-- Email, Hometown -->
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control <?php echo (isset($errors['email'])) ? 'is-invalid' : ((isset($verified['email'])) ? 'is-valid' : ''); ?>"
                                    id="email" name="email" placeholder="johndoe@email.com"
                                    value="<?php echo isset($formData['email']) ? htmlspecialchars($formData['email']) : ''; ?>">
                                <label for="email">Email<strong class="text-danger">*</strong></label>
                                <?php echo (isset($errors['email'])) ? '<div class="invalid-feedback">' . $errors['email'] . '</div>' : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text"
                                    class="form-control <?php echo (isset($errors['hometown'])) ? 'is-invalid' : ((isset($verified['hometown'])) ? 'is-valid' : ''); ?>"
                                    id="hometown" name="hometown" placeholder="Hometown"
                                    value="<?php echo isset($formData['hometown']) ? htmlspecialchars($formData['hometown']) : ''; ?>">
                                <label for="hometown">Hometown<strong class="text-danger">*</strong></label>
                                <?php echo (isset($errors['hometown'])) ? '<div class="invalid-feedback">' . $errors['hometown'] . '</div>' : ''; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Password, Confirm Password -->
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3 position-relative">
                                <input type="password"
                                    class="form-control <?php echo (isset($errors['password'])) ? 'is-invalid' : ((isset($verified['password'])) ? 'is-valid' : ''); ?>"
                                    id="password" name="password" placeholder="Password" autocomplete="new-password">
                                <label for="password">Password<strong class="text-danger">*</strong></label>
                                <i class="bi bi-eye-slash-fill position-absolute end-0 top-50 translate-middle-y me-3"
                                    id="togglePassword" style="cursor: pointer;"></i>
                                <?php echo (isset($errors['password'])) ? '<div class="invalid-feedback">' . $errors['password'] . '</div>' : ''; ?>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating mb-3 position-relative">
                                <input type="password"
                                    class="form-control <?php echo (isset($errors['confirm_password'])) ? 'is-invalid' : ((isset($verified['confirm_password'])) ? 'is-valid' : ''); ?>"
                                    id="confirm_password" name="confirm_password" placeholder="Confirm Password" autocomplete="new-password">
                                <label for="confirm_password">Confirm Password<strong class="text-danger">*</strong></label>
                                <i class="bi bi-eye-slash-fill position-absolute end-0 top-50 translate-middle-y me-3"
                                    id="toggleConfirmPassword" style="cursor: pointer;"></i>
                                <?php echo (isset($errors['confirm_password'])) ? '<div class="invalid-feedback">' . $errors['confirm_password'] . '</div>' : ''; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Submit button -->
                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary py-2 w-100" type="submit">Submit</button>
                    </div>
                </form>

                <!-- Switch to login page -->
                <div class="row mt-3 mb-2">
                    <p class="text-center">Already have an account? <a href="login.php">Login</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-qRVSLmZlOGVbCeBZW0BlNsk6VSm8poEODwg6xWUN6M6x5siDk+Jz6A9Bf2zp38gF"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-pGfa5fWu0QnqRdfCsSl+3PO9kw1Mkq6PsADyGQjkFxh2ZZaHL1lHZnDoHQhX8w2G"
        crossorigin="anonymous"></script>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function () {
            const passwordField = document.getElementById('password');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            this.classList.toggle('bi-eye-fill');
            this.classList.toggle('bi-eye-slash-fill');
        });

        document.getElementById('toggleConfirmPassword').addEventListener('click', function () {
            const confirmPasswordField = document.getElementById('confirm_password');
            const type = confirmPasswordField.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPasswordField.setAttribute('type', type);
            this.classList.toggle('bi-eye-fill');
            this.classList.toggle('bi-eye-slash-fill');
        });
    </script>

</body>

</html>
