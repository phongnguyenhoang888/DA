<?php
session_start();
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM product WHERE id = $id";
    
    if ($con->query($sql)) {
        echo "Sản phẩm đã được xóa thành công.";
        header("Location: my-product.php"); // Chuyển hướng về trang danh sách sản phẩm
        exit();
    } else {
        echo "Có lỗi xảy ra khi xóa sản phẩm.";
    }
} else {
    echo "Không tìm thấy sản phẩm.";
}
?>
