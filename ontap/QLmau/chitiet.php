<?php
include './header.php';
?>
<main class= "container mt-5">
    <a href="themnguoihien.php" class= "btn btn-dark text-warning ">Thêm người hiến  </a>
    <!--Hiển thị dữ liệu danh bạ cá nhân-->
    <!--Kết nối tới Server, truy vấn dữ liệu select từ bảng db_employyess-->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mã người hiến</th>
          <th scope="col">Họ tên </th>
          <th scope="col">Giới tính</th>
          <th scope="col">Tuổi</th>
          <th scope="col">nhóm máu</th>
          <th scope="col">Ngày hiến</th>
          <th scope="col">Số điện thoại</th>
          <th scope="col">Sửa</th>
          <th scope="col">Xóa</th>
        
        </tr>
      </thead>
  <tbody>
    <!--Thay đổi theo dữ liệu trong CSDL-->
    <?php
       include 'config.php';
       $sql = 'SELECT * FROM blood_donor';
       $result = mysqli_query($conn, $sql);
       if(mysqli_num_rows($result)>0)
       {
            while($row= mysqli_fetch_assoc($result)){
                echo '<tr>';
                echo '<th scope="row">'.$row['bd_id'].'</th>';// dấu '. .' là để nối chuỗi 
                echo '<td>'.$row['bd_name'].'</td>';
                echo '<td>'.$row['bd_sex'].'</td>';
                echo '<td>'.$row['bd_age'].'</td>';
                echo '<td>'.$row['bd_group'].'</td>';
                echo '<td>'.$row['bd_reg_date'].'</td>';
                echo '<td>'.$row['bd_phno'].'</td>';
                echo '<td><a href="sua.php?id='.$row['bd_id'].'"><i class="fas fa-user-edit"></i></a></td>';
                echo '<td><a href="xoa.php?id='.$row['bd_id'].'"><i class="fas fa-user-times"></i></a></td>';
                echo '</tr>';
            }
        }
    ?>
  </tbody>
</table>
</main>
