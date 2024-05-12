<?php
session_start();

// Kiểm tra thông tin đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra trong cơ sở dữ liệu
    // Code kiểm tra thông tin đăng nhập ở đây

    // Ví dụ đơn giản: Kiểm tra mật khẩu là 123456
    if ($password == '123456') {
        $_SESSION['username'] = $username;
        header('Location: index.html'); // Chuyển hướng về trang chính sau khi đăng nhập thành công
    } else {
        echo "Login failed. Please try again.";
    }
}
?>