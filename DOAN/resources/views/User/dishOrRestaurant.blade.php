@extends('layoutUser.index')
@section('content')
<section class="whats-news-area pt-50 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row d-flex justify-content-between">
                    <div class="col-lg-4 col-md-3">
                        <div class="section-tittle mb-30">
                            <h3>Quán liên quan đến món</h3>
                        </div>
                    </div>

                </div>
                @if (count($Restaurants) > 0)
                    
             
                <div class="row">

                    <div class="col-lg-12">
                        @foreach ($Restaurants as $Restaurant)
                            <div class="trand-right-single d-flex">
                                <div class="trand-right-img">
                                    <img height="120px" style="border-radius: 10px" width="200px"
                                        src="/layoutUser/assets/img/imageRestaurant/{{ $Restaurant->Restaurant->Image }}"
                                        alt="">
                                </div>
                                <div class="trand-right-cap" style="margin-left: 20px">

                                    <h5>{{ $Restaurant->Restaurant->NameRestaurant }}
                                    @if ($Restaurant->Restaurant->Oustand == 1)
                                        <a style="background-color: rgb(153, 165, 167); padding: 5px; border-radius: 5px" class="genric-btn primary small">Nổi bật</a>
                                    @endif

                                    </h5>
                                     <p>Địa chỉ : {{$Restaurant->Restaurant->Address}}</p> 
                                    <a href="{{ route('getrestaurant', $Restaurant->Restaurant->IdRestaurant) }}" title="Xem quán" style="color: red"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                                      </svg></a>
                                   
                                </div>
                            </div>

                            <hr>
                        @endforeach
                        {{-- <div class="pager"> {{ $Restaurants->links('pagination::bootstrap-4') }}</div>    --}}
                        {{-- <div class="pager"> {{$Restaurants->Restaurant->links('pagination::bootstrap-4') }}</div> --}}
                    </div>
                </div>
                @else
                <div class="row">
                    <div class="col-lg-12">
                        <p>- Xin lỗi,hiện tại món ăn này chưa có thông tin về quán nào</p>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
</section>
@endsection