<?php session_start(); ?>
<!-- Bắt đầu phiên làm việc -->

<?php
// Nếu nhấn nút 'Lưu Session'
if (isset($_POST['save-session'])) {
    // Lưu tên người dùng vào session
    $_SESSION['name'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trang Lưu Session</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <h1>
            <?php
            // Hiển thị thông tin nếu session 'name' đã được lưu
            if (isset($_SESSION['name'])) {
                echo 'Tên Đăng Nhập Là: ' . $_SESSION['name'];
            }
            ?>
        </h1>

        <!-- Form nhập tên người dùng để lưu vào session -->
        <form method="POST" action="">
            <input type="text" name="username" value="" placeholder="Nhập tên" /><br/>
            <input type="submit" name="save-session" value="Lưu Session" />
        </form>
    </body>
</html>



