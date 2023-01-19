<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">

            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="/"><img width="40%" src="/layoutUser/assets/img/logo/logochinhthuc.png"
                                        alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="/layoutUser/assets/img/hero/header_card.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-11 col-lg-10 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="/"><img width="30%"
                                        src="/layoutUser/assets/img/logo/logochinhthuc.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">Trang chủ</a></li>
                                        <li><a href="/Citys">Thành phố</a></li>
                                        <li><a href="/Dishs">Món ăn</a></li>
                                        <li><a href="/Map">Map</a></li>
                                        <li><a href="/ConTact">Liên hệ</a></li>
                                        {{-- <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="elements.html">Element</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="details.html">Categori Details</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-1 col-lg-2 col-md-1">

                            <div class="header-right-btn f-right d-none d-lg-block">
                                <form action="{{ route('search') }}" method="post">
                                    @csrf
                                    {{-- <i ></i> --}}
                                    <div class="search-box">
                                        <input type="text" style="margin-top: 13.3%" placeholder="Tìm món ăn..."
                                            name="monan" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary"  style="background-color: rgb(238, 101, 63);border-radius: 50px; padding: 2px; min-width: 10px; border:0px;"s><i class="fas fa-search special-tag"></i></button>
                                </form>

                            </div>
                            {{-- <div class="header-right-btn" style="margin-left: 15%;" >
                                <svg  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                                  </svg>
                            </div> --}}

                        </div>

                        <!-- Mobile Menu -->
                        <div class="col-lg-12">
                            <div class="mobile_menu d-block d-md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
