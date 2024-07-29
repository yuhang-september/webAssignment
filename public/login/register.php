<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Recipe Manager</title>
    <script src="../js/script.js"></script>
    <link href="../css/register.css" rel="stylesheet">
</head>

<body>
    <div class="formcontainer">
        <h1>Online Recipe Manager</h1>
        <hr>
        <div id="registerForm">
        <form id="form" action="doRegister.php" method="post" onsubmit="return validate(event);">
            <!-- You will need to write the validate function for this form. -->

            <div class="textfield">
                <label for="email">Email Address</label>
                <input type="text" name="email" id="email" placeholder="Email" class="box" onchange="validateEmail(this)">
            </div>

            <div class="textfield">
                <label for="login">User Name</label>
                <input type="text" name="username" id="login" placeholder="User name" class="box" onchange="validateUsername(this)">
            </div>

            <div class="textfield">
                <label for="pass">Password</label>
                <input type="password" name="password" id="pass" placeholder="Password" class="box" onchange="validatePass(this)">
            </div>

            <div class="textfield">
                <label for="pass2">Re-type Password</label>
                <input type="password" id="pass2" placeholder="Password" class="box" onchange="validatePass2(this)">
            </div>

            <div class="checkbox">
                <input type="checkbox" name="newsletter" id="newsletter" onClick="alertNewsLetter();">
                <label for="newsletter">I agree to receive Weekly Kitten Pictures newsletters</label>
            </div>

            <div class="checkbox">
                <input type="checkbox" name="terms" id="terms" onClick="validateTerms(this)">
                <label for="terms">I agree to the terms and conditions</label>
            </div>

            <button type="submit" id="submit">Sign-Up</button>
            <button type="reset" id="reset">Reset</button>

        </form>
        </div>
        
    </div>
</body>

</html>