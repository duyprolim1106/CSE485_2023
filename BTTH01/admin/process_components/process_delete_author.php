<?php
    include '../../connect_db.php';
    $ma_tgia = $_GET['matgia'];
    $sql  = "DELETE FROM tacgia WHERE ma_tgia = $ma_tgia";
    $result = mysqli_query($con, $sql);
    header('Location: ../author.php');
    exit();
?>