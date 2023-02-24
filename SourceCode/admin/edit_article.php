<?php
    include 'components/header_admin.php'; 
    include '../connect_db.php';
?>
    <main class="container mt-5 mb-5">
    <?php     
        $ma_bviet = $_GET["ma_bviet"];
        $sql = "SELECT *
        FROM baiviet
        INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
        INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai
        Where baiviet.ma_bviet = '$ma_bviet'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
    ?>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
                <form action="process_components/process_edit_article.php" method="post">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Mã tiêu đề</span>
                        <input type="text" class="form-control" name="txt_mabviet" value="<?php echo $row['ma_bviet'] ?>" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tiêu đề</span>
                        <input type="text" class="form-control" name="txt_tieude" value="<?php echo $row['tieude'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txt_tenbhat" value="<?php echo $row['ten_bhat'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" name="txt_tomtat" value="<?php echo $row['tomtat'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control" name="txt_noidung" value="<?php echo $row['noidung'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <input type="text" class="form-control" name="ma_tgia" value="<?php echo $row['ma_tgia'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="date" id="date-input" name="date-input">
                    </div>
                    <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Hình ảnh</span>
                         <input type="file" id="file-upload" name="file-upload">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Lưu lại" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
    include 'components/footer_admin.php';
?>