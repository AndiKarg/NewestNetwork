$(document).ready(function () {

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