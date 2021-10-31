<?php
include './header.php';
?>
<main class= "container mt-5">
    
    <!--Hiển thị dữ liệu danh bạ cá nhân-->
    <!--Kết nối tới Server, truy vấn dữ liệu select từ bảng db_employyess-->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Mã người hiến</th>
          <th scope="col">Họ tên </th>
          <th scope="col">Ngày hiến</th>
          <th scope="col">Chi tiết</th>
        
        </tr>
      </thead>
      <tbody>
        <!--Thay đổi theo dữ liệu trong CSDL-->
        <?php
          include 'config.php';
          $sql = 'SELECT bd_id, bd_name, bd_reg_date FROM blood_donor';
          $result = mysqli_query($conn, $sql);
          if(mysqli_num_rows($result)>0)
          {
                while($row= mysqli_fetch_assoc($result)){
                    echo '<tr>';
                    echo '<th scope="row">'.$row['bd_id'].'</th>';// dấu '. .' là để nối chuỗi 
                    echo '<td>'.$row['bd_name'].'</td>';
                    echo '<td>'.$row['bd_reg_date'].'</td>';
                    echo '<td><a href="chitiet.php?id='.$row['bd_id'].'">Chitiet</a></td>';
                    echo '</tr>';
                }
            }
        ?>
      </tbody>
</table>
</main>
