@extends('layoutUser.index')
@section('content')


    <div class="container">
        <div class="row" style="margin-top: 30px">
            <div class="col-lg-12">
                <!-- Trending Tittle -->
                <div class="about-right mb-90">
                    <div class="about-img">
                        <img style="border-radius: 10px" src="/layoutUser/assets/img/imageRestaurant/{{ $Restaurant->Image }}"
                            alt="">
                    </div>
                    <div class="section-tittle mb-30 pt-30">
                        <h3>Thông tin về quán</h3>
                    </div>
                    <div class="about-prea">
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                            </svg> Tên quán ăn: <b>{{ $Restaurant->NameRestaurant }}</b></p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                            </svg> Địa chỉ: <b>{{ $Restaurant->Address }}</b></p>
                        <p><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-return-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z" />
                            </svg> Điện thoại: <b>{{ $Restaurant->Phone }}</b></p>
                    </div>
                    <hr>
                    <div class="section-tittle mb-30 pt-30">
                        <h3>Món ăn của quán</h3>
                    </div>
                  
                        
                  
                    <div class="row">
                        @if (count($Dishs) > 0)
                        <div class="col-lg-12">
                            @foreach ($Dishs as $Dish)
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img height="120px" style="border-radius: 10px" width="200px"
                                            src="/layoutUser/assets/img/imageDish/{{ $Dish->Dish->ImageDish }}" alt="">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 20px">

                                        <h5>{{ $Dish->Dish->NameDish }}
                                        </h5>
                                        <p>{{$Dish->Dish->Description}}</p>
                                    </div>
                                </div>

                                <hr>
                             
                            @endforeach
                            <div class="pager"> {{ $Dishs->links('pagination::bootstrap-4') }}</div>        
                        </div>
                        @else
                        <div class="col-lg-12">
                        <p>- Hiện tại các món ăn chưa có thông tin.</p>
                        </div>
                        @endif
                        <div class="row"> 
                        </div>
                        {{-- <div class="section-tittle mb-30 pt-30">
                            <h3>Đánh giá từ khách hang</h3>
                        </div> --}}
                        <div class="section-tittle mb-30 pt-30">
                            @if (count($Evaluates) > 0)
                            <h3>Đánh giá từ người dùng</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Họ tên</th>
                                        <th>Nội dung</th>
                                        {{-- <th></th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($Evaluates as $Evaluate)

                                    <tr>
                                        {{-- <td scope="row"></td> --}}
                                        <td>{{$Evaluate->Name}}</td>
                                        <td>{{$Evaluate->Content}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pager"> {{ $Evaluates->links('pagination::bootstrap-4') }}</div>        
                            @else
                            
                            
                            @endif
                            <h3>Đánh giá</h3>
                            @if (Session::has('tb'))
                            <div class="alert alert-success">
                                {{ Session::get('tb') }}
                            </div>
                        @endif
                                <form  action="{{ route('addevaluete', $Restaurant->IdRestaurant) }}" method="post" >
                                    @csrf
                                    <input type="text" min="2" max="50" name="name"  placeholder="Tên của bạn" required >
                                    <input type="text" min="2" max="50" required name="value" id="newsletter-form-email" placeholder="Nội dung đánh giá" class="placeholder hide-on-focus" >
                              
                                    <button type="submit" style="cursor: pointer; " name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm"><img src="/layoutUser/assets/img/logo/form-iocn.png" alt=""></button>
                                   
                                    
                                </form>
                       
                        </div>
                    </div>

                </div>
            </div>
            {{-- <div class="col-lg-4">
                <!-- Section Tittle -->
                <div class="section-tittle mb-40">
                    <h3>Sự kiện</h3>
                </div>
                <!-- Flow Socail -->
                <div class="news-poster d-none d-lg-block">
                    <img src="/layoutUser/assets/img/news/news_card.jpg" alt="">
                </div>
                <!-- New Poster -->
                <div class="news-poster d-none d-lg-block">
                    <img src="assets/img/news/news_card.jpg" alt="">
                </div>
            </div> --}}
        </div>

    </div>
@endsection
