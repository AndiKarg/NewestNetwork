<?php
include "assets/php/begintemplate.php";
?>

<link rel="stylesheet" href="assets/css/feed/feed.css" />
<script src="assets/js/feed/feed.js"></script>

<!-- Beitrag verfassen -->
<div class="mdl-cell mdl-cell--12-col">
    <div class="demo-card-wide mdl-card mdl-shadow--2dp feedcont">
        <h4 class="createFeedHeading">Hallo, <?php echo $_SESSION['user_name']; ?>! Teile etwas mit deinen Freunden </h4>
        <div class="createFeed" contenteditable="true"></div>
        <hr class="myhr">
        <Button class="mybtn createFeedBtn mdl-button mdl-js-button mdl-js-ripple-effect">Beitrag verfassen</Button>
    </div>
</div>




<!-- content -->
<div class="mdl-grid"></div>

<div class="activeCard" style="display: none;">
    <div class="mdl-cell mdl-cell--12-col">
        <div class="demo-card-wide mdl-card mdl-shadow--2dp activeElement">

        </div>
    </div>
</div>

<?php
include "assets/php/endtemplate.php";
?>