<?php
 session_start();
session_destroy();
header("Location: index.html"); // ลิ้งไปหน้าที่ต้องการ
?>
