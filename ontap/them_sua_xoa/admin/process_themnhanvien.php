<?php
    $emp_name = $_POST['empName'];
    $emp_position = $_POST['empPosition'];
    $emp_email = $_POST['empEmail'];
    $emp_mobile = $_POST['empMobile'];
    $office_id = $_POST['offices'];
    include '../config.php';
    //Bước 2: 
    $sql = "INSERT INTO db_employyess(emp_name, emp_position, emp_email, emp_mobile, office_id)
    VALUES ('$emp_name', '$emp_position', '$emp_email', '$emp_moblie', '$office_id')";

    echo $sql;
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location:index.php");
    }else{
        echo"Lỗi rùi";
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>