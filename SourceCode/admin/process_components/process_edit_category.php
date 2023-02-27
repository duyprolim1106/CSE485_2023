<?php
    include '../../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] = 'POST') {
        $matloai = $_POST['txt_matloai'];
        $tentloai = $_POST['txt_tentloai'];
        $sql = "Update theloai SET ten_tloai = '$tentloai' where ma_tloai = $matloai";
        $result = mysqli_query($con, $sql);
        header('Location: ../category.php');
        exit();
    }
?>