<?php
include 'header.php';
?>
<div class=" container text-center mt-5">
    <h2 class="text-center">Thông tin Sinh viên/Giảng viên</h2>
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
            //Tạo kết nối
            include 'config.php';
            //thực hiện truy vân 
            $sql = 'SELECT e.emp_id, e.emp_name, e.emp_position, e.emp_'
        
        ?>
   
  </tbody>
</table>
</div>
