<?php
include '../partials-front/header.php';
include '../config.php';
?>

<main class="container mt-5">
    <h2 class="mb-3">Nhập thông tin nhân viên:</h2>
    <form action="./process_add_employee.php" method="post">
        <div class="mb-3 row">
            <label for="empName" class="col-sm-2 col-form-label">Tên nhân viên: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empName" name="empName">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empPosition" class="col-sm-2 col-form-label">Chức vụ: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="empPosition" name="empPosition">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empEmail" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="empEmail" name="empEmail">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empMobile" class="col-sm-2 col-form-label">Số điện thoại: </label>
            <div class="col-sm-10">
                <input type="tel" class="form-control" id="empMobile" name="empMobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="empOfficeName" class="col-sm-2 col-form-label">Tên cơ quan: </label>
            <div class="col-sm-10">
                <select name="officeName" id="officeName" class="form-control">
                    <!-- Lấy dữ liệu từ bảng Office -->
                    <?php
                    $sql = 'select * from db_offices';
                    $result = mysqli_query($con, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<option value="' . $row['office_id'] . '">' . $row['office_name'] . '</option>';
                        }
                    }
                    ?>
                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <button type="submit" class="btn btn-success">Thêm</button>
        </div>
    </form>
</main>

<?php
include '../partials-front/footer.php';
?>