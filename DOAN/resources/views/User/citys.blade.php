@extends('layoutUser.index')
@section('content')
    <section class="whats-news-area pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-4 col-md-3">
                            <div class="section-tittle mb-30">
                                <h3>Thành phố </h3>
                            </div>

                        </div>


                        <div class="header-right-btn f-right d-none d-lg-block  col-md-3">
                            <form action="{{ route('searchcity') }}" method="post" style="display: flex">
                                @csrf
                                {{-- <i ></i> --}}
                                <div class="search-box">
                                    <input type="text" placeholder="Tìm thành phố..." name="thanhpho" required>
                                </div>
                                <button type="submit" class="btn btn-primary"
                                    style="background-color: rgb(238, 101, 63);padding: 10px; min-width: 10px; border:0px;"s><i
                                        class="fas fa-search special-tag"></i></button>
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
                    @if (count($Citys) > 0)
                        <div class="row">
                            <div class="col-12">
                                <!-- Nav Card -->
                                <div class="tab-content" id="nav-tabContent">
                                    <!-- card one -->
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <div class="whats-news-caption">
                                            <div class="row">
                                                @foreach ($Citys as $City)
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="single-what-news mb-100">
                                                            <div class="what-img">
                                                                <img height="400px"
                                                                    src="/layoutUser/assets/img/imageCity/{{ $City->Image }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="what-cap">
                                                                <a href="{{ route('getcity', $City->IdCity) }}"><span
                                                                        class="color1">Khám phá</span></a>
                                                                <h4><a href="#">{{ $City->NameCity }}</a></h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <div class="pager"> {{ $Citys->links('pagination::bootstrap-4') }}</div>
                                        </div>
                                    </div>


                                </div>
                                <!-- End Nav Card -->
                            </div>
                        </div>
                    @else
                        <h2> Không tìm thấy thành phố yêu cầu</h2>
                    @endif
                </div>

            </div>
        </div>
    </section>
@endsection
