<?php 
    include '../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mabviet = $_POST['txt_mabviet'];
        $tieude = $_POST['txt_tieude'];
        $tenbaihat = $_POST['txt_tenbhat'];
        $tomtat = $_POST['txt_tomtat'];
        $noidung = $_POST['txt_noidung'];
        $matgia = $_POST['ma_tgia'];

        $sql = "UPDATE baiviet SET tieude = '$tieude', ten_bhat = '$tenbaihat', tomtat = '$tomtat', noidung = '$noidung', ma_tgia = $matgia WHERE ma_bviet = '$mabviet'";
        $result = mysqli_query($con,$sql);
        header('Location: article.php');
        exit();
    }
?>