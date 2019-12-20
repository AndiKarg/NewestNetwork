$(document).ready(function () {

    //login handling
    $('.login').click(function () {

        let username = $('.logincontainer #username').val();
        let password = $('.logincontainer #password').val();

        if (username.length > 0 && password.length > 0) {
            //Logik beginnen

            let data = {
                'username': username,
                'password': password,
            };

            $.ajax({
                method: 'POST',
                url: 'assets/php/login/login.php',
                data: data,
                success: function (data) {
                    alert(data);
                    window.location.href = "home.php";
                },
                error: function (err) {
                    let response = JSON.parse(err.responseText);
                    if (response.code == 1337) {
                        alert("User gibts ned!");
                    } else if (response.code == 1338) {
                        alert("Passwort falsch!");
                    }
                    location.reload();
                }
            });

        } else {
            alert("Bitte Eingaben überprüfen!");
        }

    });

    //register handling
    $('.register').click(function () {
        let rusername = $('.registercontainer #username').val();
        let password1 = $('.registercontainer #password').val();
        let password2 = $('.registercontainer #password2').val();
        if (rusername.length > 0 && password1.length > 0) {
            if (password1 === password2) {
                registrieren(rusername, password1);
            }
        }

    });

    //register function
    function registrieren(u, p) {
        $.ajax({
            method: 'POST',
            url: 'assets/php/login/register.php',
            data: {
                'u': u,
                'p': p
            },
            success: function (suc) {
                alert("Willkommen im DVS-N");
                window.location.href = "home.php";
            },
            error: function (err) {
                alert(err.responseJSON.message);
            }
        });
    }

    //switch between login and registerform
    $('.toregister').click(function () {
        $('.logincontainer').toggle();
        $('.registercontainer').toggle();
    });

    $('.tologin').click(function () {
        $('.registercontainer').toggle();
        $('.logincontainer').toggle();
    });

})