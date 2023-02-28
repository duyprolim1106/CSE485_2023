<?php
include 'header.php';
include 'connect_db.php';
?>
<main class="container mt-5 mb-5">
    <div class="d-flex justify-content-center h-100">
    <?php
        if($_POST){
            $user_name = $_POST['user_name'];
            $user_pass = $_POST['user_pass'];
            $sql = "SELECT * FROM users WHERE tai_khoan='$user_name' AND mat_khau ='$user_pass';";
            $result=mysqli_query($con,$sql);
            $row = mysqli_fetch_assoc($result);
            if($row) {
                $_SESSION['login'] = $row['quyen_han'];
                header('Location: ./admin/index.php');
            }
            // else if(($user_name || $user_pass) &&($user_name|| !$user_pass) &&(!$user_name || $user_pass)  && !$row){
            //     echo '<p style="color:white;">Tên đăng nhập hoặc mật khẩu sai!</p>';
            // }
            // if(!$user_name|| !$user_pass){
            //         echo '<p style="color:white;">Hãy nhập tài khoản hoặc mật khẩu </p>';
            // }
        }
    ?>
        <div class="card">
            <div class="card-header">
                <h3>Sign In</h3>
                <div class="d-flex justify-content-end social_icon">
                    <span><i class="fab fa-facebook-square"></i></span>
                    <span><i class="fab fa-google-plus-square"></i></span>
                    <span><i class="fab fa-twitter-square"></i></span>
                </div>
            </div>
            <div class="card-body">
                <form action="login.php" method="POST">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="user_name" name="user_name">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                        <input type="text" class="form-control" placeholder="pass_word" name="user_pass">
                    </div>

                    <div class="row align-items-center remember">
                        <input type="checkbox">Remember Me
                    </div>
                    <div class="form-group">
                    <input class = "button_login" type='submit' name="login" value="Login">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center ">
                    Don't have an account?<a href="#" class="text-warning text-decoration-none">Sign Up</a>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                </div>
            </div>
        </div>

    </div>
</main>
<?php
include 'footer.php'
?>