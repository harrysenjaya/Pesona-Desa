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
</head>

<body>
    <div class="font" style="float: right;font-size: 30px; margin-top: 20px; margin-right: 50px;">
        <i class="fa fa-user" style="color: white"></i>
                <?php
                    if (isset($_SESSION['name'])) {
                        echo '<a href="profile" class="mainLogin">';
                        echo $_SESSION['name'];
                        echo '</a>';
                    } 
                    else {
                        echo '<a href="login" class="mainLogin"> Sign in </a>';
                    }
                ?>
    </div>
    <div class="clearFloat"></div>
    <div>
        <h1 class="judulMain" style="color:white">PESONA DESA</h1>
    </div>
    <div>
        <div style="width: 49%; display: inline-block;">
            <div style="width:100%;text-align: center;">
                <button class="mainButton" id="stay">STAY</button>
            </div>
        </div>
        <div
            style="width: 0.5%; height:300px; background-color: white; opacity: 0.85;display: inline-block; vertical-align: middle;">
        </div>
        <div style="width: 49%; display: inline-block;">
            <div style="width:100%;text-align: center;">
                <button class="mainButton" id="experience">EXPERIENCE</button>
            </div>
        </div>
    </div>

</body>

</html>