<?php
   include 'config.php';
    $bd_Name = $_POST['bd_namee'];
    $bd_Sex = $_POST['bd_sexx'];
    $bd_Age= $_POST['bd_agee'];
    $bd_Group = $_POST['bd_groupp'];
    
    $bd_Phno = $_POST['bd_phnoo'];
    
   
    //Bước 2: 
    $sql = "INSERT INTO blood_donor(bd_name, bd_sex, bd_age, bd_group,  bd_phno)
    VALUES ('$bd_Name', '$bd_Sex', '$bd_Age', '$bd_Group',  '$bd_Phno')";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location: chitiet.php");
    }else{
        header("Location: error.php");
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>