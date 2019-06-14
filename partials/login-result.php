<div id="login-result" class="login">
    <div class="container">
        <div class="row login-all">
            <div class='notice'>
                <?php if (isset($_SESSION) && !empty($_SESSION)) : ?>
                    <?php if (isset($_SESSION['status'])) :?>
                        <?php if($_SESSION['status'] == true) : ?>
                            <div class='alert alert-success'>Đăng nhập thành công</div>
                        <?php else:?>
                            <div class='alert alert-danger'>Tài khoản không tồn tại</div>
                        <?php endif;?>
                            <a href="partials/logout.php" id="btn-cancel" onclick="document.getElementById('login-result').style.display='none'" class="cancelbtn">Cancel</a>
                    <?php else:?>
                        <script type="text/javascript">
                            document.getElementById('login-result').style.display='none';
                        </script>
                    <?php endif;?>
                <?php else:?>
                    <script type="text/javascript">
                        document.getElementById('login-result').style.display='none';
                    </script>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

