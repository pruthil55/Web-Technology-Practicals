<?php

    session_start();
    // if(isset($_SESSION['name']))
    //     header("Location: http://localhost/asg-2/index.php");

    $name = $_POST['name'];
    $password = $_POST['password'];

    $con = mysqli_connect('127.0.0.1', 'root', '', 'p7_pr4') or die(mysqli_error($con));
    $query = "SELECT email,password FROM p7_pr4.thetable WHERE email = '$name'";

    $select_result = mysqli_query($con,$query) or die(mysqli_error($con));

    if( mysqli_num_rows($select_result) == 1 ){
        $data = mysqli_fetch_array($select_result);
        if($data['password'] == $password){
            $_SESSION['name'] = $name;
            header("Location: http://localhost/p7_pr4/success/success.php");
        }
            
    }
    
    // echo "Inserted Successfully";
    echo '<script>alert("Error.\nWrong Credentials")</script>';
    //header("Location: http://localhost/PHP/login/login.php");
?>
