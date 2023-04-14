<?php
session_start();
session_destroy(); // hủy bỏ tất cả các session

// Chuyển hướng người dùng về trang đăng nhập
header('Location: login.php');
exit();
?>
