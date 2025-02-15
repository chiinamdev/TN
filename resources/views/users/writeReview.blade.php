@extends('layouts.app')

@section('content')

<div class="col-md-12 py-5 bg-dark hero-header mb-5" style = "margin-top: -25px">
    <div class="container text-center my-5 pt-5 pb-4">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Đánh giá</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb justify-content-center text-uppercase">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Đánh giá</a></li>
            </ol>
        </nav>
    </div>
</div>

<div class="container">
    @if(Session::has('success'))
    <p class=" alert {{Session::get('alert-class','alert-success')}}">{{Session::get('success')}}</p>
    @endif
</div>

<div class="container">
    <div class="col-md-12 bg-dark">
        <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
            <h5 class="section-title ff-secondary text-start text-primary fw-normal"></h5>
            <h1 class="text-white mb-4">Đánh giá</h1>
            <form method="POST" action="{{route('users.review.store')}}" class="col-md-12">
                @csrf
                <div class="row g-3">
                    <div class="col-12">
                        <div class="form-floating">
                            <input type="text" name="user_name" value="{{$user[0]->name}}" class="form-control" id="name" placeholder="Your Name" style="display:none">
                            <input type="text" name="user_id" value="{{$user[0]->id}}" class="form-control" id="user_id" placeholder="Your Name" style="display:none">
                            <input type="text" name="review" class="form-control" id="review" placeholder="review" style="height:105px">
                            <label for="review">Đánh giá của bạn</label>
                        </div>
                    </div>

                    

                    <div class="col-12">
                        <button class="btn btn-primary w-100 py-3" type="submit">Đánh giá ngay</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection