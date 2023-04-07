<!DOCTYPE html>
<html class="center">
    <head lang="en"> 
    <meta charset="utf-8">
    <link rel = "stylesheet" href = "CSS/reset.css">
    <link rel = "stylesheet" href="CSS/homePageStyle.css">
    <script> function noLog(){alert('No user detected, log in please');}</script>
        <title>CRUELTY SQUAD FANPAGE</title>
    </head>

    <body>
        <form method="post" action="ban.php" class="entry">
                <legend>Ban a user</legend>
                <p> <label>Username</label>
                    <input class = "required" type="text" name="user">
                </p>
                <button id = "b" type = "submit" name = "ban">Ban</button>
        </form>
        <form method="post" action="delete.php" class="entry">
                <legend>Delete a post by id</legend>
                <p> <label>Id</label>
                    <input class = "required" type="text" name="id">
                </p>
                <button id = "b" type = "submit" name = "id">Delete</button>
        </form>




    </body>




</html>