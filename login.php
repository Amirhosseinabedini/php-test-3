<?php
session_start();

require_once 'classes/UserAuthentication.php';
require_once 'classes/AlertScript.php';

use Classes\Alert\AlertScript;
use Classes\Authentication\User;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("location:index.php?res=1");
} else {
    if (isset($_POST) && $_POST != null) {
        if (
            isset($_POST['email']) && $_POST['email'] != null
            && isset($_POST['password']) && $_POST['password'] != null
        ) {
            $login = new User("database.txt");
            $result = $login->checkLogin($_POST['email'], $_POST['password']);
            header("location:login.php?res=" . $result);
        } else {
            header("location:signin.php");
        }
    } else {
        if (isset($_GET['res'])) {
            if ($_GET['res'] == 5) {
                $error_php = "Error Invalid email format";
            } elseif ($_GET['res'] == 6) {
                $error_php = "Error Invalid password format";
            } elseif ($_GET['res'] == 0) {
                $error_php = "Login failed";
            }
        }

?>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Baebeca-Test|signin</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <script src="assets/scripts/jquery.min.js"></script>
            <script src="assets/scripts/jquery.validate.js"></script>
            <script src="assets/scripts/sweetalert.min.js"></script>
        </head>

        <body>
            <div id="container" class="container">
                <div class="row">
                    <div class="col align-items-center flex-col sign-up"></div>
                    <div class="col align-items-center flex-col sign-in">
                        <div class="form-wrapper align-items-center">
                            <div class="form sign-in">
                                <form action="" method="post" id="signin-form">
                                    <div class="input-group">
                                        <i class='bx bx-mail-send'></i>
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                    <div class="input-group">
                                        <i class='bx bxs-lock-alt'></i>
                                        <input name="password" type="password" placeholder="Password">
                                    </div>
                                    <div id="error_php" class="error"><?php if (isset($error_php) && $error_php != "") {
                                                                            echo $error_php;
                                                                        } ?></div>
                                    <button type="submit">
                                        Sign in
                                    </button>
                                    <p>
                                        <span>
                                            Don't have an account?
                                        </span>
                                        <a href="signup.php">
                                            <b class="pointer">
                                                Sign up here
                                            </b>
                                        </a>
                                    </p>
                                </form>
                            </div>
                        </div>
                        <div class="form-wrapper">
                        </div>
                    </div>
                </div>
                <div class="row content-row">
                    <div class="col align-items-center flex-col">
                        <div class="text sign-in">
                            <h2>
                                Please log in to access your account!
                            </h2>
                        </div>
                        <div class="img sign-in">
                        </div>
                    </div>
                </div>
            </div>
            <script>
                let container = document.getElementById("container");
                setTimeout(() => {
                    container.classList.add("sign-in");
                }, 200);
            </script>
            <script>
                $(document).ready(function() {
                    $('#signin-form').validate({
                        rules: {
                            email: {
                                required: true,
                                email: true
                            },
                            password: {
                                required: true,
                                minlength: 6
                            }
                        },
                        messages: {

                            email: {
                                required: "Please enter your email",
                                email: "Please enter a valid email address"
                            },
                            password: {
                                required: "Please enter a password"
                            }
                        },
                    });
                });
            </script>
        <?php

        if ($_GET['res']) {
            if ($_GET['res'] == 0) {
                AlertScript::show("error", "Login failed", 3000, false);
            } elseif ($_GET['res'] == 5) {
                AlertScript::show("error", "Invalid email format", 3000, false);
            } elseif ($_GET['res'] == 6) {
                AlertScript::show("error", "Invalid password format", 3000, false);
            }
        }
    }

        ?>
        </body>

        </html>
    <?php
}
    ?>