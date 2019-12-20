$(document).ready(function() {

    $('.login').click(function() {

        let username = $('#username').val();
        let password = $('#password').val();

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
                success: function(data) {
                    console.log(data);
                    window.location.href = "home.html";
                },
                error: function(err) {
                    let response = JSON.parse(err.responseText);
                    if (response.code == 1337) {
                        console.log("User gibts ned!");
                    } else if (response.code == 1338) {
                        console.log("Passwort falsch!");
                    }
                    location.reload();
                }
            });

        } else {
            alert("Bitte Eingaben überprüfen!");
        }

    })
})