<?php
include 'components/header_admin.php';
include '../connect_db.php';
?>
<main class="container mt-5 mb-5">
    <?php
    $sql = "select * from users";
    $result = mysqli_query($con, $sql);
    ?>
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_user.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Mật khẩu</th>
                        <th scope="col">Quyền hạn</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $row['id_ngdung'] ?></th>
                            <td><?php echo $row['tai_khoan'] ?></td>
                            <td><?php echo $row['mat_khau'] ?></td>
                            <td><?php echo $row['quyen_han'] ?></td>
                            <td>
                                <a href="edit_user.php?taikhoan=<?php echo $row['tai_khoan'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>
                                <a href="process_delete_users.php?idngdung=<?php echo $row['id_ngdung'] ?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
include 'components/footer_admin.php';
?>