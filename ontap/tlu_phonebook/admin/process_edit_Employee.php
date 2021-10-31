<?php
    include '../config.php';
    $id = $_POST['empID'];
    $empName = $_POST['empName'];
    $empPosition = $_POST['empPosition'];
    $empEmail = $_POST['empEmail'];
    $empMobile = $_POST['empMobile'];
    $officeID = $_POST['officeName'];

    if(isset($_POST['btnLuu'])) {


        echo $id."<br>";
        echo $empName."<br>";
        echo $empPosition."<br>";
        echo $empEmail."<br>";
        echo $empMobile."<br>";
        echo $officeID."<br>";

        // $sql = "update db_employees set emp_name = '$empName', emp_position = '$empPosition', emp_email = '$empEmail', emp_mobile = '$empMobile', office_id = '$officeID' where emp_id = '$id'";
        // $result = mysqli_query($con, $sql);

        // if($result) {
        //     header("Location: ./index.php");
        // } else {
        //     echo 'Lỗi.';
        // }
    }

    mysqli_close($con);
?>