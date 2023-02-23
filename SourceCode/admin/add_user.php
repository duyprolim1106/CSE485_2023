<?php
    include 'components/header_admin.php'; 
    include '../connect_db.php';
?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới người dùng</h3>
                <form action="process_add_users.php" method="post">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Tài khoản</span>
                        <input type="text" class="form-control" name="txt_taikhoan" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Mật khẩu</span>
                        <input type="text" class="form-control" name="txt_matkhau" >
                    </div>
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblCatName">Quyền hạn</span>
                        <input type="text" class="form-control" name="txt_quyenhan" >
                    </div>

                    <div class="form-group  float-end ">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="category.php" class="btn btn-warning ">Quay lại</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
<?php
    include 'components/footer_admin.php';
?>