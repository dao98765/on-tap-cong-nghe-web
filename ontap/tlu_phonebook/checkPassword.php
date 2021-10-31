<?php
    $email = 'tancv0995@gmail.com';
    $pass_raw = "123456";  // Mật khẩu nhập trên FORM login

    // Kết nối CSDL
    include './config.php';

    // Truy vấn dữ liệu
    $sql = "select * from db_users where user_email = '$email'";
    $result = mysqli_query($con, $sql);

    // Kiểm tra và xử lý kết quả
    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $pass_hash = $row['user_pass'];
        echo $pass_hash;
        if(password_verify($pass_raw, $pass_hash)) {
            echo 'Đăng nhập thành công';
        } else {
            echo 'Mật khẩu không khớp';
        }
    } else {
        echo 'Email không tồn tại';
    }

?>