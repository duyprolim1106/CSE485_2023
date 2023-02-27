<?php
    include 'components/header_admin.php'; 
    include '../connect_db.php';
?>
    <main class="container mt-5 mb-5">
    <?php  
    $sql = "SELECT *
    FROM baiviet
    INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
    INNER JOIN theloai ON theloai.ma_tloai = baiviet.ma_tloai
    
    ";
    $result = mysqli_query($con, $sql);

   
   
     ?>
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm">
                <a href="add_article.php" class="btn btn-success">Thêm mới</a>
                <table class="table">
                    <thead>
                        
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Tên Tiêu Đề</th>
                            <th scope="col">Tên Bài Hát</th>
                            <th scope="col">Tên Tác Giả</th>
                            
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    while($row=mysqli_fetch_assoc($result)){     
                    ?>                       
                        <tr>
                            <th scope="row"><?php echo $row['ma_bviet'] ?></th>
                            <td><?php echo $row['tieude'] ?></td>
                            <td><?php echo $row['ten_bhat'] ?></td>
                            <td><?php echo $row['ten_tgia'] ?></td>
                            <td>
                                <a href="edit_article.php?ma_bviet=<?php echo $row['ma_bviet'] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                            </td>
                            <td>                                
                                <a href="process_components/process_delete_article.php?mabviet=<?php echo $row['ma_bviet']?>"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php  }?>
                       
                    </tbody>
                </table>
            </div>
        </div>
    </main>

<?php
    include 'components/footer_admin.php';
?>