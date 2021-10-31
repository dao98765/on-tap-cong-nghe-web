<?php
    include 'config.php';
    $ID = $_GET['id'];
    $sql = "DELETE from drugs where id= '$ID'";
    $result = mysqli_query($conn, $sql);
    if($result > 0) {
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
    mysqli_close($conn);
?>