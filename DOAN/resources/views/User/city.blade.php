@extends('layoutUser.index')
@section('content')
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-md-3">
                            <div class="section-tittle mb-30">
                                @isset ($dishSearch)
                                <h3>Món ăn liên quan - TP {{$City->NameCity}}</h3>

                                @else
                                    <h3>Các quán ăn - TP {{$City->NameCity}}</h3>
                                @endisset
                            </div>
                        </div>
                        
                        <div class="header-right-btn f-right d-none d-lg-block  col-md-3">
                            <form action="{{ route('searchdishcity',$City->IdCity) }}" method="post" style="display: flex">
                                @csrf
                                {{-- <i ></i> --}}
                                <div class="search-box">
                                    <input type="text" placeholder="Món ăn của {{$City->NameCity}}..." name="monancity" required>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: rgb(238, 101, 63);padding: 10px; min-width: 10px; border:0px;"s><i
                                        class="fas fa-search special-tag"></i></button>
                            </form>

                        </div>

                    </div>
                    @isset ($dishSearch)
                    @if (count($dishSearch) > 0)
                        
                 
                    <div class="row">

                        <div class="col-lg-12">
                            @foreach ($dishSearch as $Restaurant)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img height="120px" style="border-radius: 10px" width="200px"
                                            src="/layoutUser/assets/img/imageDish/{{ $Restaurant->ImageDish }}"
                                            alt="">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 20px">

                                        <h5>{{ $Restaurant->NameDish }}
                                        @if ($Restaurant->Oustand == 1)
                                            <a style="background-color: rgb(199, 236, 244); padding: 5px; border-radius: 5px" class="genric-btn primary small">Nổi bật</a>
                                        @endif

                                        </h5>
                                        {{-- <p>{{$Restaurant->Description}}</p> --}}
                                        <a href="{{ route('getdeliciousfood', $Restaurant->IdDish) }}" style="color: red">Chi tiết</a>
                                        {{-- <a href="#" class="genric-btn success medium">Nổi bật</a> --}}
                                    </div>
                                </div>

                                <hr>
                            @endforeach

                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-lg-12">
                            <p>- Không có món ăn nào liên quan đến từ khóa"{{$search}}"</p>
                        </div>
                    </div>
                    @endif
                    @else
                    @if (count($Restaurants) > 0)
                        
                 
                    <div class="row">

                        <div class="col-lg-12">
                            @foreach ($Restaurants as $Restaurant)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img height="120px" style="border-radius: 10px" width="200px"
                                            src="/layoutUser/assets/img/imageRestaurant/{{ $Restaurant->Image }}"
                                            alt="">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 20px">

                                        <h5>{{ $Restaurant->NameRestaurant }}
                                        @if ($Restaurant->Oustand == 1)
                                            <a style="background-color: rgb(199, 236, 244); padding: 5px; border-radius: 5px" class="genric-btn primary small">Nổi bật</a>
                                        @endif

                                        </h5>
                                        {{-- <p>{{$Restaurant->Description}}</p> --}}
                                        <a href="{{ route('getrestaurant', $Restaurant->IdRestaurant) }}" style="color: red">Chi tiết</a>
                                        {{-- <a href="#" class="genric-btn success medium">Nổi bật</a> --}}
                                    </div>
                                </div>

                                <hr>
                            @endforeach

                        </div>
                    </div>
                    @else
                    <div class="row">
                        <div class="col-lg-12">
                            <p>- Hiện tại thành phố này chưa có thông tin</p>
                        </div>
                    </div>
                    @endif
                    @endisset
                   
                </div>

            </div>
        </div>
    </section>
@endsection
