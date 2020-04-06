<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0js/bootstrap.min.js"></script>
    <style>
        .btn-size
        {
            width:200px;
        }
        body
        {
            background-image:url('download.jpg');
            background-size:cover;
         }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-lg-12">
            <br><br>
            <div class="card">
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center">Display Update Delete Operation</h1>
                </div>
            </div>

            <table class="table table-striped table-hover table-bordered bg-white">
                <tr class="text-center text-white bg-dark">
                    <th>Id</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                
                <?php
                    include 'connection.php';

                    $q = "select * from mycrud.login";
                    $query = mysqli_query($con, $q);

                    while($res = mysqli_fetch_array($query))
                    {
                ?>
                        <tr class="text-center">
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['username'];?></td>
                            <td><?php echo $res['password'];?></td>
                            <td><a href="update.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-primary">Update</button></a></td>
                            <td><a href="delete.php?id=<?php echo $res['id'];?>" class="text-white"><button class="btn btn-danger">Delete</button></a></td>
                        </tr>
                <?php
                    }
                ?>
            </table>
            <div class="text-center">
                <a href="insert.php" class="text-white"><button class="btn btn-primary btn-size">Insert</button></a>
            </div>
            <br>
        </div>
    </div>
</body>
</html>