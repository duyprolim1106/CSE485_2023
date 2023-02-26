<?php
    include '../connect_db.php';
    $id_ngdung = $_GET['idngdung'];
    $sql  = "DELETE FROM users WHERE id_ngdung = $id_ngdung";
    $result = mysqli_query($con, $sql);
    header('Location: users.php');
    exit();
?>