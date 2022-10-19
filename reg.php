<?php
    $con = mysqli_connect("localhost","root","","registration") or die(mysqli_error($con));

    $name = trim($_POST['username']);
    $password = trim($_POST['password']);
    $cpassword = trim($_POST['Confirm_password']);
    $email = trim($_POST['email']);

    $user_reg_query = "insert into signup(name,password,cpassword,email) values ('$name','$password','$cpassword','$email')";

    $user_reg_submit = mysqli_query($con,$user_reg_query) or die(mysqli_error($con));

    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $user_id;
    header('location: user.php');
    

?>