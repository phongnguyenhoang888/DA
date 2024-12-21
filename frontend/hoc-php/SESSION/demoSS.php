<?php
session_start(); // Khởi tạo session
$_SESSION['username'] = 'nguyenvana'; // Thiết lập giá trị cho session
$_SESSION['email'] = 'nguyenvana@example.com';

//session_start(); // Tiếp tục session
echo 'Tên đăng nhập: ' . $_SESSION['username']; // In giá trị từ session


?>
<!-- 
        Xóa session
        // xoas session name:
        unset($_SESSION["name]);
        
        // xoa het session :\
        session_destroy();
-->
