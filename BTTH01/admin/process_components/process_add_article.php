<?php
include '../../connect_db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        $tieude = $_POST['txt_tieude'];
        $baihat = $_POST['txt_baihat'];
        $tentloai = $_POST['txt_theloai'];
        $tomtat = $_POST['txt_tomtat'];
        $noidung = $_POST['txt_noidung'];
        $tacgia = $_POST['txt_tacgia'];
        $hinhAnh = $_POST['file-upload'];

        $link = './images/songs/' . $_FILES['file-upload']['name'];
        $temp = $_FILES['file-upload']['tmp_name'];
        $path = '../../images/songs/' . $_FILES['file-upload']['name'];
        $moved = move_uploaded_file($temp, $path);

        $sql = "INSERT INTO baiviet(tieude, ten_bhat, ma_tloai, tomtat, noidung, ma_tgia, ngayviet, hinhanh) 
                VALUES ('$tieude','$baihat','$tentloai','$tomtat','$noidung','$tacgia',CURDATE(),'$link$hinhAnh')";
        $result = mysqli_query($con,$sql);
        header('Location:../article.php');
        
        
    }
?>