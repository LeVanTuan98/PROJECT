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
                            <span>Tập đoàn FPT</span>
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
                    <div class="intro-item focus-item">
                        <a href="tap_doan_fpt.php" title="Tập đoàn FPT">
                            <img src="images/intro/fpt.png" alt="Tập đoàn FPT">
                            <p>Tập đoàn FPT</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-fpt-1">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/fpt/icon-info.png" alt="icon-info.png">
                        <span>VỀ TẬP ĐOÀN FPT</span>
                    </a>
                </div>
                <div class="b1-content">
                    <p>
                        Năm 1988, 13 nhà khoa học trẻ thành lập Công ty FPT với mong muốn xây dựng “một tổ chức kiểu mới, giàu mạnh bằng nỗ lực lao động sáng tạo trong khoa học kỹ thuật và công nghệ, làm Khách hàng hài lòng, góp phần hưng thịnh Quốc gia, đem lại cho mỗi thành viên của mình điều kiện phát triển đầy đủ nhất về tài năng và một cuộc sống đầy đủ về vật chất, phong phú về tinh thần.”
                        <br>
                        <br>
                        Không ngừng đổi mới, liên tục sáng tạo và luôn tiên phong mang lại cho Khách hàng các sản phẩm/ giải pháp/ dịch vụ công nghệ tối ưu nhất, FPT trở thành Công ty CNTT-VT lớn nhất trong khu vực kinh tế tư nhân của Việt Nam với hơn 32.000 Cán bộ Nhân viên, trong đó có 13.695 kỹ sư CNTT, lập trình viên, chuyên gia công nghệ; hiện diện tại 5 Châu lục, 33 Quốc gia trên Thế giới. FPT cũng là doanh nghiệp dẫn đầu trong các lĩnh vực: Xuất khẩu phần mềm, Tích hợp hệ thống; Phát triển phần mềm; Dịch vụ CNTT; Phân phối sản phẩm công nghệ tại Việt Nam.
                        <br>
                        <br>
                        Trong 30 năm qua, FPT không chỉ tiên phong xây dựng, phát triển các phần mềm thương hiệu Việt; đưa công nghệ vào cuộc sống; hiện đại hóa các ngành kinh tế xương sống của Quốc gia; đẩy mạnh giáo dục & đào tạo thế hệ trẻ theo hướng thực học, thực nghiệp, mà còn tiên phong trong lĩnh vực xuất khẩu phẩn mềm, góp phần đưa trí tuệ Việt Nam ra thế giới. Trong nước, hầu hết các hệ thống thông tin lớn trong các cơ quan nhà nước và các ngành kinh tế trọng điểm của Việt Nam đều do FPT xây dựng và phát triển.
                    </p>
                </div>
                <div class="number-list">
                    <?php
                    $sqlQuery = "SELECT * FROM fpt_overview";
                    $result = mysqli_query($connection,$sqlQuery);
                    if(mysqli_num_rows($result) > 0) {
                        $row = mysqli_fetch_assoc($result);
                    }
                    ?>
                    <div class="number">
                        <p>
                            Thành lập <br> <span><?php echo $row['year']?></span> <br> NĂM
                        </p>
                    </div>
                    <div class="number">
                        <p>
                            Phủ khắp <br> <span><?php echo $row['province']?></span> <br> TỈNH THÀNH
                        </p>
                    </div>
                    <div class="number">
                        <p>
                            Hiện diện <br> <span><?php echo $row['country']?></span> <br> QUỐC GIA
                        </p>
                    </div>
                    <div class="number">
                        <p>
                            Trên <br> <span><?php echo $row['employee']?></span> <br> NHÂN VIÊN
                        </p>
                    </div>
                    <div class="number">
                        <p>
                            Doanh thu 2017 <br> <span><?php echo $row['revenue']?></span> <br> TỶ VNĐ
                        </p>
                    </div>
                </div>
                <div class="b1-content">
                    <p>Trong cuộc cách mạng 4.0, FPT là Công ty Việt Nam tiên phong trong việc nghiên cứu và phát triển các công nghệ mới về trí tuệ nhân tạo, dữ liệu lớn, điện toán đám mây, di động,… FPT cũng là doanh nghiệp tiên phong đồng hành cùng với các tập đoàn công nghệ hàng đầu thế giới để tạo nên các nền tảng công nghệ số tiên tiến nhất như GE (Predix), Siemens (MindSphere), Airbus (Skywise), Amazon AWS…</p>
                    <p>Vị thế của FPT trên toàn cầu đã được công nhận và khẳng định thông qua danh sách Khách hàng gồm hơn 550 doanh nghiệp lớn trên thế giới, đặc biệt trong đó có gần 80 Khách hàng nằm trong danh sách Fortune 500. Một số tên tuổi khách hàng lớn có thể kể đến Toshiba, Hitachi, Airbus, Deutsche Bank, Unilever, Panasonic…</p>
                    <p>Với định hướng tiên phong nghiên cứu và ứng dụng các xu hướng công nghệ mới nhất,  FPT sẽ tiếp tục là đơn vị đi đầu về chuyển đổi số cho Khách hàng, đưa các công nghệ mới như AI, Big Data, IoT,… vào các giải pháp trong mọi lĩnh vực như giao thông thông minh, y tế thông minh, chính phủ số, … FPT đặt mục tiêu doanh thu từ thị trường nước ngoài đạt 1 tỷ USD và trở thành Tập đoàn toàn cầu hàng đầu Việt Nam về dịch vụ thông minh vào năm 2020.</p>
                </div>
            </div>
        </div>
        <div class="box-fpt-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-4 fpt-culture">
                        <p>Văn hóa FPT</p>
                        <h2>
                            "Tôn đổi đồng, <br> Chí gương sáng"
                        </h2>
                    </div>
                    <div class="col-sm-12 col-lg-4 culture-description">
                        <p>trong đó: “TÔN ĐỔI ĐỒNG” nghĩa là “Tôn trọng cá nhân - Tinh thần đổi mới - Tinh thần đồng đội”, là những giá trị mà tất cả người FPT đều chia sẻ.</p>
                    </div>
                    <div class="col-sm-12 col-lg-4 culture-description">
                        <p>“CHÍ GƯƠNG SÁNG” nghĩa là “Chí công - Gương mẫu - Sáng suốt”, là những phẩm chất cần có của lãnh đạo FPT</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-fpt-3">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/fpt/i-setting-1.png" alt="i-setting-1.png">
                        <span>ĐỊNH HƯỚNG CÔNG NGHỆ</span>
                    </a>
                </div>
                <div class="b-content row">
                    <div class="col-sm-12 col-lg-5 b-content-detail">
                        <p>Trong bối cảnh cả thế giới đang bước vào cuộc Cách mạng công nghiệp lần thứ 4 – cuộc cách mạng số, FPT sẽ là người cùng tiên phong trong xu hướng số hoá thông qua việc xây dựng, ứng dụng và chuyển đối chính mình, không chỉ cải tiến mà còn mang lại những công nghệ với nhiều ứng dụng mới, có khả năng áp dụng thực tiễn cao, mang lại hiệu quả sản xuất kinh doanh cũng như trải nghiệm mới cho khách hàng, từ đó cùng bắt kịp và cùng phát triển trong thế giới số.</p>
                    </div>
                    <div class="col-sm-12 col-lg-7 b-content-img">
                        <img src="images/fpt/technology-orientation.png" alt="technology-orientation.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="box-fpt-4">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/fpt/icon-global-network.png" alt="icon-global-network.png">
                        <span>MẠNG LƯỚI TOÀN CẦU</span>
                    </a>
                </div>
                <div class="b-content row">
                    <div class="col-sm-12 col-lg-5 b-content-img">
                        <img src="images/fpt/global-network.png" alt="global-network.png">
                    </div>
                    <div class="col-sm-12 col-lg-7 b-content-detail">
                        <p>
                            Với sự hiện diện tại 33 quốc gia, FPT có thể phối hợp các nguồn lực trên toàn cầu và tại Việt Nam để cung cấp dịch vụ/giải pháp cho Khách hàng một cách hiệu quả nhất.
                            <br>
                            <br>
                            Tại Việt Nam, FPT có mặt tại tất cả 63/63 tỉnh thành.  Trên thế giới, FPT có mặt tại 33 quốc gia thuộc 5 Châu lục:
                            <br>
                            <strong>Châu Mỹ :</strong> Mỹ
                            <br>
                            <strong>Châu Phi :</strong> Mozambique
                            <br>
                            <strong>Châu Âu :</strong> Anh, Đức, Hà Lan, Pháp, Slovakia
                            <br>
                            <strong>Châu Á :</strong>  Nhật Bản, Hàn Quốc, Trung Quốc, Singapore, Thái Lan, Malaysia, Myanmar, Philippines, Indonesia, Campuchia, Lào, Bangladesh, Kuwait, Việt Nam
                        </p>

                    </div>
                </div>
            </div>
        </div>
        <div class="box-fpt-5">
            <div class="container">
                <div class="b-title">
                    <a>
                        <img src="images/fpt/i-customer-1.png" alt="i-customer-1.png">
                        <span>CÔNG TY THÀNH VIÊN</span>
                    </a>
                </div>
                <div class="b5-customer">
                    <p>FPT cung cấp giải pháp CNTT tổng thể trong 3 lĩnh vực Công nghệ, Viễn thông, Giáo dục và khác, với 6 Công ty thành viên trực thuộc:</p>
                    <div class="tree-customer clearfix">
                        <div class="tree clearfix">
                            <ul class="clearfix">
                                <li>
                                    <a style="font-weight: bold;">
                                        CÁC ĐƠN VỊ THÀNH VIÊN
                                        <br>
                                        TRỰC THUỘC FPT
                                    </a>
                                    <ul>
                                        <li>
                                            <a>
                                                Lĩnh vực
                                                <br>
                                                <span style="font-weight: bold;">CÔNG NGHỆ</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a>
                                                        Công ty TNHH
                                                        <br>
                                                        Hệ Thống
                                                        <br>
                                                        Thông Tin FPT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        Công ty TNHH
                                                        <br>
                                                        Phần Mềm FPT
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>
                                                Lĩnh vực
                                                <br>
                                                <span style="font-weight: bold;">VIỄN THÔNG</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a>
                                                        Công ty Cổ Phần Viễn Thông FPT
                                                    </a>
                                                </li>
                                                <li>
                                                    <a>
                                                        Công ty Cổ Phần Dịch vụ Trực Tuyến FPT
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a>
                                                Lĩnh vực
                                                <br>
                                                <span style="font-weight: bold;">GIÁO DỤC</span>
                                            </a>
                                            <ul>
                                                <li>
                                                    <a>
                                                        Công ty TNHH Giáo Dục FPT
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="box-fpt-6">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                            <span class="title-item">
                                <img src="images/intro/i-contract.png" alt="i-contact.png">
                                <span>LIÊN HỆ</span>
                            </span>
                    </div>
                    <div class="col-sm-12 col-lg-5">
                        <div class="info-contact row">
                            <div class="col-sm-12 col-lg-5 info-contact-2">
                                <div>
                                    <p>Website chính thức:</p>
                                    <p class="icon">
                                        <img src="images/intro/i-web.png" alt="i-web.png">
                                        <strong><a href="#">www.fpt.vn</a></strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-7">
                        <div class="address row">
                            <div class="col-sm-12">
                                <p><strong>TRỤ SỞ CHÍNH:</strong></p>
                                <div class="address-sub">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p>
                                        <a href="#">Tòa nhà FPT Cầu Giấy, số 17 phố Duy Tân, phường Dịch Vọng Hậu, quận Cầu Giấy, Hà Nội, Việt Nam</a>
                                        <br> <a href="#">Tel: +84 24 73007300 | Fax: +84 24 37687410.</a>
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

