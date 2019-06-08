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
                    <div class="col-sm-4 col-md-3 col-lg-3">
                        <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        <a href="#" title="Giới thiệu chung">
                            <span>Liên kết - Thành viên</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-intro">
            <div class="container">
                <div class="intro">
                    <div class="intro-item">
                        <a href="gioi_thieu_chung.php" title="Giới thiệu chung">
                            <img src="images/intro/introduction.png" alt="Giới thiệu chung">
                            <p>Giới thiệu chung</p>
                        </a>
                    </div>
                    <div class="intro-item focus-item">
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
        <div class="box-link-1">
            <div class="container">
                <div class="content-detail">
                    <p class="p1">FPT Telecom hiện đang hoạt động theo mô hình 2 công ty thành viên</p>
                    <p class="p2">CÔNG TY TNHH MTV VIỄN THÔNG QUỐC TẾ FPT</p>
                    <p class="p3">
                        (
                        <a href="#">FPT TELECOM INTERNATIONAL</a>
                        , VIẾT TẮT LÀ FTI )
                    </p>
                    <p class="p4">
                        Công ty <a href="#">FPT Telecom International</a> thuộc FPT Telecom, thành lập ngày 22/5/2008. Được thừa hưởng bề dày kinh nghiệm và cơ sở hạ tầng của FPT Telecom - một trong những Nhà cung cấp dịch vụ Viễn thông hàng đầu Việt Nam,
                        FPT Telecom International đã hoạt động độc lập từ đầu năm 2008 và hiện là nhà cung cấp được đối tác trong và ngoài nước đánh giá có chất lượng dịch vụ, phục vụ tốt nhất lĩnh vực kênh thuê riêng và dữ liệu trực tuyến.
                    </p>
                    <p class="p5"><a href="#">FPT TELECOM INTERNATIONAL</a> VỚI LỢI THẾ:</p>
                    <p class="p6"><a href="#">FPT Telecom International</a> hội đủ điều kiện mang lại cho khách hàng tại Việt Nam cơ hội sử dụng các gói giải pháp kết nối toàn cầu với chất lượng cao và ổn định nhất.</p>
                </div>
                <div class="mini-box">
                    <?php
                    $sqlQuery = "SELECT * FROM FTI_field";
                    $result = mysqli_query($connection,$sqlQuery);
                    if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result))
                        {
                            ?>
                            <div>
                                <img src="<?php echo $row['src']?>" alt="<?php echo $row['alt']?>">
                                <p><?php echo $row['content']?></p>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="box-link-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-8 b2-content">
                        <p>CÁC LOẠI HÌNH DỊCH VỤ ĐANG CUNG CẤP.</p>
                        <ul>
                            <?php
                            $sqlQuery = "SELECT * FROM field_supply";
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
                    <div class="col-sm-12 col-lg-4 b2-img">
                        <img src="images/link/lienket.png" alt="lienket.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-link-3">
            <div class="container">
                <div class="title-row">
                    <p>VĂN PHÒNG CHÍNH TẠI 2 THÀNH PHỐ LỚN:</p>
                </div>
                <div class="address-row row">
                    <div class="col-sm-12 col-lg-7">
                        <p style="padding-left: 1.5em;">HÀ NỘI</p>
                        <p>
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Tầng 12A tòa nhà TNR 54A Nguyễn Chí Thanh, Đống Đa, Hà Nội.
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-5 row">
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Điện thoại:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    +84 24 7300 2222
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Fax:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                    +84 28 7300 8889
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="address-row row">
                    <div class="col-sm-12 col-lg-7">
                        <p style="padding-left: 1.5em;">Tp HỒ CHÍ MINH</p>
                        <p>
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Tòa nhà FPT Lô L.29B-31B-33B Tân Thuận, KCX Tân Thuận, P. Tân Thuận Đông, Q7, TP. HCM.
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-5 row">
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Điện thoại:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    +84 28 7300 2222
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Fax:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                    +84 28 7300 8889
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-link-4">
            <div class="container">
                <div>
                    <p class="p2">CÔNG TY TNHH MTV VIỄN THÔNG FPT TÂN THUẬN</p>
                </div>
                <div class="address-row row">
                    <div class="col-sm-12 col-lg-7">
                        <p style="padding-left: 1.5em;">Tp HỒ CHÍ MINH</p>
                        <p>
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Lô 37-39A, đường số 19, Khu chế xuất Tân Thuận, Phường Tân Thuận Đông, Quận 7, Thành phố Hồ Chí Minh
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-lg-5 row">
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Điện thoại:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-phone-square" aria-hidden="true"></i>
                                    +84 28 7300 2222
                                </a>
                            </p>
                        </div>
                        <div class="col-sm-12 col-lg-6">
                            <p style="padding-left: 2em;">Fax:</p>
                            <p>
                                <a href="#">
                                    <i class="fa fa-fax" aria-hidden="true"></i>
                                    +84 28 7300 8889
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

