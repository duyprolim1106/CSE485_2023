<?php
    include '../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $idngdung = $_POST['txt_idngdung'];
        $taikhoan = $_POST['txt_taikhoan'];
        $matkhau = $_POST['txt_matkhau'];
        $quyenhan = $_POST['txt_quyenhan'];
        $sql = "UPDATE users SET mat_khau = '$matkhau', quyen_han = '$quyenhan' WHERE id_ngdung = '$idngdung'";
        $result = mysqli_query($con,$sql);
        header('Location: users.php');
        exit();
    }
?>