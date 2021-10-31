<?php
    include 'config.php';
    $Patientid = $_GET['id'];
    $sql = "DELETE from patient where patientid = '$Patientid'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location:chitiet.php");
        echo 'Lỗi';
    }
    mysqli_close($conn);
?>