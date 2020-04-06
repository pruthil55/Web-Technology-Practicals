<?php
    include 'connection.php';

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $q = "INSERT INTO mycrud.login(username, password) VALUES ('$username', '$password')";
        $query = mysqli_query($con, $q);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0js/bootstrap.min.js"></script>
    <style>
        button
        {
            width:200px;
        }
        body
        {
            background-image:url('download.jpg');
            background-size:cover;
        }
    </style>
</head>
<body>
    <div class="col-lg-6 m-auto">
        <form method="post">
            <br><br><br><br><br><br>
            <div class="card p-3">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Insert Operation</h1>
                </div>
                <label>Username:</label>
                <input type="text" name="username" placeholder="Username" class="form-control" autocomplete="off" />
                <br>
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" class="form-control" autocomplete="off" />

                <br>
                <input type="submit" class="btn btn-success" name="submit">
            </div>
        </form>
        <br>
        <div class="text-center">
            <a href="display.php" class="text-white"><button class="btn btn-primary">Display</button></a>
        </div>
    </div>
</body>
</html>