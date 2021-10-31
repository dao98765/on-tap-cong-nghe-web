<?php
include 'header.php';
include 'config.php';
?>
<main class="container">
    <h2>Thêm thông tin người hiến </h2>
    <form action="process_them.php" method="post"><!---->
        <div class="form-group row">
            <label for="bd_name" class="col-sm-2 col-form-label">Họ tên</label>
            <div class="col-sm-10">
                <input type="bd_name" class="form-control" id="bd_name" name="bd_namee" >
            </div>
        </div>
        <div class="form-group row">
            <label for="bd_sex" class="col-sm-2 col-form-label">Giới tính</label>
            <div class="col-sm-10">
                <input type="bd_sex" class="form-control" id="bd_sex" name="bd_sexx" >
            </div>
        </div>
        <div class="form-group row">
            <label for="bd_age" class="col-sm-2 col-form-label">Tuổi </label>
            <div class="col-sm-10">
                <input type="bd_age" class="form-control" id="bd_age" name="bd_agee" >
            </div>
        </div>
        <div class="form-group row">
            <label for="bd_group" class="col-sm-2 col-form-label">Nhóm máu</label>
            <div class="col-sm-10">
               <input type="group" class="form-control" id="bd_group" name="bd_groupp" >
            </div>
        </div>
       
        <div class="form-group row">
            <label for="bd_phno" class="col-sm-2 col-form-label">Số điện thoại</label>
            <div class="col-sm-10">
               <input type="bd_phno" class="form-control" id="bd_phno" name="bd_phnoo" >
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