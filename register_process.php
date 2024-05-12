
<?php
session_start();

// Xử lý thông tin đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Lưu thông tin đăng ký vào cơ sở dữ liệu
    // Code lưu thông tin đăng ký vào cơ sở dữ liệu ở đây
    // Sau khi lưu thành công, bạn có thể chuyển hướng người dùng đến trang chủ hoặc trang đăng nhập.
    header('Location: index.php');
}
?>
