<?php
session_start();
if (empty($_SESSION['user_id'])) {
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="assets/css/login/login.css">
    <script src="assets/js/login/login.js"></script>
</head>

<body>

    <!-- @TODO DIV is not responsive!! -->

    <div class="container logincontainer">

        <div class="logindiv">
            <div class="loginform">
                <span class="inputname">Username</span>
                <p><input type="text" class="inputfield" name="username" id="username" autocomplete="off" /></p>
                <span class="inputname">Passwort</span>
                <p><input type="password" class="inputfield" name="password" id="password" autocomplete="off" /></p>
                <p><Button type="button"
                        class="login mybtn mdl-button mdl-js-button mdl-js-ripple-effect">Einloggen</Button>
                </p>
                <hr class="myhr">
                <p>Sie habe noch keinen Account?</p>
                <p><Button type="button"
                        class="toregister mybtn mdl-button mdl-js-button mdl-js-ripple-effect">Registrieren</Button>
                </p>
            </div>
        </div>

        <div class="loginpic"></div>
    </div>
    </div>

    <div class="container registercontainer" style="display: none;">

        <div class="logindiv">
            <div class="loginform">
                <span class="inputname">Username</span>
                <p><input type="text" class="inputfield" name="username" id="username" autocomplete="off" /></p>
                <span class="inputname">Passwort</span>
                <p><input type="password" class="inputfield" name="password" id="password" autocomplete="off" /></p>
                <span class="inputname">Passwort bestätigen</span>
                <p><input type="password" class="inputfield" name="password2" id="password2" autocomplete="off" /></p>
                <p><Button type="button"
                        class="register mybtn mdl-button mdl-js-button mdl-js-ripple-effect">Registrieren</Button>
                </p>
                <hr class="myhr">
                <p>Sie haben bereits einen Account?</p>
                <p><Button type="button"
                        class="tologin mybtn mdl-button mdl-js-button mdl-js-ripple-effect">Einloggen</Button>
                </p>
            </div>
        </div>

        <div class="loginpic"></div>
    </div>
    </div>



    </div>

</body>

</html>

<?php
} else { // soll nur angezeigt werden wenn Session noch leer ist!
echo '
<script type="text/javascript">

alert("Sie sind bereits eingeloggt und werden nun auf die Hauptseite weitergeleitet");
window.location.href = "home.php";

</script>';
}
?>