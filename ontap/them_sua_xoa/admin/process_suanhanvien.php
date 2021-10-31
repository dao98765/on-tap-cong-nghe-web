<?php

   $empName = $_POST['empName'];
   $empPosition = $_POST['empPosition'];
   $empEmail = $_POST['empEmail'];
   $empMobile = $_POST['empMobile'];
   $officeID = $_POST['offices'];
   $id = $_GET['id'];
   include '../config.php';
   $sql_update = "UPDATE db_employyess SET emp_name='$empName', emp_position= '$empPosition', emp_email= '$empEmail', emp_mobile= '$empMobile', office_id='$officeID' 
   WHERE emp_id = '$id'";
   $result_update = mysqli_query($conn, $sql_update);
   if($result_update>0){
       header("Location:index.php");
   }else{
       echo 'Lỗi rùi';
   }

    mysqli_close($conn);
?>
