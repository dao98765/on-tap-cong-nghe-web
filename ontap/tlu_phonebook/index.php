<?php
    include './partials-front/header.php';
?>

<div class="container mt-5">
    <h2 class="mb-3">Thông tin cán bộ/giảng viên</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Mã nhân viên</th>
                <th scope="col">Họ và tên</th>
                <th scope="col">Chức vụ</th>
                <th scope="col">Email</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Phòng ban</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Tạo kết nối SQL
                include './config.php';

                // Thực hiện truy vấn
                $sql = 'select e.emp_id, e.emp_name, e.emp_position, e.emp_email, e.emp_mobile, o.office_name from db_employyess e, db_offices o where e.office_id = o.office_id';
                $result = mysqli_query($con, $sql);

                // Xử lí kết quả
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>',
                            '<th scope="row">'.$row['emp_id'].'</th>',
                            '<td>'.$row['emp_name'].'</td>',
                            '<td>'.$row['emp_position'].'</td>',
                            '<td>'.$row['emp_email'].'</td>',
                            '<td>'.$row['emp_mobile'].'</td>',
                            '<td>'.$row['office_name'].'</td>',
                        '</tr>';
                    }
                }

            ?>
        </tbody>
    </table>

    <a href="./admin/login.php" class="btn btn-success">Đăng nhập</a>
    <a href="./admin/register.php" class="btn btn-success mx-3">Đăng ký</a>
</div>

<?php
    include './partials-front/footer.php';
?>