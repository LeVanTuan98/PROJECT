<footer class="footer-page">
    <div class="container">
        <div class="four-column-footer row">
            <div class="col-12 col-sm-2 col-md-2">
                <h4>Về FPT Telecom</h4>
                <ul>
                    <li><a href="#" title="Giới thiệu chung">Giới thiệu chung</a></li>
                    <li><a href="#" title="Liên kết - Thành viên">Liên kết - Thành viên</a></li>
                    <li><a href="#" title="Khách hàng - Đối tác">Khách hàng - Đối tác</a></li>
                    <li><a href="#" title="Quan hệ cổ đông">Quan hệ cổ đông</a></li>
                    <li><a href="#" title="Tập đoàn FPT">Tập đoàn FPT</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3">
                <h4>Khách hàng FPT Telecom</h4>

                <ul>
                    <li><a href="#" title="Hướng dẫn sử dụng dịch vụ">Hướng dẫn sử dụng dịch vụ</a></li>
                    <li><a href="#" title="Hỗ trợ kỹ thuật">Hỗ trợ kỹ thuật</a></li>
                    <li><a href=#" title="Thanh toán Online">Thanh toán Online</a></li>
                    <li><a href="#" title="Góp ý khách hàng">Góp ý khách hàng</a></li>
                    <li><a href="#" title="Lịch phát sóng">Lịch phát sóng</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-3 col-md-3" style="padding-right: 0px">
                <h4>Chưa là khách hàng của FPT Telecom</h4>

                <ul>
                    <li><a href="#" title="Đăng ký Online">Đăng ký Online</a></li>
                    <li><a href="#" title="Sản phẩm dịch vụ">Sản phẩm dịch vụ</a></li>
                    <li><a href="#" title="Khuyến mại">Khuyến mại</a></li>
                    <li><a href="#" title="Tìm điểm giao dịch">Tìm điểm giao dịch</a></li>
                    <li><a href="#" title="Tin tức">Tin tức</a></li>
                </ul>
            </div>
            <div class="col-12 col-sm-4">
                <a href="#" title="FPT Jobs">
                    <img src="assets/images/footer/fptjobs.png" alt="FPTjob.png">
                </a>
            </div>
        </div>
        <div class="two-column-footer row">
            <div class="col-12 col-sm-5 col-md-5">
                <h4>Follow Us</h4>
                <div class="logo-follow">
                    <div>
                        <a href="#" title="Facebook"><img src="assets/images/footer/follow/face.png" alt="face.png"></a>
                    </div>
                    <div>
                        <a href="#" title="Hi FPT"><img src="assets/images/footer/follow/logo-hifpt.png" alt="logo-hifpt.png"></a>
                    </div>
                    <div>
                        <a href="#" title="YouTube"><img src="assets/images/footer/follow/youtube.png" alt="youtube.png"></a>
                    </div>
                    <div>
                        <a href="#" title="Instagram"><img src="assets/images/footer/follow/instagram.png" alt="instagram.png"></a>
                    </div>
                    <div>
                        <a href="#" title="Zalo"><img src="assets/images/footer/follow/zalo.png" alt="zalo.png"></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
                <h4>Link sản phẩm dịch vụ</h4>
                <div class="slider-logo-footer">
                    <?php
                    $sqlSelect = "SELECT * FROM product";
                    $products = $database->RunQuery($sqlSelect);
                    ?>
                    <?php if (!empty($products)) :?>
                        <?php foreach ($products as $product) : ?>
                            <div>
                                <img src="<?php echo $product['src']?>" alt="<?php echo $product['alt']?>">
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
                <div class="license row">
                    <div class="col-sm-6">
                        <p>Giấy chứng nhận ĐKKD số 0101778163 do Sở Kế hoạch Đầu tư Thành phố Hà Nội cấp ngày 28/07/2005</p>
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/footer/20150827110756-dathongbao.png" alt="Thongbao.png">
                    </div>
                    <div class="col-sm-3">
                        <img src="assets/images/footer/small_logo_background_left.png" alt="small_logo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-menu">
        <div class="container">
            <ul class="row">
                <li class="col-sm-2"><a href="#" title="Sản phẩm dịch vụ">SẢN PHẨM DỊCH VỤ</a></li>
                <li class="col-sm-2"><a href="#" title="Khuyến mại">KHUYẾN MẠI</a></li>
                <li class="col-sm-2"><a href="#" title="Hỗ trợ">HỖ TRỢ</a></li>
                <li class="col-sm-2"><a href="#" title="Member FPT">MEMBER FPT</a></li>
                <li class="col-sm-2"><a href="#" title="Đăng kí Online">ĐĂNG KÍ ONLINE</a></li>
                <li class="col-sm-2" style="padding-left:0;padding-right: 0;"><a href="#" title="Thanh toán Online">THANH TOÁN ONLINE</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-logo">
        <a href="#" title="FPT Telecom">
            <img src="assets/images/footer/footer_logo.png" alt="footer_logo.png">
        </a>
        <span>© 2018 - Bản quyền thuộc về FPT Telecom</span>
    </div>
</footer>