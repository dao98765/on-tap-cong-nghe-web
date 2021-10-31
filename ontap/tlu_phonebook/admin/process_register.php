<?php
    include '../config.php';
    include '../sendEmail/send.php';
    if(isset($_POST['btnRegister'])) {
        // Lấy dữ liệu từ form
        $userName = $_POST['txtUsername'];
        $email = $_POST['txtEmail'];
        $pass = $_POST['txtPass'];
        $rePass = $_POST['txtRePass'];

        // Truy vấn dữ liệu
        $sql = "select * from users where user_email = '$email' or user_name='$userName'";
        $result = mysqli_query($con, $sql);

        // Xử lý kết quả
        if(mysqli_num_rows($result) > 0) {
            echo 'Email đã tồn tại';
        } else {
            // Băm mật khẩu
            $pass_hash = password_hash($pass, PASSWORD_DEFAULT);
            $code = md5(uniqid(rand(), true));
            $sql2 = "insert into users(user_name, user_email, user_pass) values ('$userName', '$email', '$pass_hash')";
            $result2 = mysqli_query($con, $sql2);
            if($result2 == 1) {
                sendEmail('daont1810@gmail.com', $code);
                header("Location: ./login.php");
            } else {
                echo 'Lỗi';
            }
        }
    }
?>