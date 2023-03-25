<!DOCTYPE html>
<html class="center">
    <head lang="en">
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/loginStyle.css">
    <script type="text/javascript" src="script/validateReg.js"></script>
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>


    <body>
        <form method="post" action="validateReg.php">
            <fieldset>
                <legend>Register</legend>
                <p>
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="Email address" class="required">
                </p>
                <p>
                    <label>Username:</label>
                    <input type="text" name="user" placeholder="Username" class="required">
                </p>
                <p>
                    <label>Password</label>
                    <input type="password" name="pass" placeholder="Password" class="required">
                </p>
                <p>
                    <button id="reg" type="submit" name="register" formaction="validateReg.php">Register</button>
                </p>
                <p><button formaction="homepage.php">Home</button></p>
            </fieldset>
        </form>


    </body>


</html>