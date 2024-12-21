<?php
// Khởi động session
session_start();

$errors = [];
$email = $pass = $city = "";

// Kiểm tra xem người dùng đã submit form chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kiểm tra input email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email không được để trống.";
    } else {
        $email = $_POST["email"];
    }

    // Kiểm tra input pass
    if (empty($_POST["pass"])) {
        $errors['pass'] = "Password không được để trống.";
    } else {
        $pass = $_POST["pass"];
    }

    // Kiểm tra input city
    if (empty($_POST["city"])) {
        $errors['city'] = "City không được để trống.";
    } else {
        $city = $_POST["city"];
    }

    // Nếu không có lỗi, lưu vào session
    if (empty($errors)) {
        $demo = [
            'email' => $email,
            'pass' => $pass,
            'city' => $city,
        ];

        // Lưu vào session thành một mảng hai chiều
        $_SESSION['form'][] = $demo;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Form nhập thông tin</h1>
    <form action="form.php" method="POST">
        <!-- Input email -->
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
        <span style="color:red;"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></span>
        <br><br>

        <!-- Input pass -->
        <label for="pass">Password:</label>
        <input type="password" name="pass" id="pass" value="<?php echo htmlspecialchars($pass); ?>">
        <span style="color:red;"><?php echo isset($errors['pass']) ? $errors['pass'] : ''; ?></span>
        <br><br>

        <!-- Input city -->
        <label for="city">City:</label>
        <input type="text" name="city" id="city" value="<?php echo htmlspecialchars($city); ?>">
        <span style="color:red;"><?php echo isset($errors['city']) ? $errors['city'] : ''; ?></span>
        <br><br>

        <!-- Nút submit -->
        <button type="submit">Submit</button>
    </form>

    <br>
    <!-- Link để xem dữ liệu trong session -->
    <a href="table.php">Xem dữ liệu đã nhập</a>
</body>
</html>
