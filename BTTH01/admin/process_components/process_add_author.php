<?php
    include '../../connect_db.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $tentgia = $_POST['txtCatName'];
        $sql = "INSERT INTO tacgia (ten_tgia) Value ('$tentgia')";
        $result = mysqli_query($con,$sql);
        header('Location: ../author.php');
        exit();
    }
?>