<div id="login" class="login">
    <div class="container">
        <div class="row login-all">
            <div class="btn-close">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>
            <div class="col-sm-12 col-lg-6" style="padding: 0;">
                <div class="login-text">
                    <h2>
                        TRANG THÔNG TIN <br>
                        DÀNH RIÊNG CHO KHÁCH HÀNG FPT
                    </h2>
                    <hr>
                    <p>Quản lý thông tin khách hàng, hợp đồng và tất cả dịch vụ trực tuyến FPT khách hàng đang sử dụng. Đăng ký nâng cấp, mua mới dịch vụ, thanh toán hóa đơn và chuyển đổi phương thức thanh toán...</p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6" style="padding: 30px 0;">
                <form class="login-form animate" action="partials/login-process.php" method="post">
                    <div class="form">
                        <h3>ĐĂNG NHẬP</h3>
                        <input type="text" placeholder="Số hợp đồng/Số điện thoại" name="number_user" required>
                        <input type="password" placeholder="Mật khẩu" name="password" required>
                        <button type="submit">ĐĂNG NHẬP</button>
                        <div>
                            <p><a href="#">Quên mật khẩu</a></p>
                            <p><a href="#">Xác nhận hợp đồng điện tử</a></p>
                            <p><a href="#">Khách hàng Công ty Viễn thông Quốc tế FPT</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
