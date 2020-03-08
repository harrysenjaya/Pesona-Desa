<html>
<head>
    <link rel="stylesheet" href="View/Style/w3.css">
    <link rel="stylesheet" href="View/Layout/layout.css">
    <link rel="stylesheet" href="View/Fonts/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="View/Layout/headerScript.js" defer></script>
</head>
<body>
    <div class="header">
        <ul>
            <li style="margin-left: 0px;"><a href="home"style="margin-top: 0px;"><i class="fa fa-home"></i></a></li>
            <li><a id="stay" class="navJudul" href="stay">STAY</a></li>
            <li><a id="experience" class="navJudul" href="experience">EXPERIENCE</a></li>
            <li class="rightNav" ><a href="profile">
                <?php
                    if ( isset($_SESSION['name'])) {
                        echo $_SESSION['name'];
                    } 
                    else {
                        echo "Sign in";
                    }
                ?>
                    </a></li>
            <li class="rightNav" ><i class="fa fa-user" style="display: block; color: black; padding: 5px 16px; text-decoration: none; margin-top: 0px; border-radius: 15px; font-size: 40px;"></i></li>
        </ul>
    </div>
    <script>
    </script>
