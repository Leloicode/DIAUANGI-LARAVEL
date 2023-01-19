@extends('layoutUser.index')
@section('content')
<main>
    <!-- Trending Area Start -->
    <div class="trending-area fix">
        <div class="container">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                  
                </div>
                <div class="row" style="margin-top: 25px">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Món ăn nổi bật</h3>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30">
                            <div class="trend-top-img">
                                <img  src="layoutUser/assets/img/imageDish/{{$DishOustand[0]->ImageDish}}" alt="">
                                <div class="trend-top-cap">
                                    <a href="{{ route('getdeliciousfood', $DishOustand[0]->IdDish) }}"><span>Đến Quán</span></a>
                                    <h2 style="text-transform: uppercase;"><a href="details.html">{{$DishOustand[0]->NameDish}}</a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img height="160px" src="layoutUser/assets/img/imageDish/{{$DishOustand[1]->ImageDish}}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            {{-- <span class="color1">Đến quán</span> --}}
                                            <h4><a href="{{ route('getdeliciousfood', $DishOustand[1]->IdDish) }}">{{$DishOustand[1]->NameDish}}</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img  height="160px" src="layoutUser/assets/img/imageDish/{{$DishOustand[2]->ImageDish}}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            {{-- <span class="color2">Đến quán</span> --}}
                                            <h4>
                                                <h4><a href="{{ route('getdeliciousfood', $DishOustand[2]->IdDish) }}">{{$DishOustand[2]->NameDish}}</a></h4>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-bottom mb-35">
                                        <div class="trend-bottom-img mb-30">
                                            <img height="160px" src="layoutUser/assets/img/imageDish/{{$DishOustand[3]->ImageDish}}"
                                                alt="">
                                        </div>
                                        <div class="trend-bottom-cap">
                                            {{-- <span class="color3">Đến quán</span> --}}
                                            <h4><a href="{{ route('getdeliciousfood', $DishOustand[3]->IdDish) }}">{{$DishOustand[3]->NameDish}}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="120px" width="200px" src="layoutUser/assets/img/imageDish/{{$DishOustand[4]->ImageDish}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <a href="{{ route('getdeliciousfood', $DishOustand[4]->IdDish) }}"><span class="color2">Đến Quán</span></a>
                                <h4><a href="{{ route('getdeliciousfood', $DishOustand[4]->IdDish) }}">{{$DishOustand[4]->NameDish}}</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="120px" width="200px" src="layoutUser/assets/img/imageDish/{{$DishOustand[5]->ImageDish}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <a href="{{ route('getdeliciousfood', $DishOustand[5]->IdDish) }}"><span class="color2">Đến Quán</span></a>
                                <h4><a href="{{ route('getdeliciousfood', $DishOustand[5]->IdDish) }}">{{$DishOustand[5]->NameDish}}</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="120px" width="200px" src="layoutUser/assets/img/imageDish/{{$DishOustand[6]->ImageDish}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <a href="{{ route('getdeliciousfood', $DishOustand[6]->IdDish) }}"><span class="color2">Đến Quán</span></a>
                                <h4><a href="{{ route('getdeliciousfood', $DishOustand[6]->IdDish) }}">{{$DishOustand[6]->NameDish}}</a></h4>
                            </div>
                        </div>
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="160px" width="200px" style="margin-top: -8px" src="layoutUser/assets/img/imageDish/{{$DishOustand[7]->ImageDish}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <a href="{{ route('getdeliciousfood', $DishOustand[7]->IdDish) }}"><span class="color2">Đến Quán</span></a>
                                <h4><a href="{{ route('getdeliciousfood', $DishOustand[7]->IdDish) }}">{{$DishOustand[7]->NameDish}}</a></h4>
                            </div>
                        </div>
                        {{-- <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img height="120px" src="layoutUser/assets/img/imageDish/{{$DishOustand[8]->ImageDish}}" alt="">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Skeping</span>
                                <h4><a href="details.html">{{$DishOustand[8]->NameDish}}</a></h4>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Trending Area End -->
    <!--   Weekly-News start -->
    <div class="weekly-news-area pt-50">
        <div class="container">
            <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Quán ăn ưa chuộng</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly-news-active dot-style d-flex dot-style">
                            
                            {{-- <div class="weekly-single active">
                                <div class="weekly-img">
                                    <img src="layoutUser/assets/img/news/weeklyNews1.jpg" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Strike</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div> --}}
                            @foreach ($Restaurants as $Restaurant)
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img width="200px" height="300px" src="layoutUser/assets/img/imageRestaurant/{{$Restaurant->Image}}" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <a href="{{ route('getrestaurant', $Restaurant->IdRestaurant) }}"><span class="color2">Chi tiết</span></a>
                                    <h4><a href="#">{{$Restaurant->NameRestaurant}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                            {{-- <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="layoutUser/assets/img/news/weeklyNews1.jpg" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Strike</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly-single">
                                <div class="weekly-img">
                                    <img src="layoutUser/assets/img/news/weeklyNews1.jpg" alt="">
                                </div>
                                <div class="weekly-caption">
                                    <span class="color1">Strike</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Weekly-News -->
    <!-- Whats New Start -->
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Thành phố ưa thích </h3>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <!-- Nav Card -->
                            <div class="tab-content" id="nav-tabContent">
                                <!-- card one -->
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <div class="whats-news-caption">
                                        <div class="row">
                                            @foreach ($CityOustands as $CityOustand)
                                                
                                        
                                            <div class="col-lg-6 col-md-6">
                                                <div class="single-what-news mb-100">
                                                    <div class="what-img">
                                                        <img height="400px" src="layoutUser/assets/img/imageCity/{{$CityOustand->Image}}"
                                                            alt="">
                                                    </div>
                                                    <div class="what-cap">
                                                        <a href="{{ route('getcity', $CityOustand->IdCity) }}"><span class="color1">Khám phá</span></a>
                                                        <h4><a href="#">{{$CityOustand->NameCity}}</a></h4>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                          
                                
                            </div>
                            <!-- End Nav Card -->
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Whats New End -->
    <!--   Weekly2-News start -->
    {{-- <div class="weekly2-news-area  weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Weekly Top News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="layoutUser/assets/img/news/weekly2News1.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="layoutUser/assets/img/news/weekly2News2.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event night</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="layoutUser/assets/img/news/weekly2News3.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="layoutUser/assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Event time</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="weekly2-single">
                                <div class="weekly2-img">
                                    <img src="layoutUser/assets/img/news/weekly2News4.jpg" alt="">
                                </div>
                                <div class="weekly2-caption">
                                    <span class="color1">Corporate</span>
                                    <p>25 Jan 2020</p>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Weekly-News -->
    <!-- Start Youtube -->
    {{-- <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Politics</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Welcome To The Best Model Winner Contest At Look of the year</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod ipsum
                                    dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit sed do
                                    eiusmod ipsum dolor sit. Lorem ipsum dolor sit amet consectetur adipisicing elit
                                    sed do eiusmod ipsum dolor sit lorem ipsum dolor sit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/CicQIuG8hBo" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/rIz00N40bag" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/CONfhrASy44" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/lq6fL2ROWf8" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/0VxlQlacWV4" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h4>Welcotme To The Best Model Winner Contest</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Start youtube -->
    <!--  Recent Articles start -->
    {{-- <div class="recent-articles">
        <div class="container">
            <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle mb-30">
                            <h3>Recent Articles</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style">
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="layoutUser/assets/img/news/recent1.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="layoutUser/assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="layoutUser/assets/img/news/recent3.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                            <div class="single-recent mb-100">
                                <div class="what-img">
                                    <img src="layoutUser/assets/img/news/recent2.jpg" alt="">
                                </div>
                                <div class="what-cap">
                                    <span class="color1">Night party</span>
                                    <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--Recent Articles End -->
    <!--Start pagination -->
    
    <!-- End pagination  -->
</main>
@endsection