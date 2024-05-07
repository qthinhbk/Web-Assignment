<div class="page-wrapper">
    <?php if (isset($data)) {
        require_once './mvc/views/' . $data['header'] . '.php';
    } ?>
    <main class="page-main">
        <div class="section-first-screen">
            <div uk-slideshow="animation push">
                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex=-1
                     uk-slideshow="min-height: 300; max-height: 600;">
                    <ul class="uk-slideshow-items">
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="http://pmo82412f.pic23.websiteonline.cn/upload/banner.jpg" alt="slider-1"
                                     data-uk-cover>
                            </div>
                        </li>
                        <li>
                            <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                                <img src="http://pmo82412f.pic23.websiteonline.cn/upload/banner_96.jpg" alt="slider-2"
                                     data-uk-cover>
                            </div>
                        </li>
                    </ul>
                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                       uk-slideshow-item="previous"></a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                       uk-slideshow-item="next"></a>

                </div>
            </div>
        </div>
        <div class="section-features">
            <div class="uk-section uk-container">
                <div class="sectionheader">
                    <h2 class="sectiontitle">BÁCH HÓA XANH CÓ GÌ</h2>
                    <p class="sectiondescription">
                        Chúng tôi cung cấp các loại trái cây, rau củ tươi xanh, các loại thịt, thủy hải sản tươi ngon
                        nhất.
                    </p>
                </div>
                <div class="uk-grid uk-child-width-1-3@s data-uk-grid">
                    <div>
                        <div class="feature-item">
                            <i class="bi bi-brightness-high"></i>
                            <div class="feature-item__title">Sản phẩm sạch, an toàn</div>
                            <div class="feature-item__desc">Sản phẩm của chúng tôi đạt được các chứng nhận của ISO,
                                VietGAP
                                <wbr>
                                về độ an toàn.
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="feature-item">
                            <i class="bi bi-truck"></i>
                            <div class="feature-item__title">Đặt hàng tiện lợi</div>
                            <div class="feature-item__desc">Đặt hàng trực tiếp trên website hoặc gọi tới hotline.</div>
                        </div>
                    </div>
                    <div>
                        <div class="feature-item">
                            <i class="bi bi-award"></i>
                            <div class="feature-item__title">Chuỗi cửa hàng</div>
                            <div class="feature-item__desc">Bách Hóa Xanh có khoảng 300 cửa hàng trải rộng khắp Thành
                                phố Hồ Chí Minh.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="category" style="margin-bottom: 50px;padding-bottom:30px;">
            <div class="sectionheader">
                <h2 class="sectiontitle">DANH MỤC SẢN PHẨM</h2>
                <p class="sectiondescription">
                    Chúng tôi cung cấp các loại trái cây, rau củ tươi xanh, các loại thịt, thủy hải sản tươi ngon nhất
                </p>
            </div>
            <div class="uk-container">
                <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l" data-uk-grid>
                    <li class="category-card" style="text-align :center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/catalog">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/fruit.png" alt="">
                            </div>
                            <h5 class="name">Trái cây</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align :center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/catalog">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/meat.png" alt="">
                            </div>
                            <h5 class="name">Các loại thịt</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align :center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/catalog">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/vegetable.jpg"
                                     alt="">
                            </div>
                            <h5 class="name">Các loại thịt</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align :center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/catalog">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/sea.jpg" alt="">
                            </div>
                            <h5 class="name">Các loại thịt</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section-features">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-2@m uk-flex-middle data-uk-grid" style="margin-top: 50px;">
                    <div>
                        <div class="section-title">
                            <h1 style="font-weight: bold;">CAM KẾT KHI MUA TRÁI CÂY TẠI BÁCH HÓA XANH</h1>
                        </div>

                        <div class="section-content">
                            <p style="color: #56B280">
                            <ul style="list-style-type: none;">
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    Hàng nhập khẩu tận gốc
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    Trái cây bao tươi ngon
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    Dập, hư đền 50.000đ
                                </li>
                                <li>
                                    <i class="bi bi-check-circle"></i>
                                    Giao nhanh trong 2h
                                </li>

                            </ul>
                            <div class="uk-margin-medium-top"><a class="uk-button"
                                                                 href="<?php echo Utils\BASE_URL ?>/home/catalog"><span>Mua ngay</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="uk-text-center" style="padding-top:50px;"><img
                                src="https://cdn.tgdd.vn/Products/Images/8788/295171/bhx/tao-braeburn-mini-nhap-khau-new-zealand-hop-1kg-8-11-trai-202210280833231720.jpg"
                                alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="category" style="padding-bottom:30px;">
            <div class="sectionheader">
                <h2 class="sectiontitle">TRÁI CÂY KHUYẾN MÃI</h2>
                <p class="sectiondescription">
                    Cùng Bách Hóa Xanh giải cứu nông sản sạch của bà con nông dân.
                </p>
            </div>
            <div class="uk-container">
                <ul class="js-filter uk-grid uk-grid-small uk-child-width-1-2@s uk-child-width-1-4@l" data-uk-grid>
                    <li class="category-card" style="text-align: center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/product/11" style="text-decoration: none;">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/products/11.png" alt="">
                            </div>
                            <h5 class="name">Dưa lưới vỏ xanh</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align: center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/product/13" style="text-decoration: none;">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/products/13.png" alt="">
                            </div>
                            <h5 class="name">Nho xanh không hạt</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align: center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/product/31" style="text-decoration: none;">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/products/31.png" alt="">
                            </div>
                            <h5 class="name">Bí xanh</h5>
                        </a>
                    </li>
                    <li class="category-card" style="text-align: center;">
                        <a href="<?php echo Utils\BASE_URL ?>/home/product/12" style="text-decoration: none;">
                            <div class="category-img">
                                <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/products/12.png" alt="">
                            </div>
                            <h5 class="name">Dưa hoàng kim</h5>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section-features">
            <div style="text-align: center; margin-top :10px;padding-top:50px;">
                <h2 class="sectiontitle">ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
            </div>
            <div class="uk-container">
                <div class="uk-grid uk-child-width-1-3@s" data-uk-grid
                     style="text-align: center; padding-top:30px;padding-bottom:50px">
                    <div>
                        <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/customer2.png" alt="">
                        <p style="color: #56B280">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </p>
                        <h5 style="margin-bottom: 0; margin-top: 10px;">Anh Từ Hoàng Phiếm</h5>
                        <em style="color: #56B280">30 tuổi, đến từ quận Tân Bình, TP.HCM</em>
                        <div style="margin-top: 10px;">"Mua hàng online rất tiện lợi và nhanh chóng"</div>
                    </div>

                    <div>
                        <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/customer1.png" alt="">
                        <p style="color: #56B280">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i>
                        </p>
                        <h5 style="margin-bottom: 0; margin-top: 10px;">Chị Trần Huỳnh Trang</h5>
                        <em style="color: #56B280">20 tuổi, đến từ quận 12, TP.HCM</em>
                        <div style="margin-top: 10px;">"Trái cây rất tươi ngon"</div>
                    </div>
                    <div>
                        <div>
                            <img src="<?php echo Utils\BASE_URL ?>/public/assets/img/pages/home/customer3.png" alt="">
                            <p style="color: #56B280">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i>
                            </p>
                            <h5 style="margin-bottom: 0; margin-top: 10px;">Anh Nguyễn Hồng Quang</h5>
                            <em style="color: #56B280">25 tuổi, đến từ quận 9, TP.HCM</em>
                            <div style="margin-top: 10px;">"Giá cả hợp lí."</div>
                        </div>

                    </div>
                </div>
            </div>


    </main>
    <?php require_once './mvc/views/' . $data['footer'] . '.php'; ?>
</div>