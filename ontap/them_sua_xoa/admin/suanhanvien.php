<?php
include '../header.php';
include '../config.php';
$id = $_GET['id'];//get lấy id từ file index.
$sql ="SELECT *,office_name FROM db_employyess e, db_offices o WHERE e.office_id = o.office_id AND emp_id = '$id'";
$result_current = mysqli_query($conn, $sql);//thực thi câu lệch truy vấn ở trên
$row_current = mysqli_fetch_assoc($result_current);//trả về 1 mảng kết hợp key và values
?>

<main class="container mt-5">
    <h2>Nhập thông tin nhân viên </h2>
    <form action="process_suanhanvien.php?id=<?php echo $_GET['id'] ?>" method="post">
        <div class="form-group row">
            <label for="empName" class="col-sm-2 col-form-label">Mã nhân viên</label>
            <div class="col-sm-10">
                <input type="text" disabled value="<?php echo $row_current['emp_id']?>" class="form-control" id="empName" name="empName" >
            </div>
        </div>
        <div class="form-group row">
            <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['emp_name']?>" class="form-control" id="empName" name="empName" >
            </div>
        </div>
        <div class="form-group row">
            <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ</label>
            <div class="col-sm-10">
                <input type="text" value="<?php echo $row_current['emp_position']?>"class="form-control" id="empPosition" name="empPosition" >
            </div>
        </div>
        <div class="form-group row">
            <label for="empEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" value="<?php echo $row_current['emp_email']?>" class="form-control" id="empEmail" name="empEmail" >
            </div>
        </div>
        <div class="form-group row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại </label>
            <div class="col-sm-10">
                <input type="tel" value="<?php echo $row_current['emp_mobile']?>" class="form-control" id="empMobile" name="empMobile" >
            </div>
        </div>
        <div class="mb-3 row">
            <label for="officeName" class="col-sm-2 col-form-label">Tên cơ quan: </label>
            <div class="col-sm-10">
                <select name="offices" id="offices" class="form-control">
                    <!--Lấy dl từ bảng ofice-->
                    <?php
                        $sql = "SELECT * FROM db_offices";
                        $result = mysqli_query($conn, $sql);
                        if(mysqli_num_rows($result)>0){
                            echo '<option value="'.$row_current['office_id'].'">'.$row_current['office_name'].'</option>';
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['office_id'] == $row_current['office_id']){
                                    echo null;
                                }else{
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
?>
<?php
include '../footer.php';
?>