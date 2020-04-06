<?php

$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];
$birthdate = $_POST['date'];
$mobile_no = $_POST['telephone'];
$gender = $_POST['gender'];

if($password == $confirm_password){
    $con = mysqli_connect('127.0.0.1', 'root', '', 'p7_pr4') or die(mysqli_error($con));
    $query = "INSERT INTO p7_pr4.thetable (email, name, password, birthday, mobileno, gender) 
            VALUES('$email', '$name', '$password', '$birthdate', '$mobile_no', '$gender')";
    $insert_result = mysqli_query($con,$query) or die(mysqli_error($con));
    // echo "Inserted Successfully";
    session_start();
    $_SESSION['name'] = $email;
    header("Location: http://localhost/p7_pr4/success/success.php");
}
else{
    echo '<script>alert("Incorrect password.\nConfirm your password again")</script>';
    // sleep(5);
    // header("Location: http://localhost/Form/SocialMediaForm.php");
    // exit();
}

?>