<?php
include '../partials-front/header.php';
include '../config.php';

$id = $_GET['id'];
$sql = "select *, office_name from db_employyess e, db_offices o where e.office_id = o.office_id and emp_id = '$id'";
$result_current = mysqli_query($con, $sql);
$row_current = mysqli_fetch_assoc($result_current);
?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin nhân viên:</h2>
    <form action="" method="post">
        <div class="mb-3 row">
            <label for="empID" class="col-sm-2 col-form-label">Mã nhân viên: </label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['emp_id'] ?>" class="form-control" id="empID" name="empID">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['emp_name'] ?>" class="form-control" id="empName" name="empName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ: </label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['emp_position'] ?>" class="form-control" id="empPosition" name="empPosition">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empEmail" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="email" value="<?php echo $row_current['emp_email'] ?>" class="form-control" id="empEmail" name="empEmail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại: </label>
            <div class="col-sm-10">
                <input type="tel" value="<?php echo $row_current['emp_mobile'] ?>" class="form-control" id="empMobile" name="empMobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="officeName" class="col-sm-2 col-form-label">Tên cơ quan: </label>
            <div class="col-sm-10">
                <select name="officeName" id="officeName" class="form-control">
                    <!-- Lấy dữ liệu từ bảng Office -->
                    <?php
                        $sql = 'select * from db_offices';
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            echo '<option value="'.$row_current['office_id'].'">'.$row_current['office_name'].'</option>';
                            while ($row = mysqli_fetch_assoc($result)) {
                                if($row['office_id'] == $row_current['office_id']) {
                                    echo null;
                                } else {
                                    echo '<option value="'.$row['office_id'].'">'.$row['office_name'].'</option>';
                                }
                            }
                        }
                    ?>
                </select>
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
        $empName = $_POST['empName'];
        $empPosition = $_POST['empPosition'];
        $empEmail = $_POST['empEmail'];
        $empMobile = $_POST['empMobile'];
        $officeID = $_POST['officeName'];

        echo $id;
        echo $empName."<br>";
        echo $empPosition."<br>";
        echo $empEmail."<br>";
        echo $empMobile."<br>";
        echo $officeID."<br>";

        $sql_update = "update db_employyess set emp_name = '$empName', emp_position = '$empPosition', emp_email = '$empEmail', emp_mobile = '$empMobile', office_id = '$officeID' where emp_id = '$id'";
        $result_update = mysqli_query($con, $sql_update);

        if($result_update) {
            header("Location: ./index.php");
        } else {
            echo 'Lỗi.';
        }
    }

    mysqli_close($con);
?>

<?php
include '../partials-front/footer.php';
?>