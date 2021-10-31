<?php
//b1: kết nối tới cơ sở dữ liệu 
   define('HOST','localhost');
   define('USER','root');
   const PASS = '';
   const DB ='qlduocpham';//tên csdl
   $conn = mysqli_connect(HOST, USER, PASS, DB);
   if(!$conn){
       die('không thể kết nối');
   }
?>