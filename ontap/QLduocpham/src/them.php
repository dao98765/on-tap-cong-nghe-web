<?php
include 'header.php';
include 'config.php';
?>
<main class= "container mt-5 ">
    <h2 class="mb-3 text-center">Thêm thông tin </h2>
    <a href="index.php" class="btn btn-success mb-3"><i class="fas fa-undo-alt"></i> Quay lại</a>
    <form action="process_them.php" method="post">
        
        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">TÊN thuốc: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="type" class="col-sm-2 col-form-label">Loại thuốc: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Type">
            </div>
        </div>
        
        <div class="mb-3 row">
            <label for="barcode" class="col-sm-2 col-form-label">Mã vạch: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Barcode">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dose" class="col-sm-2 col-form-label">Liều lượng: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Dose">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="code" class="col-sm-2 col-form-label">Mã thuốc: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Code">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="cost_price" class="col-sm-2 col-form-label">Giá nhập: </label>
            <div class="col-sm-5">
                <input type="text" class="form-control"  name="Cost_price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="selling_price" class="col-sm-2 col-form-label">Giá bán: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Selling_price">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expiry" class="col-sm-2 col-form-label">Trạng thái hạn sử dụng:</label>
            <div class="col-sm-5">
                <input type="text"  class="form-control"  name="Expiry">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="company_name" class="col-sm-2 col-form-label">Công ty: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Company_name">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="production_date" class="col-sm-2 col-form-label">Ngày sản xuất: </label>
            <div class="col-sm-5">
                <input type="text" class="form-control" name="Production_date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="expiration_date" class="col-sm-2 col-form-label">Ngày hết hạn: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Expiration_date">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="place" class="col-sm-2 col-form-label">Nơi sản xuất: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Place">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="quantity" class="col-sm-2 col-form-label">Số lượng: </label>
            <div class="col-sm-5">
                <input type="text"  class="form-control" name="Quantity">
            </div>
        </div>
       
        <div class="form-group row">
            <label for="btn" class="col-sm-2 col-form-label"></label>
            <div class="col-sm-10">
                <button type="submit" class="btn btn-success">Lưu lại</button>
            </div>
        </div>
    </form>
</main>