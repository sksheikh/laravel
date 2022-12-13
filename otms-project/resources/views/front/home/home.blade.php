@extends('front.master')

@section('title')
    Home page
    @endsection

@section('body')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1800">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" ></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('/')}}front/images/slider-image/slider-01.jpg" height="450" class="d-block w-100" alt="Course title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/images/slider-image/slider-02.jpg" height="450" class="d-block w-100" alt="Course title">
            </div>
            <div class="carousel-item">
                <img src="{{asset('/')}}front/images/slider-image/slider-03.jpg" height="450" class="d-block w-100" alt="Course title">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" ></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" ></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">All Courses</h2>
                    <div class="row mt-4">
                        <div class="col-md-4 mt-2">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/course-image/course-01.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Web Development with VUE js</h4>
                                    <p>Price: 25000 tk</p>
                                    <p>Total Hours: 240 hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/course-image/course-01.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Web Development with VUE js</h4>
                                    <p>Price: 25000 tk</p>
                                    <p>Total Hours: 240 hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2">
                            <div class="card">
                                <img src="{{asset('/')}}front/images/course-image/course-01.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Web Development with VUE js</h4>
                                    <p>Price: 25000 tk</p>
                                    <p>Total Hours: 240 hours</p>
                                </div>
                                <div class="card-footer">
                                    <a href="" class="btn btn-success">Enroll Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
