<!DOCTYPE html>
<html>

<head>
    <title>Pesona Desa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="View/Style/w3.css">
    <link rel="stylesheet" href="View/Style/frontpage.css" />
    <link rel="stylesheet" href="View/Fonts/font-awesome.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="View/Script/frontpage.js" defer></script>

    <!--Modal Login-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--Modal Login-->
</head>

<body>
    <div class="font" style="float: right;font-size: 30px; margin-top: 20px; margin-right: 50px;">
        <i class="fa fa-user w3-text-white"></i>
        <a id="loginText" style="text-decoration: none;">
            <p class="mainLogin" style="display: inline; color: white; margin-right: 10px; font-size: 25px;">Sign in</p>
        </a>
    </div>
    <div class="clearFloat"></div>
    <div>
        <h1 class="w3-text-white judulMain">PESONA DESA</h1>
    </div>
    <div>
        <div style="width: 49%; display: inline-block;">
            <div style="width:100%;text-align: center;">
                <button class="mainButton">STAY</button>
            </div>
        </div>
        <div
            style="width: 0.5%; height:300px; background-color: white; opacity: 0.85;display: inline-block; vertical-align: middle;">
        </div>
        <div style="width: 49%; display: inline-block;">
            <div style="width:100%;text-align: center;">
                <button class="mainButton">EXPERIENCE</button>
            </div>
        </div>
    </div>

    <div id="loginModal" class="modal">
        <div class="loginContent">
            <span class="close">&times;</span>
            <div id="textLogin">
                <p>Login</p>
            </div>
            <div class="bs-example">
                <form action="/examples/actions/confirmation.php" class="needs-validation" method="post" novalidate>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                        <div class="invalid-feedback">Please enter a valid email address.</div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                        <div class="invalid-feedback">Please enter your password to continue.</div>
                    </div>
                    <div class="form-group">
                        <label class="form-check-label"><input type="checkbox"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </form>

                <script>
                    (function () {
                        'use strict';
                        window.addEventListener('load', function () {
                            var forms = document.getElementsByClassName('needs-validation');
                            var validation = Array.prototype.filter.call(forms, function (form) {
                                form.addEventListener('submit', function (event) {
                                    if (form.checkValidity() === false) {
                                        event.preventDefault();
                                        event.stopPropagation();
                                    }
                                    form.classList.add('was-validated');
                                }, false);
                            });
                        }, false);
                    })();
                </script>
            </div>
        </div>
    </div>

</body>

</html>