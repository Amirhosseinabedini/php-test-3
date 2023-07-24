<?php
session_start();
require_once 'classes/AlertScript.php';

use Classes\Alert\AlertScript;

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {

?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Baebeca-Test|Home</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/scripts/jquery.min.js"></script>
        <script src="assets/scripts/sweetalert.min.js"></script>
    </head>

    <body>
        <div id="container" class="container home">
            <div class="row">
                <div class="col align-items-center flex-col home"></div>
                <div class="col align-items-center flex-col home">
                    <div class="form-wrapper align-items-center">
                        <div class="form home" id="hometransform">
                            <h2>
                                Welcome User! , you're logged in!
                            </h2>

                            <p style="text-align: left;">
                                <span>
                                    Hallo und herzliche Grüße,
                                    <br>
                                    Mit Stolz und Respekt möchte ich mein Interesse an der Zusammenarbeit mit dem Team von Baebeca Solutions GmbH bekunden. Die Gelegenheit, an Ihrem einfachen Testprojekt zu arbeiten, war für mich äußerst wertvoll und angenehm. Ich habe mein Bestes gegeben, um alle Details sorgfältig zu berücksichtigen und den Code auf bestmögliche Weise zu entwickeln.
                                    <br>
                                    Ich möchte mich herzlich bei Ihnen für diese Chance bedanken und meine Begeisterung für eine Zusammenarbeit in Ihrem Unternehmen zum Ausdruck bringen.
                                    <br>
                                    Sie können meine persönliche Website unter <a href="https://amirabedini.net/" target="_blank" ><b class="pointer">www.amirabedini.net</b></a> besuchen. Das Online-Projekt, an dem ich gearbeitet habe, finden Sie unter <a href="https://amirabedini.net/baebeca_test" target="_blank" ><b class="pointer">www.amirabedini.net/baebeca_test</b></a>.
                                    <br>
                                    Vielen Dank und ich freue mich auf eine positive Rückmeldung.
                                    <br>
                                    Mit freundlichen Grüßen,
                                    Amir Abedini
                                </span>
                            </p>
                            <button id="logout-button">Logout</button>
                        </div>
                    </div>
                    <div class="form-wrapper"></div>
                </div>
            </div>
            <div class="row content-row">
                <div class="col align-items-center flex-col">
                    <div class="text">
                        <div class="img">
                            <h2>
                                Welcome User! <br>you're logged in!
                            </h2>
                        </div>
                        <div class="col align-items-center flex-col home"></div>
                        <div class="col align-items-center flex-col home"></div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let container = document.getElementById("container");
            setTimeout(() => {
                document.getElementById("hometransform").style.transform = "scale(1)";
            }, 200);
        </script>
        <script>
            document.getElementById("logout-button").addEventListener("click", function() {

                window.location.href = "logout.php";
            });
        </script>
        <?php
        if (isset($_GET['res'])) {
            if ($_GET['res'] == 1) {
                AlertScript::show("success", "Login successful", 3000, false);
            }
        }
        ?>

    </body>

    </html>
<?php
} else {
    header("Location: login.php");
    exit;
}
?>