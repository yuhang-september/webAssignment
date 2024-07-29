<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Recipe Manager</title>
    <script src="js/script.js"></script>
    <link href="css/index.css" rel="stylesheet">
</head>

<body>
    <div>
        <form id="loginForm" action="login/doLogin.php" method="post">
            <div>
                Username:<input type="text" id="username" name="username">
            </div>
            <div>
                Password:<input type="password" id="password" name="password">
            </div>
            <div>
                <button id="signInBtn" type="submit">Sign-In</button> <button id="signUpBtn" type="button">Sign-Up</button>
            </div>
        </form>
    </div>
</body>

<script>
    document.getElementById("signUpBtn").addEventListener("click", ()=> window.location.href = 'login/register.php');
</script>
<?php
        $errorMessage = isset($_GET['errorMessage']) ? $_GET['errorMessage'] : '';
        if ($errorMessage) {
            echo "<script type='text/javascript'>alert('$errorMessage');</script>";
        }
    ?>
</html>