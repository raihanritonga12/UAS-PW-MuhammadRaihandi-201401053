<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link rel="stylesheet" href="assets/login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karantina&display=swap" rel="stylesheet">
</head>
<body class="bground">
    <div class="box">
        <h1 class="textlogin"><b>Login</b></h1>
        <form class="formbox" method="POST" action="aksi_login.php">
            <p style="font-family: 'Odibee Sans', sans-serif;"><b>Username</b></p>
            <input name="username" type="text" name="" placeholder="Enter Username" class="userpass" style="font-family: 'Odibee Sans'	, sans-serif;">
            <p style="font-family: 'Odibee Sans', sans-serif;"><b>Password</b></p>
            <input name="password" type="password" name="" placeholder="Enter Password" class="userpass" style="font-family: 'Odibee Sans', sans-serif;">
            <br>
            <input type="submit" name="" value="SIGN IN" class="loginbutton">
        </form>
    </div>
</body>
</html>