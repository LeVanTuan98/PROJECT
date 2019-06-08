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
                            <span>Khách hàng - Đối tác</span>
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
                    <div class="intro-item">
                        <a href="lien_ket_thanh_vien.php" title="Liên kết thành viên">
                            <img src="images/intro/members.png" alt="Liên kết thành viên">
                            <p>Liên kết - thành viên</p>
                        </a>
                    </div>
                    <div class="intro-item focus-item">
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
        <div class="box-partner-1">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/partner/i-customer.png" alt="i-customer.png">
                        <span>KHÁCH HÀNG TIÊU BIỂU</span>
                    </a>
                </div>
                <div class="slideshow">
                    <div class="mySlides fade">
                        <div class="row">
                        <?php
                            $sqlQuery = "SELECT * FROM customer_logo";
                            $result = mysqli_query($connection,$sqlQuery);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    if (($row['id'] > 0) && ($row['id'] < 19)) {
                                        ?>
                                        <div class="col-sm-3 col-lg-2" style="padding:5px;">
                                            <div class="mini-logo">
                                                <a href="#"><img src="<?php echo $row['src'] ?>" alt="<?php echo $row['alt'] ?>"></a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                        ?>
                        </div>
                    </div>
                    <div class="mySlides fade">
                        <div class="row">
                            <?php
                            $sqlQuery = "SELECT * FROM customer_logo";
                            $result = mysqli_query($connection,$sqlQuery);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    if (($row['id'] > 18)) {
                                        ?>
                                        <div class="col-sm-3 col-lg-2" style="padding:5px;">
                                            <div class="mini-logo">
                                                <a href="#"><img src="<?php echo $row['src'] ?>" alt="<?php echo $row['alt'] ?>"></a>
                                            </div>
                                        </div>
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="slide-btn">
                        <ul>
                            <li><a class="prev" onclick="plusSlides(-1)" title="Previous">&#10094;</a></li>
                            <li><span class="dot" onclick="currentSlide(1)">1</span></li>
                            <li><span class="dot" onclick="currentSlide(2)">2</span></li>
                            <li><a class="next" onclick="plusSlides(1)" title="Next">&#10095;</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-partner-2">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/partner/i-partner.png" alt="i-partner.png">
                        <span>ĐỐI TÁC</span>
                    </a>
                </div>
                <div class="b2-partner row">
                    <div class="col-sm-12 col-lg-8">
                        <div class="col-sm-12 col-lg-6 row" style="padding-top: 2em;">
                            <?php
                            $sqlQuery = "SELECT * FROM partner_logo";
                            $result = mysqli_query($connection,$sqlQuery);
                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <div class="col-sm-6" style="padding:5px;">
                                        <div class="mini-logo">
                                            <a href="#"><img src="<?php echo $row['src'] ?>" alt="<?php echo $row['alt'] ?>"></a>
                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-4 b2-partner-img">
                        <img src="images/partner/customer-partner-1.png" alt="customer-partner-1.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

