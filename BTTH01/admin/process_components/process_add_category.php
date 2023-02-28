<?php
    include '../../connect_db.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentloai = $_POST['txt_tentloai'];
        $sql = "INSERT INTO theloai (ten_tloai) Value ('$tentloai')";
        $result = mysqli_query($con,$sql);
        header('Location: ../category.php');
        exit();
    }
?>