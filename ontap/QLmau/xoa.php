<?php
    include 'config.php';
    $bd_id = $_GET['id'];
    $sql = "delete from blood_donor where bd_id = '$bd_id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: chitiet.php");
    }
?>