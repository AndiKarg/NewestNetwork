$(document).ready(function () {

    let apiKey = '56ef984f801141328d0bb0772f296015';

    let url = 'https://newsapi.org/v2/top-headlines?country=de&apiKey=56ef984f801141328d0bb0772f296015';

    async function lesenNews() {
        let result = await fetch(url);
        let data = await result.json();
        console.log(data.articles);

        data.articles.forEach(e => {
            let imageurl = e.urlToImage;
            $('.mdl-grid').append('<div class="mdl-cell mdl-cell--6-col"><div class="demo-card-wide mdl-card mdl-shadow--2dp"><div class="mdl-card__title" style="background-image: url(' + imageurl + ');"><h2 class="mdl-card__title-text">' + e.title + '</h2></div><div class="mdl-card__supporting-text">' + e.description + '</div><div class="mdl-card__actions mdl-card--border"><a href="' + e.url + '" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Weiterlesen</a></div><div class="mdl-card__menu"><button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"><i class="material-icons">share</i></button></div></div></div>');
        });

    }

    lesenNews();

})