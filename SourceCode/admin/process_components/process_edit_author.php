<?php
    include '../../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $matgia = $_POST['txt_matgia'];
        $tentgia = $_POST['txt_tentgia'];
        $sql = "UPDATE tacgia SET ten_tgia = '$tentgia' WHERE ma_tgia = '$matgia'";
        $result = mysqli_query($con,$sql);
        header('Location: ../author.php');
        exit();
    }
?>