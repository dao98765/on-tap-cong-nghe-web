<?php
include 'header.php';
?>
<main>
  <!--Hiển thị danh bạ cá nhan-->
  <!--Kết nối tới Server, truy vấn dữ liệu(select)-->
  <!--Quy trình 4 bước-->
<table class="table">
    <thead>
      <tr>
        <th scope="col">Mã nhân viên</th>
        <th scope="col">Họ và tên</th>
        <th scope="col">Chức vụ</th>
        <th scope="col">Email</th>
        <th scope="col">Số điện thoại</th>
        <th scope="col">Cơ quan</th>
      </tr>
    </thead>
    <tbody>
      <!--Đoạn này thay đổi theo dữ liệu trong CSDL-->
      <?php
        //Qtrinhf 4 bước
        //B1: Đã tạo sẵn, gọi lại:(Kết nối cơ sở dl)
        include 'config.php';
        //B2.Thực hiện truy vấn
        $sql = " SELECT e.emp_id, e.emp_name, e.emp_position, e.emp_email, e.emp_mobile, o.office_name FROM db_employyess e, db_offices o
        Where e.office_id= o.office_id"; //$sql:khai báo biến để lưu câu lệnh
        $result = mysqli_query($conn, $sql); //lưu kết quả về vào biển result
        //B3: phân tích và xử lí kết quả (nếu kq trả về 0 => truy vấn thất bại, khác 0 => truy vấn tcong)
        if (mysqli_num_rows($result) > 0) 
        {
          while ($row=mysqli_fetch_assoc($result))
          {
            echo '<tr>';
            echo '<th scope="row">'.$row['emp_id'].'</th>'; //dấu.' là dấu để nối chuỗi 
            echo '<td>'.$row['emp_name'].'</td>';
            echo '<td>'.$row['emp_position'].'</td>';
            echo '<td>'.$row['emp_email'].'</td>';
            echo '<td>'.$row['emp_mobile'].'</td>';
            echo '<td>'.$row['office_name'].'</td>';
            echo '<tr>';
          }
        }
      ?>
    </tbody>
  </table>
</main>
<?php
include 'footer.php';
?>