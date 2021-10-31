<?php
    include 'header.php';
   
?>
<main class="container mt-5">
    <h2 class="mb-3 text-center">Thông tin chi tiết </h2>
    <a href="index.php" class="btn btn-success mb-3"><i class="fas fa-undo-alt"></i> Quay lại</a>
    <table class="table table-dark mt-3">
        <thead>
            <tr>
            <th scope="col">Mã </th>
            <th scope="col">Tên thuốc</th>
            <th scope="col">Loại thuốc</th>
            <th scope="col">Mã vạch</th>
            <th scope="col">Liều lượng</th>
            <th scope="col">Mã thuốc</th>
            <th scope="col">Giá nhập</th>
            <th scope="col">Giá bán</th>
            <th scope="col">Trạng thái </th>
            <th scope="col">Công ty</th>
            <th scope="col">Ngày sản xuất</th>
            <th scope="col">Ngày hết hạn</th>
            <th scope="col">Nơi sản xuất</th>
            <th scope="col">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include 'config.php';
                $id = $_GET['id'];
                $sql = "SELECT * FROM drugs WHERE id = '$id'";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['id'].'</th>';// dấu '. .' là để nối chuỗi 
                        echo '<td>'.$row['name'].'</td>';
                        echo '<td>'.$row['type'].'</td>';
                        echo '<td>'.$row['barcode'].'</td>';
                        echo '<td>'.$row['dose'].'</td>';
                        echo '<td>'.$row['code'].'</td>';
                        echo '<td>'.$row['cost_price'].'</td>';
                        echo '<td>'.$row['selling_price'].'</td>';
                        echo '<td>'.$row['expiry'].'</td>';
                        echo '<td>'.$row['company_name'].'</td>';
                        echo '<td>'.$row['product_date'].'</td>';
                        echo '<td>'.$row['expiration_date'].'</td>';
                        echo '<td>'.$row['place'].'</td>';
                        echo '<td>'.$row['quanlity'].'</td>';
                        echo '</tr>';
                    }
                }
            ?>
        </tbody>
    </table>

</main>