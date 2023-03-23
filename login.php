<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/loginStyle.css">
    <script type="text/javascript" src="script/validateLogin.js"></script>
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        <form id="mainForm" method="post" action="http://www.randyconnolly.com/tests/process.php">
            <fieldset>
                <legend>Login</legend>
                <p>
                    <label>Email:</label>
                    <input class="required" type="text" name="email" placeholder="Email address">
                </p>
                <p>
                    <label>Password</label>
                    <input class="required" type="password" name="pass" placeholder="Password">
                </p>
                <p>
                    <button id="login" type="submit" name="login">Log in</button>
                    <button formaction="homePage.php">Forgot password</button>
                </p>
                <p><button formaction="homePage.php">Home</button></p>
            </fieldset>
        </form>




    </body>


</html>



