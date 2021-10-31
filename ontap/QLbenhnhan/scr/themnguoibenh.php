<?php
include 'header.php';
include 'config.php';
?>
<main class="container">
    <h2>Thêm thông tin người hiến </h2>
    <form action="process_them.php" method="post"><!---->
       <div class="mb-3 row">
            <label for="patientid" class="col-sm-2 col-form-label">Mã bệnh nhân: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="Patientid">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="firstname" class="col-sm-2 col-form-label">TÊN: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="Firstname">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="lastname" class="col-sm-2 col-form-label">Họ đệm: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control"  name="Lastname">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="dateofbirth" class="col-sm-2 col-form-label">Ngày sinh: </label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" name="Dateofbirth">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gender" class="col-sm-2 col-form-label">Giới tính: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="Gender">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="mobile" class="col-sm-2 col-form-label">Số điện thoại: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="Mobile">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="Email">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="height" class="col-sm-2 col-form-label">Chiều cao: </label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="Height">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="weight" class="col-sm-2 col-form-label">Cân nặng </label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  name="Weight">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="blood_type" class="col-sm-2 col-form-label">Nhóm máu: </label>
            <div class="col-sm-10">
                <input type="text"class="form-control" name="Blood_type">
            </div>
        </div>
        
        <div class="mb-3 row">
            <button type="submit" class="btn btn-success">Thêm</button>
        </div>
    </form>
</main>
<?php
include 'footer.php';
?>