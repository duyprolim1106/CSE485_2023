<?php
include 'components/header_admin.php';
include '../connect_db.php';
?>
<main class="container mt-5 mb-5">
    <?php
    $sql = "select * from tacgia";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="row">
        <div class="col-sm">
            <a href="add_author.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tác giả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                    <tr>
                        <th scope="row"><?php echo $row['ma_tgia']?></th>
                        <td><?php echo $row['ten_tgia']?></td>
                        <td>
                            <a href="edit_author.php?matgia=<?php echo $row['ma_tgia']?>"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="process_components/process_delete_author.php?matgia=<?php echo $row['ma_tgia']?>"><i
                                    class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php  
                            }?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php
    include 'components/footer_admin.php';
?>