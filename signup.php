<?php
session_start();

require_once 'classes/UserAuthentication.php';
require_once 'classes/AlertScript.php';

use Classes\Alert\AlertScript;
use Classes\Authentication\User;

function setFormDataCookies($email, $password)
{
    setcookie('email', $email, time() + 3600); 
    setcookie('password', $password, time() + 3600);
}

function deleteFormDataCookies()
{
    setcookie('email', '', time() - 3600); 
    setcookie('password', '', time() - 3600);
}

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location:index.php");
} else {
    if (isset($_POST) && $_POST != null) {
        if (
            isset($_POST['email']) && $_POST['email'] != null
            && isset($_POST['password']) && $_POST['password'] != null
        ) {
            $signup = new User("database.txt");
            $result = $signup->signupUser($_POST['email'], $_POST['password']);
            if ($result == 2) {
                deleteFormDataCookies();
                header("location:login.php?res=" . $result);
            } else {
                setFormDataCookies($_POST['email'], $_POST['password']);
                header("location:signup.php?res=" . $result);
            }
        } else {
            header("location:signup.php");
        }
    } else {
        if (isset($_GET['res'])) {
            if ($_GET['res'] == 5) {
                $error_php = "Error Invalid email format";
            } elseif ($_GET['res'] == 6) {
                $error_php = "Error Invalid password format";
            } elseif ($_GET['res'] == 0) {
                $error_php = "Error writing new user";
            } elseif ($_GET['res'] == 1) {
                $error_php = "User already exists";
            }
        }

        $cookieEmail = isset($_COOKIE['email']) ? $_COOKIE['email'] : '';
        $cookiePassword = isset($_COOKIE['password']) ? $_COOKIE['password'] : '';
?>

        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baebeca-Test|signup</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <script src="assets/scripts/jquery.min.js"></script>
            <script src="assets/scripts/jquery.validate.js"></script>
            <script src="assets/scripts/sweetalert.min.js"></script>
        </head>
        <?php
        ?>

        <body>
            <div id="container" class="container">
                <div class="row">
                    <div class="col align-items-center flex-col sign-up">
                        <div class="form-wrapper align-items-center">
                            <div class="form sign-up">
                                <form action="" method="post" id="signup-form">
                                    <div class="input-group">
                                        <i class='bx bx-mail-send'></i>
                                        <input type="email" name="email" placeholder="Email" required value="<?php echo $cookieEmail; ?>">
                                    </div>
                                    <div class="input-group">
                                        <i class='bx bxs-lock-alt'></i>
                                        <input type="password" name="password" placeholder="Password" required value="<?php echo $cookiePassword; ?>">
                                    </div>
                                    <div class="input-group">
                                        <i class='bx bxs-lock-alt'></i>
                                        <input type="password" name="confirmPassword" placeholder="Confirm password" required>
                                    </div>
                                    <div id="error_php" class="error"><?php if (isset($error_php) && $error_php != "") {
                                                                            echo $error_php;
                                                                        } ?></div>
                                    <button type="submit">Sign up</button>
                                    <p>
                                        <span>
                                            Already have an account?
                                        </span>
                                        <a href="login.php">
                                            <b class="pointer">
                                                Sign in here
                                            </b>
                                        </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col align-items-center flex-col sign-in"></div>
                </div>
                <div class="row content-row">
                    <div class="col align-items-center flex-col">
                    </div>
                    <div class="col align-items-center flex-col">
                        <div class="img sign-up"></div>
                        <div class="text sign-up">
                            <h2>
                                Join us and get started!
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let container = document.getElementById("container");
                setTimeout(() => {
                    container.classList.add("sign-up");
                }, 200);
            </script>
            <script>
                $(document).ready(function() {
                    $('#signup-form').validate({
                        rules: {
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 6
                            },
                            confirmPassword: {
                                required: true,
                                equalTo: "#signup-form input[name='password']"
                            }
                        },
                        messages: {

                            email: {
                                required: "Please enter your email",
                                email: "Please enter a valid email address"
                            },
                            password: {
                                required: "Please enter a password",
                                minlength: "Your password must be at least 6 characters long"
                            },
                            confirmPassword: {
                                required: "Please confirm your password",
                                equalTo: "Passwords do not match"
                            }
                        },
                    });
                });
            </script>
            <?php
            if ($_GET['res']) {
                if ($_GET['res'] == 5) {
                    AlertScript::show("error", "Error Invalid email format", 3000, false);
                } elseif ($_GET['res'] == 6) {
                    AlertScript::show("error", "Error Invalid password format", 3000, false);
                } elseif ($_GET['res'] == 0) {
                    AlertScript::show("error", "Error writing new user", 3000, false);
                } elseif ($_GET['res'] == 1) {
                    AlertScript::show("error", "User already exists", 3000, false);
                }
            }
            ?>
        </body>

        </html>
<?php

    }
} ?>