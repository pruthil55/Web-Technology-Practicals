<?php

session_start();
if( isset($_SESSION['name']) && !empty($_SESSION['name']) )
    header("Location: http://localhost/p7_pr4/success/success.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <fieldset>
        <legend>Login</legend>
        <form method="POST" action="./formvalidation.php">

            <div class="field">
                <div class="input">
                    <label for="name">User Name: </label>
                    <input type="text" name="name" id="name" placeholder="Username" autocomplete="off" />
                </div>
            </div><br>

            <div class="field">
                <div class="input">
                    <label for="email">Password: </label>
                    <input type="password" name="password" id="password" placeholder="Password" />
                </div>
            </div><br>

            <div class="field">
                <div class="input">
                    <button class="login">Login</button>
                </div>
            </div><br>

        </form>
    </fieldset>

</body>

</html>