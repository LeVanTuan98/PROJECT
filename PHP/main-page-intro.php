<div class="main-page">
    <?php
        include "PHP/slide-show.php";
    ?>
    <div class="content">
        <div class="title">
            <div class="container">
                <div class=" row">
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <a href="#" title="Về FPT Telecom">
                            <span>Về FPT Telecom</span>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="#" title="Giới thiệu chung">
                            <span>Giới thiệu chung</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-intro">
            <div class="container">
                <div class="intro">
                    <div class="intro-item focus-item">
                        <a href="gioi_thieu_chung.php" title="Giới thiệu chung">
                            <img src="images/intro/introduction.png" alt="Giới thiệu chung">
                            <p>Giới thiệu chung</p>
                        </a>
                    </div>
                    <div class="intro-item">
                        <a href="lien_ket_thanh_vien.php" title="Liên kết thành viên">
                            <img src="images/intro/members.png" alt="Liên kết thành viên">
                            <p>Liên kết - thành viên</p>
                        </a>
                    </div>
                    <div class="intro-item">
                        <a href="khach_hang_doi_tac.php" title="Khách hàng - Đối tác">
                            <img src="images/intro/partners.png" alt="Khách hàng - Đối tác">
                            <p>Khách hàng - Đối tác</p>
                        </a>
                    </div>
                    <div class="intro-item">
                        <a href="#" title="Quan hệ cổ đông">
                            <img src="images/intro/shareholders.png" alt="Quan hệ cổ đông">
                            <p>Quan hệ cổ đông</p>
                        </a>
                    </div>
                    <div class="intro-item">
                        <a href="tap_doan_fpt.php" title="Tập đoàn FPT">
                            <img src="images/intro/fpt.png" alt="Tập đoàn FPT">
                            <p>Tập đoàn FPT</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-intro-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-4">
                        <div class="img-intro">
                            <img src="images/intro/fptvn_veftel_gioithieu.png" alt="FPTVN">
                            <p>"Khách hàng là trọng tâm"</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-8">
                        <div class="content-intro">
                            <p>
                                <strong>Là thành viên thuộc Tập đoàn công nghệ hàng đầu Việt Nam FPT</strong>
                            </p>
                            <p>
                                Công ty Cổ phần Viễn thông FPT (tên gọi tắt là FPT Telecom) hiện là một trong những nhà cung cấp dịch vụ viễn thông và Internet có uy tín và được khách hàng yêu mến tại Việt Nam và Khu vực.
                            </p>
                            <p>
                                Thành lập ngày 31/01/1997, khởi nguồn từ Trung tâm Dịch vụ Trực tuyến do 4 thành viên sáng lập cùng sản phẩm mạng Intranet đầu tiên của Việt Nam mang tên “Trí tuệ Việt Nam – TTVN”, sản phẩm được coi là đặt nền móng cho sự phát triển của Internet tại Việt Nam.
                            </p>
                            <div class="number-list">
                                <?php
                                $sqlQuery = "SELECT * FROM company_size";
                                $result = mysqli_query($connection,$sqlQuery);
                                if(mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                }
                                ?>
                                <div class="number">
                                    <p>
                                        Sau <br> <span><?php echo $row['time']?></span> <br> NĂM HOẠT ĐỘNG
                                    </p>
                                </div>
                                <div class="number">
                                    <p>
                                        Có hơn <br> <span><?php echo $row['employees']?></span> <br> NHÂN VIÊN CHÍNH THỨC
                                    </p>
                                </div>
                                <div class="number">
                                    <p>
                                        Với gần <br> <span><?php echo $row['offices']?></span> <br> VĂN PHÒNG GIAO DỊCH
                                    </p>
                                </div>
                                <div class="number">
                                    <p>
                                        Tại <br> <span><?php echo $row['province']?></span> <br> TỈNH THÀNH
                                    </p>
                                </div>
                                <div class="number">
                                    <p>
                                        Thuộc hơn <br> <span><?php echo $row['branch']?></span> <br> CHI NHÁNH
                                    </p>
                                </div>
                            </div>
                            <p>
                                Với sứ mệnh tiên phong đưa Internet đến với người dân Việt Nam và mong muốn mỗi gia đình Việt Nam đều sử dụng ít nhất một dịch vụ của FPT Telecom, đồng hành cùng phương châm "Khách hàng là trọng tâm", chúng tôi không ngừng nỗ lực đầu tư hạ tầng, nâng cấp chất lượng sản phẩm – dịch vụ, tăng cường ứng dụng công nghệ mới để mang đến cho khách hàng những trải nghiệm sản phẩm dịch vụ vượt trội.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-intro-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-7">
                        <iframe src="https://www.youtube.com/embed/iIhgSeqsHzo"></iframe>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <img src="images/intro/gioithieu_20.png" alt="Giới thiệu FPT">
                        <p>
                            "Mọi dịch vụ <br> trên một kết nối"
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-intro-3">
            <div class="container">
                <div class="row">
                    <img src="images/intro/lich_su_phat_trien.png" alt="Lịch sử phát triển">
                </div>
            </div>
        </div>
        <div class="box-intro-4">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <span class="title-item">
                                <img src="images/intro/i-support.png" alt="i-support.png">
                                <span>Lĩnh vực kinh doanh</span>
                            </span>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <ul class="list-style-orange">
                            <?php
                            $sqlQuery = "SELECT * FROM business_field";
                            $result = mysqli_query($connection,$sqlQuery);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                    <li><?php echo $row['field']?></li>
                                    <?php
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <img class="img-support" src="images/intro/gioithieu-hotro.png" alt="Giới thiệu hỗ trợ">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-intro-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <img class="img-support" src="images/intro/gioithieu-huychuong.png" alt="Giới thiệu huy chương">
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="col-sm-12">
                                <span class="title-item">
                                    <img src="images/intro/i-cup.png" alt="i-cup.png">
                                    <span>CÁC GIẢI THƯỞNG TIÊU BIỂU</span>
                                </span>
                        </div>
                        <div class="col-sm-12">
                            <ul class="list-style-orange">
                                <?php
                                $sqlQuery = "SELECT * FROM trophys";
                                $result = mysqli_query($connection,$sqlQuery);
                                if(mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                                        ?>
                                        <li><?php echo $row['trophy']?></li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-intro-6">
            <div class="container">
                <div class="title-item">
                        <span>
                            <img src="images/intro/i-chungchi.png" alt="i-chungchi.png">
                            <span>CÁC CHỨNG CHỈ QUỐC TẾ</span>
                        </span>
                </div>
                <div class="img">
                    <?php
                    $sqlQuery = "SELECT * FROM international_certificate";
                    $result = mysqli_query($connection,$sqlQuery);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <img src="<?php echo $row['src']?>" alt="">
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="box-intro-7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <span class="title-item">
                                <img src="images/intro/i-contract.png" alt="i-contact.png">
                                <span>LIÊN HỆ</span>
                            </span>
                    </div>
                    <div class="col-sm-12 col-lg-6">
                        <div class="info-contact row">
                            <div class="col-sm-12 col-lg-6 info-contact-1">
                                <p>
                                    Tổng đài Chăm sóc khách hàng 24/7: <br> <a href="#">1900 6600</a>
                                </p>
                            </div>
                            <div class="col-sm-12 col-lg-6 info-contact-2">
                                <div>
                                    <p>Hòm thư khách hàng:</p>
                                    <p class="icon">
                                        <img src="images/intro/i-mail.png" alt="i-mail.png">
                                        <strong><a href="#">hotrokhachhang@fpt.com.vn </a></strong>
                                    </p>
                                </div>
                                <div>
                                    <p>Website chính thức:</p>
                                    <p class="icon">
                                        <img src="images/intro/i-web.png" alt="i-web.png">
                                        <strong><a href="#">www.fpt.vn</a></strong>
                                    </p>
                                </div>
                                <div>
                                    <p>Facebook chính thức:</p>
                                    <p class="icon">
                                        <img src="images/intro/i-fb.png" alt="i-fb.png">
                                        <strong><a href="#">www.facebook.com/fpttelecom</a></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="address row">
                            <div class="col-sm-12">
                                <p><strong>TRỤ SỞ:</strong></p>
                                <div class="address-sub">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>
                                        <span>Hà Nội:</span>
                                        <a href="#">Tòa nhà PVI, số 1 Phạm Văn Bạch, Cầu Giấy</a>
                                        <br> <a href="#">Tel: +84 24 7300 2222 | Fax: +84 24 7300 8889.</a>
                                    </p>
                                </div>
                                <div class="address-sub">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>
                                        <span>Đà Nẵng:</span>
                                        <a href="#">182 - 184 Đường 2 tháng 9, Hải Châu</a>
                                        <br> <a href="#">Tel: +84 236 7300 2222 | Fax: +84 236 3899 889.</a>
                                    </p>
                                </div>
                                <div class="address-sub">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>
                                        <span>TP.HCM:</span>
                                        <a href="#">Lô 37-39A, đường 19, KCX Tân Thuận, Phường Tân Thuận Đông, Quận 7</a>
                                        <br> <a href="#">Tel: +84 28 7300 2222 | Fax: +84 28 7300 8889.</a>
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
