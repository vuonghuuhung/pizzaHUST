<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIZZA HUST</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./frontend/WEB-PZH-PIZZA/assets/css/main.css">
    <link rel="stylesheet" href="./frontend/WEB-PZH-PIZZA/assets/css/base.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./frontend/WEB-PZH-PIZZA/assets/font/fontawesome-free-6.2.1-web/fontawesome-free-6.2.1-web/css/all.css">
    <link rel="stylesheet" href="./frontend/WEB-PZH-PIZZA/assets/font/themify-icons-font/themify-icons/themify-icons.css">
</head>

<body>
    <div class="main">
        <!-- header  -->
        @include('home.header')
        <!-- pizzah-container -->
        <div class="pizzah-container">

            <div class="pizzah-find">
                <p class="pizza-find__title font-16px">BỘ LỌC TÌM KIẾM</p>

                <div class="pizza-find-list-box">

                    <p class="pizza-find-list font-15px">Sắp xếp theo</p>
                    <i class="pizza-find-list-icon a-sharp fa-solid fa-chevron-down"></i>

                    <ul class="pizza-find-list-ul">
                        <li class="pizza-find-list-li">
                            <a href="" class="pizza-find-list-link">Giá</a>
                        </li>
                        <li class="pizza-find-list-li">
                            <a href="" class="pizza-find-list-link">Tên</a>
                        </li>
                        <li class="pizza-find-list-li">
                            <a href="" class="pizza-find-list-link">Bán chạy</a>
                        </li>
                    </ul>
                </div>



            </div>

            <div class="pizza-content__box">

                <div class="pizza-content">
                    <!-- pizza-content__item -->

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>

                    <div class="pizza-content__item">
                        <div class="pizza-content__item-img-box">

                            <img src="./frontend/WEB-PZH-PIZZA/assets/img-pizza/Pizza_Banh_Xeo_Tom_Nhay_400x275.jpg" alt="pizza"
                                class="pizza-content__item-img">

                            <div class="pizza-item-content__title cursor-pointer">
                                <p class="pizza-item-content__heading font-15px ">Pizza Bánh Xèo Tôm Nhảy</p>
                                <span class="pizza-item-content__heading-new ">NEW</span>
                            </div>
                        </div>

                        <div class="pizza-content__item-content">

                            <p class="pizza-item-content__list font-14px">
                                Thổi bùng vị giác cùng sự kết hợp mới lạ đến từ hương vị bánh xèo truyền thống trên nền
                                bánh pizza, hòa quyện xốt Mayonnaise, phô mai Mozzarella và nguyên liệu Tôm Nhảy cho
                                khẩu vị cũng phải nhún nhảy từ lát bánh đầu tiên!
                                <span class="pizza-item-content__list-open">...Xem thêm</span>
                            </p>

                            <div class="pizza-item-content__price">
                                <p class="pizza-item-content__price-new font-16px">Giá chỉ từ
                                    <span class="pizza-item-content__price-new-number font-16px">169,000 ₫</span>
                                </p>

                                <a href="" class="pizza-item-content__price-btn font-14px">CHỌN</a>

                            </div>

                        </div>
                    </div>


                </div>




            </div>




        </div>



    </div>


</body>

</html>
