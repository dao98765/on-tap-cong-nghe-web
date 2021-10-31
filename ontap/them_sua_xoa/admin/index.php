<?php
include '../header.php';
?>
<main>
    <a href="themnhanvien.php" class= "btn btn-dark text-warning ">Thêm nhân viên </a>
    <!--Hiển thị dữ liệu danh bạ cá nhân-->
    <!--Kết nối tới Server, truy vấn dữ liệu select từ bảng db_employyess-->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã nhân viên</th>
      <th scope="col">Họ tên </th>
      <th scope="col">Chức vụ</th>
      <th scope="col">Email</th>
      <th scope="col">Số điện thoại</th>
      <th scope="col">Cơ quan</th>
      <th scope="col">Sửa nhân viên</th>
      <th scope="col">Xóa nhân viên</th>
    </tr>
  </thead>
  <tbody>
    <!--Thay đổi theo dữ liệu trong CSDL-->
    <?php
        //Quy trình 4 bước:
        //B1 Kết nối tới CSDL, làm r , gọi lại
        include '../config.php';
        //B2 thực hiện truy vấn
        $sql = "SELECT e.emp_id, e.emp_name, e.emp_position, e.emp_email, e.emp_mobile, o.office_name 
        FROM db_employyess e, db_offices o
        WHERE e.office_id = o.office_id";
        $result = mysqli_query($conn, $sql);//lưu kết quả vào biến result
        //b3 phân tích và xử lí kết quả 
        if(mysqli_num_rows($result)>0){
            while($row= mysqli_fetch_assoc($result)){ // lấy ra mảng của 1 bản ghi 
                echo '<tr>';
                echo '<th scope="row">'.$row['emp_id'].'</th>';// dấu '. .' là để nối chuỗi 
                echo '<td>'.$row['emp_name'].'</td>';
                echo '<td>'.$row['emp_position'].'</td>';
                echo '<td>'.$row['emp_email'].'</td>';
                echo '<td>'.$row['emp_mobile'].'</td>';
                echo '<td>'.$row['office_name'].'</td>';
                echo '<td><a href="suanhanvien.php?id='.$row['emp_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                echo '<td><a href="xoanhanvien.php?id='.$row['emp_id'].'"><i class="fas fa-user-times"></i></a></td>';
                echo '</tr>';
                            
            }
        }

    ?>
  </tbody>
</table>
</main>
