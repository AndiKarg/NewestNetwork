$(document).ready(function () {

    console.log("Feedsuche wird ausgeführt");

    $.ajax({
        url: 'assets/php/feed/entries.php',
        success: function (entries) {
            let result = JSON.parse(entries);
            console.log(result);
            result.forEach(e => {
                $('.mdl-grid').append('<div class="mdl-cell mdl-cell--12-col"><div class="demo-card-wide mdl-card mdl-shadow--2dp"><div class="mdl-card__title" style="background-image: url(assets/img/feed/' + e.feedpic + ');"><h2 class="mdl-card__title-text">' + e.user_id + '</h2></div><div class="mdl-card__supporting-text">' + e.corefeed + '</div><div class="mdl-card__actions mdl-card--border"><a href="' + e.url + '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Weiterlesen</a></div><div class="mdl-card__menu"><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="material-icons">share</i></button></div></div></div>');
            });
        },
        error: function (err) {
            console.log(err);
        }
    })

    $('.mdl-grid').on('click', '.mdl-card', function () {
        let active = $(this).html();

        $('.activeElement').html("");

        $('.activeCard').toggle();
        $('.activeElement').html(active);
        if ($('.activeCard').css("display") != "none") {
            $('.activeElement .mdl-card__menu').append('<button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="material-icons deactivate">clear</i></button>');
        }

    })

    $('.activeElement').on('click', '.deactivate', function () {
        $('.activeElement').html("");
        $('.activeCard').toggle();
    });


});