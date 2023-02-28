<?php
    include '../../connect_db.php';
    
        $mabviet = $_GET['mabviet'];
        $sql = "DELETE FROM `baiviet` WHERE `ma_bviet` = '$mabviet';";
        $result = mysqli_query($con,$sql);
        header('Location: ../article.php');
?>