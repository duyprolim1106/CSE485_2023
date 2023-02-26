<?php
include 'components/header_admin.php';
include '../connect_db.php';
?>
<main class="container mt-5 mb-5">
    <?php
    $matgia = $_GET['matgia'];
    $sql = "SELECT * 
        FROM tacgia
        Where ma_tgia = '$matgia'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="row">
        <div class="col-sm">
            <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tác giả</h3>
            <form action="process_components/process_edit_author.php" method="post">
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatId">Mã tác giả</span>
                    <input type="text" class="form-control" name="txt_matgia" readonly value=" <?php echo $row['ma_tgia'] ?>">
                </div>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                    <input type="text" class="form-control" name="txt_tentgia" value=" <?php echo $row['ten_tgia'] ?>">
                </div>
                <div class="form-group  float-end ">
                    <input type="submit" value="Lưu lại" class="btn btn-success">
                    <a href="category.php" class="btn btn-warning ">Quay lại</a>
                </div>
            </form>
        </div>
    </div>
</main>
<?php
include 'components/footer_admin.php';
?>