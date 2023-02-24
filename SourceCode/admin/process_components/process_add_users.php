<?php
    include '../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $taikhoan = $_POST['txt_taikhoan'];
        $matkhau = $_POST['txt_matkhau'];
        $quyenhan = $_POST['txt_quyenhan'];
        $sql = "INSERT INTO users (tai_khoan, mat_khau, quyen_han) Value ('$taikhoan', '$matkhau', '$quyenhan')";
        $result = mysqli_query($con,$sql);
        header('Location: users.php');
        exit();
    }
?>