<?php
    include 'components/header_admin.php';
?>
<?php 
include '../connect_db.php';
    function getCount(string $table)
        {
            global $con;
            $sql = "SELECT COUNT(*) AS so_luong FROM " . $table;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row['so_luong'];
        }

?>
<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Người dùng</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?= getCount('users')?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Thể loại</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?= getCount('theloai')?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Tác giả</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?= getCount('tacgia')?>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">Bài viết</a>
                    </h5>

                    <h5 class="h1 text-center">
                        <?= getCount('baiviet')?>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</main>

<?php
    include 'components/footer_admin.php';
?>