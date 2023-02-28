<?php
    include '../../connect_db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $mabviet = $_POST['ma_bviet'];
        $tenTieuDe = $_POST['txt_tieude'];
        $tenBaiHat = $_POST['txt_tenbhat'];
        $maTheLoai = $_POST['txt_theloai'];
        $tomTat = $_POST['tomtat'];
        $noiDung = $_POST['noidung'];
        $maTacGia = $_POST['txt_matacgia'];
        $ngayViet = $_POST['date-input'];
        $hinhAnh = $_POST['file-upload'];

        $link = './images/songs/' . $_FILES['file-upload']['name'];
        $temp = $_FILES['file-upload']['tmp_name'];
        $path = '../../images/songs/' . $_FILES['file-upload']['name'];
        $moved = move_uploaded_file($temp, $path);
        


        $sql = "UPDATE `baiviet` SET `tieude` = '$tenTieuDe', `ten_bhat` = '$tenBaiHat', `ma_tloai` = '$maTheLoai' , `tomtat` = '$tomTat',
                     `noidung` = '$noiDung' , `ma_tgia` = '$maTacGia' , `ngayviet` = '$ngayViet' , `hinhanh` = '$link$hinhAnh'
                WHERE `ma_bviet` = '$mabviet' ";

        $result = mysqli_query($con,$sql);
        header('Location:../article.php');
        exit();
    }


?>