<?php
    include '../config.php';
    $emp_id = $_GET['id'];
    $sql = "delete from db_employyess where emp_id = '$emp_id'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location: ./index.php");
    }
?>