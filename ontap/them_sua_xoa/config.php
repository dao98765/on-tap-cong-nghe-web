<?php
//b1: kết nối tới cơ sở dữ liệu 
   define('HOST','localhost');
   define('USER','root');
   const PASS = '';
   const DB ='tlu_phone_book';//tên csdl
   $conn = mysqli_connect(HOST, USER, PASS, DB);
   if(!$conn){
       die('không thể kết nối');
   }
?>