<?php
session_start();
include 'connect.php'; // Kết nối cơ sở dữ liệu

$id_ijax = $_POST["xx"];

//echo $id_ijax;

$sql = "SELECT * FROM product WHERE id = $id_ijax";
  
$result = $con->query($sql);

if($result->num_rows > 0){
    $product = $result->fetch_assoc();
    $cart_value = [
        'id' => $product['id'],
        'title' => $product['title'],
        'price' => $product['price'],
        'image' => $product['image'],
        'qty' => 1 // Mặc định số lượng là 1
    ];

    $x = 1;
    foreach ($_SESSION['CART'] as &$value) {
        if ($value['id'] == $product['id']) {
            // Cập nhật số lượng nếu sản phẩm đã có
            $value['qty'] += 1;
            $x = 2;
            break;
        }
    }

    // Nếu sản phẩm chưa có trong giỏ hàng, thêm mới vào giỏ hàng
    if ($x == 1) {
        $_SESSION['CART'][] = $cart_value;
    }

    // Trả về thông tin giỏ hàng (hoặc thông báo thành công)
    echo json_encode($_SESSION['CART']);
}
?>
