<?php
    include 'components/header_admin.php'; 
    include '../connect_db.php';
?>
    <main class="container mt-5 mb-5">
    <?php 
        $taikhoan = $_GET['taikhoan'];
        $sql = "SELECT * 
        FROM users
        Where tai_khoan = '$taikhoan'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
     
    ?>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Sửa thông tin tài khoản người dùng</h3>
                <form action="process_edit_users.php" method="post">
                <input type="text" class="form-control" name="txt_idngdung" readonly hidden value=" <?php echo $row['id_ngdung'] ?>">
                <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatId">Tài khoản người dùng</span>
                        <input type="text" class="form-control" name="txt_taikhoan" readonly value=" <?php echo $row['tai_khoan'] ?>">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mật khẩu</span>
                        <input type="text" class="form-control" name="txt_matkhau" value = " <?php echo $row['mat_khau']?>">
                    </div>
                    
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Quyền hạn</span>
                        <input type="text" class="form-control" name="txt_quyenhan" value = " <?php echo $row['quyen_han']?>">
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