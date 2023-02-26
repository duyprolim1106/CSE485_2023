<?php
    include '../../connect_db.php';

    $matloai = $_GET['matloai'];
    $sql  = "DELETE FROM theloai WHERE ma_tloai = $matloai";
    $result = mysqli_query($con, $sql);
    header('Location: ../category.php');
    exit();
?>