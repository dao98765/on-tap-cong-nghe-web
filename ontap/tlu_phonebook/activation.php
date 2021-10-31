<?php
    $email = $_GET['email'];
    $code = $_GET['code'];
    include './config.php';
    $sql = "SELECT * FROM users WHERE user_email = '$email' OR code = '$code'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $sql_2 = "UPDATE users SET user_status = 1 WHERE user_email = '$email'";
        $result_2 = mysqli_query($con,$sql_2);
        if($result_2 > 0){
            echo 'Tài khoản đã được kích hoạt';
        }
    }else{
       echo 'Không thể kích hoạt.';
    }
?>