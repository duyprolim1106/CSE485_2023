<?php
    include 'header.php';
?>
    <main class="container mt-5">
    <?php 
        $tieude = $_GET['tieude'];
        $sql = "SELECT *
        FROM baiviet
        INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
        INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai
        WHERE tieude = '$tieude'
        ";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row mb-5">
        <div class="col-sm-4">
            <img src="<?php echo $row['hinhanh'] ?>" class="img-fluid" alt="...">
        </div>
        <div class="col-sm-8">
            <h5 class="card-title mb-2">
                <a href="" class="text-decoration-none"><?php echo $row['tieude'] ?></a>
            </h5>
            <p class="card-text"><span class=" fw-bold">Bài hát: </span><?php echo $row['ten_bhat'] ?></p>
            <p class="card-text"><span class=" fw-bold">Thể loại: </span><?php echo $row['ten_tloai'] ?></p>
            <p class="card-text"><span class=" fw-bold">Tóm tắt: </span><?php echo $row['tomtat'] ?></p>
            <p class="card-text"><span class=" fw-bold">Nội dung: </span><?php echo $row['noidung'] ?></p>
            <p class="card-text"><span class=" fw-bold">Tác giả: </span><?php echo $row['ten_tgia'] ?></p>

        </div>          
    </div>
    </main>
<?php
    include 'footer.php';
?>