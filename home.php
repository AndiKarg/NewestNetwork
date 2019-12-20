<?php
session_start();
if (!empty($_SESSION['user_id'])) {
?>
<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDV-N</title>
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <link rel="stylesheet" href="assets/css/home.css">
    <script src="assets/js/fetch.js"></script>
    <script src="assets/js/home.js"></script>
</head>

<body>

    <!-- The drawer is always open in large screens. The header is always shown,
  even in small screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer
mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!--My Head Name-->
                <div class="mdl-layout-spacer"></div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable
      mdl-textfield--floating-label mdl-textfield--align-right">
                    <label class="mdl-button mdl-js-button mdl-button--icon" for="fixed-header-drawer-exp">
                        <i class="material-icons">search</i>
                    </label>
                    <div class="mdl-textfield__expandable-holder">
                        <input class="mdl-textfield__input" type="text" name="sample" id="fixed-header-drawer-exp">
                    </div>
                </div>
            </div>
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title headname">EDV-
                <c>N</c></span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="">Home</a>
                <a class="mdl-navigation__link" href="">Feed</a>
                <a class="mdl-navigation__link" href="">Friends</a>
                <a class="mdl-navigation__link" href="">Support</a>
                <form method="POST" action="">
                <input type="submit" name="logout" value="Ausloggen"/>
                </form>
                <?php 
                    if (isset($_POST["logout"])) {
                        session_destroy();
                        header("Location: index.php");
                        die();
                    }
                ?>
            </nav>
        </div>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->

                <?php  echo "<h1> hallo ". $_SESSION['user_name']."</h1>"; ?>

                <div class="hero"></div>

                <div class="mdl-grid">

                </div>

            </div>
        </main>
    </div>

</body>

</html>
<?php
} else {// nur anzeigen wenn user auch eingeloggt ist!!
echo '
<script type="text/javascript">

alert("Sie müssen sich einloggen um Zugriff auf diese Seite zu erhalten!");
window.location.href = "index.php";

</script>';
}
?>