<?php
// Khởi động session
session_start();
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bảng hiển thị thông tin</title>
</head>
<body>
    <h1>Danh sách thông tin đã nhập</h1>
   
    <!-- Kiểm tra dữ liệu trong session -->
    <?php if (isset($_SESSION['form']) && !empty($_SESSION['form'])): ?>
        <table border="1">
            <tr>
                <th>Email</th>
                <th>Password</th>
                <th>City</th>
            </tr>
            <!-- Duyệt qua từng phần tử của mảng trong session -->
            <?php 
            
            foreach ($_SESSION['form'] as $value): ?>
                <tr>
                    <td><?php echo $value['email']; ?></td>
                    <td><?php echo $value['pass']; ?></td>
                    <td><?php echo $value['city']; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Không có dữ liệu nào được lưu trữ.</p>
    <?php endif; ?>

    <!-- Link để quay về form -->
    <br>
    <a href="">Quay lại form nhập liệu</a>
</body>
</html>
