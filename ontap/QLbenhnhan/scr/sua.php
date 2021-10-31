<?php
    include 'header.php';
    include 'config.php';
    $id = $_GET['id'];
    $sql = "SELECT * from  patient where patientid = '$id'";
    $result_current = mysqli_query($conn, $sql);
    $row_current = mysqli_fetch_assoc($result_current);
?>
<main class= "container mt-5 ">
    <h2 class="mb-3">Nhập thông tin người bệnh:</h2>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="patientid" class="col-sm-2 col-form-label">Mã bệnh nhân: </label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['patientid'] ?>" class="form-control"  name="Patientid">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="firstname" class="col-sm-2 col-form-label">TÊN: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['firstname'] ?>" class="form-control"  name="Firstname">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lastname" class="col-sm-2 col-form-label">Họ đệm: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['lastname'] ?>" class="form-control"  name="Lastname">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="dateofbirth" class="col-sm-2 col-form-label">Ngày sinh: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['dateofbirth'] ?>" class="form-control" name="Dateofbirth">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Giới tính: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['gender'] ?>" class="form-control"  name="Gender">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['mobile'] ?>" class="form-control"  name="Mobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['email'] ?>" class="form-control"  name="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="height" class="col-sm-2 col-form-label">Chiều cao: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['height'] ?>" class="form-control" name="Height">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="weight" class="col-sm-2 col-form-label">Cân nặng </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['weight'] ?>" class="form-control"  name="Weight">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="blood_type" class="col-sm-2 col-form-label">Nhóm máu: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['blood_type'] ?>" class="form-control" name="Blood_type">
            </div>
        </div>
       
        

        <div class="mb-3 row">
            <button name="btnLuu" type="submit" class="btn btn-success">Lưu lại</button>
        </div>
    </form>
</main>
<?php
    if(isset($_POST['btnLuu'])) {
        $FistName = $_POST['Firstname'];
        $LastName = $_POST['Lastname'];
        $DateB= $_POST['Dateofbirth'];
        $GT = $_POST['Gender'];
        $SDT = $_POST['Mobile'];
        $Em = $_POST['Email'];
        $He = $_POST['Height'];
        $We = $_POST['Weight'];
        $Blood = $_POST['Blood_type'];
            
        
        $sql2 = "UPDATE patient set firstname= '$FistName', lastname= '$LastName', dateofbirth= '$DateB', gender='$GT', 
        mobile='$SDT', email='$Em', height= '$He', weight = '$We', blood_type= '$Blood' where  patientid= '$id'";
        
        $result_update = mysqli_query($conn, $sql2);
        if($result_update>0) 
        {
          // echo 'thanhcong';
           header("Location:chitiet.php");
           
        } 
        else {
            echo 'Lỗi.';
        }
    }     
    mysqli_close($conn);  
?>
<?php
include 'footer.php';
?>
