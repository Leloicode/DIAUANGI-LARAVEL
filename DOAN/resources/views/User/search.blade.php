@extends('layoutUser.index')
@section('content')
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-4 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Từ tìm kiếm: {{$search}}</h3>
                        </div>
                    </div>

                </div>
                @if (count($Dishs) > 0)
                    
             
                <div class="row">

                    <div class="col-lg-12">
                        @foreach ($Dishs as $Dish)
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img height="120px" style="border-radius: 10px" width="200px"
                                        src="/layoutUser/assets/img/imageDish/{{ $Dish->ImageDish }}"
                                        alt="">
                                </div>
                                <div class="trand-right-cap" style="margin-left: 20px">

                                    <h5>{{ $Dish->NameDish }}
                                    @if ($Dish->Outstand == 1)
                                        <a style="background-color: rgb(153, 165, 167); padding: 5px; border-radius: 5px" class="genric-btn primary small">Nổi bật</a>
                                    @endif

                                    </h5>
                                    {{-- <p>{{$Restaurant->Description}}</p> --}}
                                    <a href="{{ route('getdeliciousfood', $Dish->IdDish) }}" style="color: red">Xem quán</a>
                                    {{-- <a href="#" class="genric-btn success medium">Nổi bật</a> --}}
                                </div>
                            </div>

                            <hr>
                        @endforeach
                        <div class="pager"> {{ $Dishs->links('pagination::bootstrap-4') }}</div>
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-lg-12">
                        <p style="line-height: 150px"> Xin lỗi, không có gì phù hợp với điều kiện tìm kiếm của bạn. Vui lòng thử lại với một số từ khóa khác nhau</p>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection