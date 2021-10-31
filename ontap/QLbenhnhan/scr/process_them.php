<?php
   include 'config.php';
   $Pa = $_POST['Patientid'];
   $FistName = $_POST['Firstname'];
   $LastName = $_POST['Lastname'];
   $DateB= $_POST['Dateofbirth'];
   $GT = $_POST['Gender'];
   $SDT = $_POST['Mobile'];
   $Em = $_POST['Email'];
   $He = $_POST['Height'];
   $We = $_POST['Weight'];
   $Blood = $_POST['Blood_type'];
       
    //Bước 2: 
    $sql = "INSERT INTO `patient`(`patientid`, `firstname`, `lastname`, `dateofbirth`, `gender`, 
    `mobile`, `email`, `height`, weight, `blood_type`)
    VALUES ('$Pa','$FistName', '$LastName', '$DateB', '$GT','$SDT', '$Em', '$He', '$We','$Blood')";
    
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location:chitiet.php");
    }else{
        header("Location:error.php");
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>