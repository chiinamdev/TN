@extends('layouts.app')

@section('content')



<div class="col-md-12 py-5 bg-dark hero-header mb-5" style = "margin-top: -25px">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Thực đơn</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                
                <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
            </ol>
        </nav>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h5 class="section-title ff-secondary text-center text-primary fw-normal">Thực đơn</h5>
            <h1 class="mb-5">Món ngon mỗi ngày</h1>
        </div>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill"
                        href="#tab-1">
                        <i class="fa fa-coffee fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Phổ biến</small>
                            <h6 class="mt-n1 mb-0">Món ăn sáng</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <i class="fa fa-hamburger fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Đặc biệt</small>
                            <h6 class="mt-n1 mb-0">Món ăn trưa</h6>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <i class="fa fa-utensils fa-2x text-primary"></i>
                        <div class="ps-3">
                            <small class="text-body">Lãng mạn</small>
                            <h6 class="mt-n1 mb-0">Món ăn tối</h6>
                        </div>
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($breakfastFoods as $food)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded"
                                    src="{{asset('assets/img/'.$food->image.'')}}" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$food->name}}</span>
                                        <span class="text-primary">{{$food->price}}K</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($food->des,0,70)}}</small>
                                    <a type="button" href="{{route('food.details', $food->id)}}"
                                        class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($launchFoods as $launchFood)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded"
                                    src="{{asset('assets/img/'.$launchFood->image.'')}}" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$launchFood->name}}</span>
                                        <span class="text-primary">{{$launchFood->price}}K</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($launchFood->des,0,70)}}</small>
                                    <a type="button" href="{{route('food.details', $launchFood->id)}}"
                                        class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        @foreach ($dinnerFoods as $dinnerFood)
                        <div class="col-lg-6">
                            <div class="d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid rounded"
                                    src="{{asset('assets/img/'.$dinnerFood->image.'')}}" alt="" style="width: 80px;">
                                <div class="w-100 d-flex flex-column text-start ps-4">
                                    <h5 class="d-flex justify-content-between border-bottom pb-2">
                                        <span>{{$dinnerFood->name}}</span>
                                        <span class="text-primary">{{$dinnerFood->price}}K</span>
                                    </h5>
                                    <small class="fst-italic">{{substr($dinnerFood->des,0,70)}}</small>
                                    <a type="button" href="{{route('food.details', $dinnerFood->id)}}"
                                        class="btn btn-primary py-2 top-0 end-0 mt-2 me-2">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Menu End -->

@endsection