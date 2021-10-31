<?php
    include '../config.php';

    $emp_name = $_POST['empName'];
    $emp_position = $_POST['empPosition'];
    $emp_email = $_POST['empEmail'];
    $emp_mobile = $_POST['empMobile'];
    $office_id = $_POST['officeName'];

    $sql = "insert into db_employyess(emp_name, emp_position, emp_email, emp_mobile, office_id)
            values('$emp_name', '$emp_position', '$emp_email', '$emp_mobile', '$office_id')";
    $result = mysqli_query($con, $sql);
    if($result > 0) {
        header('Location: index.php');
    } else {
        echo 'Lỗi.';
    }

    mysqli_close($con);
?>