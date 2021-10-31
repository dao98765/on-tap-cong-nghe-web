<?php
    session_start();
    include '../config.php';
    if(isset($_POST['btnLogin'])) {
        $username = $_POST['txtUsername'];
        $password = $_POST['txtPass'];
        $sql = "SELECT * FROM users WHERE user_name = '$username'";
        $result = mysqli_query($con, $sql);
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $pass_hass = $row['user_pass'];
            if(password_verify($password,$pass_hass)){
                $_SESSION['loginSuccess'] = $username;
                header("Location: ./index.php");
            }
        } else {
            header("Location: ./login.php");
        }
    }


?>