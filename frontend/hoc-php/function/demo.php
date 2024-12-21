

<?php
function kiem_tra_so_chan($so) {
    // Kiểm tra xem số đó có chia hết cho 2 hay không
    if ($so % 2 == 0) {
        return true; // Số chẵn
    } else {
        return false; // Số lẻ
    }
}

// Ví dụ sử dụng hàm
$so = 4;

if (kiem_tra_so_chan($so)) {
    echo "$so là số chẵn.";
} else {
    echo "$so là số lẻ.";
}
?>
