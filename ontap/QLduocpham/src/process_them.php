<?php
   include 'config.php';//Nhớ
   $Name= $_POST['Name'];
   $Type = $_POST['Type'];
   $Barcode= $_POST['Barcode'];
   $Dose = $_POST['Dose'];
   $Code = $_POST['Code'];
   $Cost_price= $_POST['Cost_price'];
   $Selling_price= $_POST['Selling_price'];
   $Expiry = $_POST['Expiry'];
   $Company_name = $_POST['Company_name'];
   $Production_date = $_POST['Production_date'];
   $Expiration_date = $_POST['Expiration_date'];
   $Place = $_POST['Place'];
   $Quantity = $_POST['Quantity'];
    //Bước 2: 
    $sql = "INSERT INTO `drugs`( `name`, `type`, `barcode`, `dose`, `code`, `cost_price`, `selling_price`, 
    `expiry`, `company_name`, `product_date`, `expiration_date`, `place`, `quanlity`) 
    VALUES ('$Name','$Type','$Barcode','$Dose','$Code','$Cost_price','$Selling_price',
    '$Expiry','$Company_name','$Production_date','$Expiration_date','$Place','$Quantity')";
    
    $result = mysqli_query($conn, $sql);
    //Bước 3 
    if($result >0 ){
        header("Location:index.php");
    }else{
        header("Location:error.php");
    }
    //Buwosc4: Đóng kết nối
    mysqli_close($conn);

?>