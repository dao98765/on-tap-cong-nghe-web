<?php
include 'header.php';
?>
<main class= "container mt-5">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Mã người hiến</th>
            <th scope="col">Tên </th>
            <th scope="col">Họ đệm </th>
            <th scope="col">Ngày lập sổ</th>
            <th scope="col">Chi tiết</th>
            
            </tr>
        </thead>
        <tbody>
            <!--Thay đổi theo dữ liệu trong CSDL-->
            <?php
                include 'config.php';
                $sql = 'SELECT patientid, firstname, lastname, created_on  FROM patient';
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)>0)
                {
                    while($row= mysqli_fetch_assoc($result)){
                        echo '<tr>';
                        echo '<th scope="row">'.$row['patientid'].'</th>';// dấu '. .' là để nối chuỗi 
                        echo '<td>'.$row['firstname'].'</td>';
                        echo '<td>'.$row['lastname'].'</td>';
                        echo '<td>'.$row['created_on'].'</td>';
                        echo '<td><a href="chitiet.php?id='.$row['patientid'].'">Chitiet</a></td>';
                        echo '</tr>';
                    }
                }
            ?>
      </tbody>

    </table>
</main>