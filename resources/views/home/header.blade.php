<header class="pizzah-header">
    <nav class="header-navbar ">

        <div class="navbar-logo">
            <a href="" class="navbar-logo__link">
                <img src="./frontend/WEB-PIZZA-HUT/assets/img/pizza-hut-logo.png" alt="Logo"
                    class="navbar-logo__link--img">
            </a>

        </div>

        <div class="navbar-info">

            <div class="navbar-info__user cursor-pointer">
                {{-- <a href="" class="navbar-info__user--bell">
                    <svg class="navbar-info__user--bell-icon" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                        style="font-size: 27px;">
                        <path
                            d="M19.29 17.29L18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.9 0 1.34-1.08.71-1.71zM16 17H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2z">
                        </path>
                    </svg>
                </a>

                <span class="navbar-info__user--language font-16px font-weight-600">EN</span> --}}

                {{-- <div class="navbar-info__user--info">
                    <svg class="navbar-info__user--icon" focusable="false" viewBox="0 0 24 24" aria-hidden="true">
                        <path fill="#cb1c3b"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z">
                        </path>
                    </svg>
                    <span class="navbar-info__user--info-name font-14px font-weight-600">Thành viên</span>
                </div> --}}
                @if (Route::has('login'))
                @auth
                <x-app-layout>
    
                </x-app-layout>
                @else
                <div class="navbar-info__user--info">
                    <a href="{{ route('login') }}" class="current-login-out">Đăng nhập</a>
                </div>
                <div class="navbar-info__user--info">
                    <a href="{{ route('register') }}" class="current-login-out">Đăng ký</a>
                </div>
                @endauth
                @endif
            </div>

            {{-- <div class="navbar-info__order cursor-pointer">


                <img src="https://cdn.pizzahut.vn/images/Web_V3/OrderTracker/track_your_order.svg"
                    alt="Logo" class="navbar-info__order-icon">

                <span class="navbar-info__fl font-14px font-weight-600 ">Theo Dõi Đơn Hàng</span>
            </div> --}}

        </div>


    </nav>

</header>
