<?php
    if(isset($_POST['btnLuu'])) {
        $id = $_GET['id'];//id trong get này lấy giông id sau dấu ? dong11
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
        
            
        include './config.php';
        $sql2 = "UPDATE `drugs` SET `name`='$Name',`type`='$Type',`barcode`='$Barcode',`dose`='$Dose',`code`='$Code',`cost_price`='$Cost_price',
        `selling_price`='$Selling_price',`expiry`='$Expiry',`company_name`='$Company_name',`product_date`='$Production_date',
        `expiration_date`='$Expiration_date',`place`='$Place',`quanlity`='$Quantity' WHERE id = '$id'";
        echo $sql2;
      
        $result_update = mysqli_query($conn, $sql2);
        if($result_update) 
        {
           header("Location:index.php");
        }
        else {
            echo'them k thanh cong';
            // header("Location:error.php");
        }
    }     
?>