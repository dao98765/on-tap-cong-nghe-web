<?php
include 'header.php';
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * from blood_donor o where bd_id = '$id'";
$result_current = mysqli_query($conn, $sql);
$row_current = mysqli_fetch_assoc($result_current);
?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin người hiến:</h2>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="bdID" class="col-sm-2 col-form-label">Mã người hiến: </label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['bd_id'] ?>" class="form-control" id="bdID" name="bdID">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bdName" class="col-sm-2 col-form-label">Họ tên: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_name'] ?>" class="form-control" id="bdName" name="bdName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bdSex" class="col-sm-2 col-form-label">Giới tính: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_sex'] ?>" class="form-control" id="bdSex" name="bdSex">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="bdAge" class="col-sm-2 col-form-label">Tuổi: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_age'] ?>" class="form-control" id="bdAge" name="bdAge">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bdGroup" class="col-sm-2 col-form-label">Nhóm máu: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_group'] ?>" class="form-control" id="bdGroup" name="bdGroup">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bdRegdate" class="col-sm-2 col-form-label">Ngày hiến máu: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_reg_date'] ?>" class="form-control" id="bdRegdate" name="bdRegdate">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="bdPhone" class="col-sm-2 col-form-label">Số điện thoại: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['bd_phno'] ?>" class="form-control" id="bdPhone" name="bdPhone">
            </div>
        </div>
        
        

        <div class="mb-3 row">
            <button name="btnLuu" type="submit" class="btn btn-success">Lưu lại</button>
        </div>
    </form>
</main>

<?php
    // include '../config.php';

    if(isset($_POST['btnLuu'])) {
        $bdName = $_POST['bdName'];
        $bdSex = $_POST['bdSex'];
        $bdAge= $_POST['bdAge'];
        $bdGroup = $_POST['bdGroup'];
        $bdRegdate = $_POST['bdRegdate'];
        $bdPhone = $_POST['bdPhone'];

        //echo $id;
        //echo $empName."<br>";
        //echo $empPosition."<br>";
        //echo $empEmail."<br>";
        //echo $empMobile."<br>";
        //echo $officeID."<br>";

        $sql_update = "update blood_donor set bd_name = '$bdName', bd_sex = '$bdSex', bd_age= '$bdAge', bd_group= '$bdGroup', bd_reg_date= '$bdRegdate',bd_phno='$bdPhone'  where bd_id = '$id'";
        $result_update = mysqli_query($conn, $sql_update);

        if($result_update) {
            header("Location: chitiet.php");
        } else {
            echo 'Lỗi.';
        }
    }

    mysqli_close($conn);
?>

<?php
include 'footer.php';
?>