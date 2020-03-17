<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="View/Style/login.css" />
</head>

<body>
    <div class="loginContent">
        <p class="tulisan_login">Sign In</p>

        <form action ="login" method="POST">
            <label>Email</label>
            <input type="text" name="email" class="form_login" placeholder="Email" required>

            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password" required>

            <input type="submit" class="tombol_login" value="Login">
            <br />
            <br />
        </form>
    </div>
</body>

</html>