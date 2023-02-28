<?php
    include 'components/header_admin.php'; 
    include '../connect_db.php';
?>
<body>
        <main class="container mt-5 mb-5">
    <main class="container mt-5 mb-5">

    <?php     
        $ma_bviet = $_GET["ma_bviet"];
        $sql = "SELECT baiviet.*,theloai.ten_tloai, tacgia.ten_tgia FROM baiviet, theloai, tacgia WHERE baiviet.ma_tgia = tacgia.ma_tgia AND baiviet.ma_tloai = theloai.ma_tloai AND baiviet.ma_bviet = $ma_bviet;";
        $result = mysqli_query($con, $sql);
        $article = mysqli_fetch_assoc($result);
    ?>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin bài viết</h3>
                <form action="process_components/process_edit_article.php" enctype="multipart/from-data" method="post">
                <input type="text" name="ma_bviet" value="<?php echo $row['ma_bviet'] ?> " hidden >
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tiêu đề</span>
                        <input type="text" class="form-control" name="txt_tieude" value="<?php echo $article['tieude'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên bài hát</span>
                        <input type="text" class="form-control" name="txt_tenbhat" value="<?php echo $article['ten_bhat'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Thể loại</span>
                        <select class="form-select" name="txt_theloai" >
                            <?php
                            // Kết nối tới database
                            $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

                            // Lấy danh sách thể loại từ bảng theloai
                            $sql = "SELECT * FROM theloai";
                            $result = mysqli_query($con, $sql);
                            

                            // Hiển thị các tùy chọn thể loại trong dropdown list
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($article['ma_tloai'] == $row['ma_tloai']) {
                                    echo '<option value="' . $row['ma_tloai'] . '" selected>' . $row['ten_tloai'] . '</option>';
                                } else {
                                    echo '<option value="' . $row['ma_tloai'] . '">' . $row['ten_tloai'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">

                        <span class="input-group-text" id="lblCatName">Tóm tắt</span>
                        <input type="text" class="form-control" id="InputCDN" name="txt_tomtat" value="<?php echo $article['tomtat'] ?>">
                        
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Nội dung</span>
                        <input type="text" class="form-control" name="txt_noidung"  value="<?php echo $article['noidung'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tên tác giả</span>
                        <select class="form-select" name="txt_tacgia" >
                            <?php
                            // Kết nối tới database
                            $con = mysqli_connect('localhost', 'root', '', 'btth01_cse485');

                            // Lấy danh sách thể loại từ bảng theloai
                            $sql = "SELECT * FROM tacgia";
                            $result = mysqli_query($con, $sql);
                            

                            // Hiển thị các tùy chọn thể loại trong dropdown list
                            while ($row = mysqli_fetch_assoc($result)) {
                                if ($article['ma_tgia'] == $row['ma_tgia']) {
                                    echo '<option value="' . $row['ma_tgia'] . '" selected>' . $row['ten_tgia'] . '</option>';
                                } else {
                                    echo '<option value="' . $row['ma_tgia'] . '">' . $row['ten_tgia'] . '</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span style = "padding: 0px 20px 0px 20px" class="input-group-text" id="lblCatName">Ngày viết</span>
                        <input type="text" id="date-input" name="date-input" name="Y-m-d H:i:s" value="<?php  echo $article['ngayviet'] ?>">
                    </div>
                    <div class="input-group mt-3 mb-3">
                    <span style = "padding: 0px 20px 0px 20px" class="input-group-text" id="lblCatName">Hình ảnh</span>
                         <input type="file" id="file-upload" name="file-upload" value="<?php  echo $article['hinhanh'] ?>">
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Sửa" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
</div>
              </main>

<?php
    include 'components/footer_admin.php';
?>
