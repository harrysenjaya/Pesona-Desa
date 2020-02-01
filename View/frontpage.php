<!DOCTYPE html>
<html>

<head>
    <title>Pesona Desa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <i class="fa fa-user" style="color: white"></i>
        <a id="loginText" style="text-decoration: none;">
            <p class="mainLogin"
                style="display: inline; color: white; margin-right: 10px; font-size: 25px; cursor:  pointer;">Sign in
            </p>
        </a>
    </div>
    <div class="clearFloat"></div>
    <div>
        <h1 class="judulMain" style="color:white">PESONA DESA</h1>
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
            <span class="close">&times;</span><br>
            <h1 class="modalJudul">Login</h1>
            <p class="judulField">Email</p>
            <input class="inputModal" type="text" id="emailLogin" required>
            <p class="judulField">Password</p>
            <input class="inputModal" type="password" id="pswLogin" required>
            <input type="checkbox"> <label>Remember me</label><br>
            <button class="modalButton">Sign in</button>
        </div>
    </div>

</body>

</html>