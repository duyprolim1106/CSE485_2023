<?php
    include '../../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mabviet = $_POST['ma_bviet'];
        $tenTieuDe = $_POST['txt_tieude'];
        $tenBaiHat = $_POST['txt_tenbhat'];
        $maTheLoai = $_POST['txt_theloai'];
        $tomTat = $_POST['tomtat'];
        $noiDung = $_POST['noidung'];
        $maTacGia = $_POST['txt_tacgia'];
        $ngayViet = $_POST['ngayviet'];
        $hinhAnh = $_POST['hinhanh'];

        $sql = "UPDATE baiviet SET tieude = '$tenTieuDe', ten_bhat = '$tenBaiHat', ma_tloai = '$maTheLoai' , tomtat = '$tomTat',
        noidung = '$noiDung' , ma_tgia = '$maTacGia' , ngayviet = '$ngayViet' , hinhanh = '$hinhAnh'
   WHERE ma_bviet = '$mabviet'";
        $result = mysqli_query($con,$sql);
        header('Location:../article.php');
        exit();
    }


?>