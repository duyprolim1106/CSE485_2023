<?php
    include 'components/header_admin.php';
    include '../connect_db.php';
?>

    <main class="container mt-5 mb-5">
        
    <?php
            $sql_tacgia = "SELECT * FROM tacgia";
            $sql_theloai = "SELECT * FROM theloai";
            $result_tacgia = mysqli_query($con, $sql_tacgia);
            $result_theloai = mysqli_query($con, $sql_theloai);
        ?>
        <!-- h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> --> 
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="process_components/process_add_article.php" enctype="multipart/from-data" method="post">
                
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tiêu đề</span>
                        <input type="text" class="form-control" name="txt_tieude" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txt_baihat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName" >Thể loại</span>
                        <select name="txt_theloai">
                         
                        <?php
                                while ($row_theloai = mysqli_fetch_assoc($result_theloai)) {
                            ?>
                                <option value="<?php echo $row_theloai['ma_tloai'] ?>"><?php echo $row_theloai['ten_tloai']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control"  name="txt_tomtat" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control"  name="txt_noidung" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName" >tác giả</span>
                        <select name="txt_tacgia">
                            <?php
                                while ($row_tacgia = mysqli_fetch_assoc($result_tacgia)) {
                            ?>
                                <option value="<?php echo $row_tacgia['ma_tgia'] ?>"><?php echo $row_tacgia['ten_tgia']?></option>
                            <?php
                            }
                            ?>
                        </select>
                        
                    </div>
                    <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="lblCatName">Hình ảnh</span>
                         <input type="file" name="file-upload" id="file-upload">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
    include 'components/footer_admin.php';
?>