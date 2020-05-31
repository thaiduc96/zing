<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Zing.vn</title>
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.1/css/all.css"></link>

    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<header class="header">
    <div class="page-wrapper">
        <div class="container-header">
            <div class="logo">
                <img src="images/logo-zing-home.svg" alt="">
                <span>TRI THỨC TRỰC TUYẾN</span>
                <!-- <p>HỘI XUẤN BẢN VIỆT NAM</p> -->
            </div>
            <div class="category-menu">
                <ul class="header-category-menu">
                    <li><a href="#" title="2abc"> Xuất bản</a></li>
                    <li><a href="#" title="2abc"> Sách</a></li>
                    <li><a href="#" title="2abc"> Tác giả</a></li>
                    <li><a href="#" title="2abc"> Xã hội</a></li>
                    <li><a href="#" title="2abc"> Thế giới</a></li>
                    <li><a href="#" title="2abc"> Kinh doanh</a></li>
                    <li><a href="#" title="2abc"> Công nghệ</a></li>
                    <li><a href="#" title="2abc"> Thể thao</a></li>
                    <li><a href="#" title="2abc"> Giải trí</a></li>
                    <li><a href="#" title="2abc"> Thời trang</a></li>
                    <li class="viewMoreMenu more">...</li>
                </ul>
            </div>
            <div class="toolbox">
                <div class="search-form">
                    <!--<form action="">-->
                    <!--<input type="text" class="input-search">-->
                    <i class="fas fa-search"></i>
                    <!--</form>-->
                </div>
                <div class="avatar">
                    <img src="https://s120-ava-talk.zadn.vn/0/d/3/c/9/120/86d4ac88d033bfb5d964be6407ae5d0a.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="category-popup jsCategoryPopup">
        <div class="page-wrapper">
            <nav class="category-menu">
                <ul class="list-menu">
                    <?php for ($i = 0; $i < 9; $i++) { ?>
                    <li class="item-menu"><a href="#" title="2abc"> Xã hội</a>
                        <div class="subcate">
                            <ul>
                                <li>Chính trị</li>
                                <li>Giáo dục</li>
                                <li>Giao thông</li>
                                <li>Pháp luật</li>
                            </ul>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div class="page-wrapper corona">
    <div class="corona-weather">
        <a class="corona" href="#">
            <strong>CÙNG VƯỢT QUA COVID-19</strong>
            <span class="corona-country">Việt Nam</span>
            <div class="corona-status-info">
                <span>Ca phục hồi: <b> 1.222.222</b></span>
                <span class="corona-status-info-item">Ca nhiễm: <b>4.222.222</b></span>
                <span>Ca tử vong: <b>4.222.222</b></span>
            </div>
        </a>
        <div class="weather">
            <div class="city">
                <strong>Hà Nội</strong>
                <span>36°C / 29-38°C</span>
                <img class="sun" src="https://static-znews.zadn.vn/images/icons/weather/v2/hazy.png">
            </div>
        </div>
    </div>
    <div class="featured">
        <div class="newstrending">
            <?php for ($i = 0; $i < 5; $i++) { ?>
                <div class="newstrending-item">
                    <a class="newstrending-image" href="#">
                        <img src="https://znews-photo.zadn.vn/w210/Uploaded/pwvopivp/2020_05_19/4800.jpg"
                                alt="asdsad">
                    </a>
                    <span>Bức ảnh người cha Ấn Độ bật khóc bên đường gây xúc động khắp thế giới</span>
                </div>
            <?php } ?>
        </div>
        <div class="newsfeatured">
            <div class="newsfeatured-container">
                <div class="newsfeatured-item main-item">
                    <a class="newsfeatured-image" href="#">
                        <img src="https://znews-photo.zadn.vn/w960/Uploaded/jopltui/2020_05_18/Hien2_1.jpg"
                                alt="asdsad">
                    </a>
                    <p>Quân chủng Hải quân đề nghị giảm nhẹ đặc biệt cho ông Nguyễn Văn Hiến</p>
                    <span>Với tư cách bị hại, Quân chủng Hải quân đề nghị xử lý nghiêm nhóm của Đinh Ngọc Hệ và giảm nhẹ đặc biệt cho đô đốc Nguyễn Văn Hiến.</span>
                    <a href="#" class="related">Ông Nguyễn Văn Hiến bị đề nghị 3-4 năm tù, Út 'Trọc' 20 năm tù</a>
                </div>
                <div class="newsfeatured-item-right">
                    <?php for ($i = 0; $i < 2; $i++) { ?>
                        <div class="newsfeatured-item">
                            <a class="newsfeatured-image" href="#">
                                <img src="https://znews-photo.zadn.vn/w480/Uploaded/pgi_dhbpgunat/2020_05_22/2020_05_22T020941Z_941444942_RC2ETG93D8XB_RTRMADP_3_CHINA_PARLIAMENT.JPG"
                                        alt="asdsad">
                            </a>
                            <p>Vì Covid-19, TQ không đặt mục tiêu tăng trưởng GDP cụ thể trong 2020</p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="book">
        <div class="book-header title-header">
            <p class="title-slash">Sách của bạn</p>
        </div>
        <div class="book-content">
            <div class="book-content-slide">
                <?php for ($i = 0; $i < 5; $i+=2) { ?>
                    <div class="book-content-item" id="carousel<?=$i?>" data-index="<?=$i?>">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/jotnhg/2020_05_22/3_Cho_ben_thanh.jpg" alt="hi">
                        <p class="book-content-item-title">Nhà nghiên cứu <?=$i?> tuổi ra mắt tác phẩm tâm huyết về đường phố TP.HCM</p>
                    </div>
                    <div class="book-content-item" id="carousel<?=$i+1?>" data-index="<?=$i+1?>">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/jotnhg/2020_05_22/3_Cho_ben_thanh.jpg" alt="hi">
                        <p class="book-content-item-title">Nhà nghiên cứu <?=$i+1?></p>
                    </div>
                <?php } ?>
            </div>
           
        </div>
        <div class="book-arrows">
                <button class="jsClickBtnArrows btn-book-arrows book-arrows-left">
                    <i class="fas fa-angle-left"></i>
                </button>
                <button class="jsClickBtnArrows btn-book-arrows book-arrows-right">
                    <i class="fas fa-angle-right"></i>
                </button>
        </div>
    </div>

    <div class="multimedia">
        <div class="multimedia-header">
            <h3>MULTIMEDIA</h3>
            <ul class="multimedia-menu">
                <li class="multimedia-item">VIDEO</li>
                <li class="multimedia-item">LONGFORM</li>
                <li class="multimedia-item">VOICES</li>
                <li class="multimedia-item">LENS</li>
                <li class="multimedia-item">QUIZZ</li>
            </ul>
        </div>
        <div class="multimedia-content">
            <div class="multimedia-content-list">
                <?php for ($i = 0; $i < 7; $i+=1) { ?>
                    <div class="multimedia-content-item">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/jotnhg/2020_05_22/3_Cho_ben_thanh.jpg" alt="hi">
                        <?php if($i == 0) {  ?>
                        <span></span>
                        <?php } else { ?>
                        <p class="multimedia-content-item-title">
                            <i class="fas fa-image"></i>Gãy xương ngón tay, áo trắng Võ Thành An chấp nhận bỏ cuộc</p>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    
    <div class="latest">
        <div class="title-header">
            <p class="title-slash">DÀNH CHO BẠN</p>
        </div>
        <div class="latest-content">
            <div class="latest-content-list">
            <?php for ($i = 0; $i < 3; $i++) { ?>
                <div class="latest-content-item">
                    <div class="latest-content-item-img">
                        <img src="https://znews-photo.zadn.vn/w480/Uploaded/jaegtn/2020_05_02/ve_sau_3.jpg">
                    </div>
                    <div class="latest-content-item-content">
                        <p class="latest-content-item-content-title">
                        Hàng triệu ve sầu trồi lên mặt đất sau 17 năm ngủ đông
                        </p>
                        <p class="latest-content-item-content-meta">
                            <span class="time">4 giờ trước</span>
                            <span class="category">Thế giới</span>
                        </p>
                        <p class="latest-content-item-content-description">
                        Xu hướng kết hợp công nghệ và thời trang đang ngày càng phổ biến. Oppo cũng không nằm ngoài cuộc chơi khi bắt tay cùng Prof. Jimmy Choo, OBE để mang đến BST ốp lưng độc lạ.
                        </p>
                    </div>
                </div>
            <?php } ?>
            </div>
            <div class="latest-content-advertisement">
                <img src="https://adtima-media.zadn.vn/2020/05/1dd98ce8-1239-48e5-a9ba-2fcb85e44627.jpg">
            </div>
        </div>
    </div>
    <div class="entertainment">
        <div class="entertainment-content-list">
            <?php for ($j = 0; $j < 8; $j++) { ?>

            <div class="entertainment-content-item">
                <div class="title-header">
                    <p class="title-slash">XUẤT BẢN</p>
                </div>
                <div class="entertainment-content-item-list">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                    <div class="entertainment-content-item-list-item">
                        <div class="entertainment-content-item-list-item-img">
                            <img src="https://znews-photo.zadn.vn/w480/Uploaded/yqdxwpujv/2020_05_23/4Q8A4807_2.jpg">
                        </div>
                        <p class="entertainment-content-item-list-item-title">Liên minh của 2 người từng giàu nhất nước Mỹ được hình thành thế nào?</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>

    <div class="video">
        <div class="title-header">
            <p class="title-slash">VIDEO</p>
        </div>
        <div class="video-content">
            <div class="video-player">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/5oPtGofW4UY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-content-list">
                <?php for ($i = 0; $i < 8; $i++) { ?>

                <div class="video-content-list-item">
                    <div class="video-content-list-item-img">
                        <img src="https://adtima-media.zadn.vn/2020/05/1dd98ce8-1239-48e5-a9ba-2fcb85e44627.jpg">
                        <span class="time-video"><i class="fas fa-play"></i> 00:21</span>
                    </div>
                    <p class="video-content-list-item-title"> Ôtô tải, xe container 'cày' nát đường làng khi né trạm BOT</p>
                </div>
                <?php } ?>

            </div>
        </div> 
    </div>
</div>
<footer>
    <div class="page-wrapper">
        <div class="left-side-info">
            <div class="logo">
                <img src="https://static-znews.zadn.vn/images/logo-zing-home.svg" alt="logo">
            </div>
            <div class="web-info">
                <p> Tạp chí điện tử Tri thức trực tuyến Cơ quan chủ quản: Hội Xuất Bản Việt Nam </p>
                <p>Giấy phép báo chí: số 75/GP-BTTTT</p>
            </div>
        </div>
        <div class="copyright-info">
            <p>© 2020 Toàn bộ bản quyền thuộc Zing</p>
            <div class="menu-footer">
                <span>Liên hệ</span>
                <span>Tuyển dụng</span>
                <span>Quảng cáo</span>
            </div>
        </div>
    </div>
</footer>
</body>
</html>