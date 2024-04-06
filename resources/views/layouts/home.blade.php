@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')
<style>   
</style>
  <!-- Hero Start -->
  <div class="container-fluid pt-5 bg-primary hero-header mb-5">
        <div class="container pt-5">
            <div class="row g-5 pt-5">
                <div class="col-lg-6 align-self-center text-center text-lg-start mb-lg-5">
                    <div class="btn btn-sm border rounded-pill text-white px-3 mb-3 animated slideInRight">AI.Tech</div>
                    <h1 class="display-4 text-white mb-4 animated slideInRight">UN FOR YOUR PEACE</h1>
                    <p class="text-white mb-4 animated slideInRight">Tempor rebum no at dolore lorem clita rebum rebum ipsum
                        rebum stet dolor sed justo kasd. Ut dolor sed magna dolor sea diam. Sit diam sit</p>
                 
                    <a href="" class="btn btn-outline-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">Contact Us</a>
                </div>
                <div class="col-lg-6 align-self-end text-center text-lg-end">



                    <div class="margin">
                    <div id="carouselId" class="carousel slide position-relative" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active rounded">
                                    <img src="img/scroll1_header.jpg" class="img-fluid w-100 h-100 bg-secondary rounded" alt="First slide">
                                </div>
                                <div class="carousel-item rounded">
                                    <img src="img/scroll3_header.jpg" class="img-fluid w-100 h-100 rounded" alt="Second slide">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(20, 24, 62, 0.7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn btn-square bg-white btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-light p-3"
                            placeholder="Type search keyword">
                        <button class="btn btn-light px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/un_female_soldier.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">About Us</div>
                    <h1 class="mb-4">We Make Your Business Smarter with Artificial Intelligence</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <p class="mb-4">Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no
                        labore lorem sit. Sanctus clita duo justo et tempor.</p>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>Award Winning</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Professional Staff</h6>
                        </div>
                        <div class="col-sm-6">
                            <h6 class="mb-3"><i class="fa fa-check text-primary me-2"></i>24/7 Support</h6>
                            <h6 class="mb-0"><i class="fa fa-check text-primary me-2"></i>Fair Prices</h6>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mt-4">
                        <a class="btn btn-primary rounded-pill px-4 me-3" href="">Read More</a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square me-3" href=""><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
 <!-- Case Start -->
 <div class="container-fluid bg-light py-5">
        <div class="container py-5">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Case Study</div>
                <h1 class="mb-4">Explore Our Recent AI Case Studies</h1>
            </div>
            <div class="row g-4">
            @foreach($news as $news)

<div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s"  style="height:300px; ">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <!-- <img class="img-fluid" src="img/project-2.jpg" alt=""> -->
                        <iframe class="img-fluid" style="height:300px; "  src="assets/{{$news->file}}" frameborder="0"></iframe>
                        <a class="case-overlay text-decoration-none" href="">
                            <!-- <small>$data-></small> -->
                            <!-- <p>{{$news->discription}}</p>  -->
                            <!-- <h5 class="lh-base text-white mb-3" id="readMoreLink">... -->
                            <!-- </h5> -->
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                        <!-- <a class="case-overlay text-decoration-none" href="{{url('/download, $news->file')}}">
                        
                            <span class="btn btn-square btn-primary"> Download<i class="fa fa-download"></i></span>
                        </a> -->
                    </div>
                </div>                
@endforeach
            </div>
        </div>
    </div>
    <!-- Case End -->


    <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="btn btn-sm border rounded-pill text-primary px-3 mb-3">Our Services</div>
                    <h1 class="mb-4">Our Excellent AI Solutions for Your Business</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                        amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus
                        clita duo justo et tempor eirmod magna dolore erat amet</p>
                    <a class="btn btn-primary rounded-pill px-4" href="">Read More</a>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-robot fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Robotic Automation</h5>
                                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                            diam sed stet lorem.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-power-off fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Machine learning</h5>
                                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                            diam sed stet lorem.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                                <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-graduation-cap fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Education & Science</h5>
                                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                            diam sed stet lorem.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.7s">
                                    <div class="service-item d-flex flex-column justify-content-center text-center rounded">
                                        <div class="service-icon btn-square">
                                            <i class="fa fa-brain fa-2x"></i>
                                        </div>
                                        <h5 class="mb-3">Predictive Analysis</h5>
                                        <p>Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                            diam sed stet lorem.</p>
                                        <a class="btn px-3 mt-auto mx-auto" href="">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <div class="wrapper">
        <div class="track">
        <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_1.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_2.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_3.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_4.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_5.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_6.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrolling_7.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_8.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/main_scrollimg_1.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
           
            <div class="logo">
            <div class="border border-primary rounded position-relative vesitable-item">
                        <div class="vesitable-img">
                            <img src="img/vegetable-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
                        </div>
                      
            </div>
            </div>
        </div>
    </div>
        <!-- Vesitable Shop End -->

            <div class="row g-5">
                <div class="col-lg-6 align-self-center mb-md-5 pb-md-5 wow fadeIn" data-wow-delay="0.3s">
                    
                 
                 
                 
                    <div class="row g-4 pt-3">
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-users fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">9999</h2>
                                    <p class="text-white mb-0">Happy Clients</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex rounded p-3" style="background: rgba(256, 256, 256, 0.1);">
                                <i class="fa fa-check fa-3x text-white"></i>
                                <div class="ms-3">
                                    <h2 class="text-white mb-0" data-toggle="counter-up">9999</h2>
                                    <p class="text-white mb-0">Project Complete</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
            </div>
        </div>
    </div>
    <!-- Feature End -->

   
@endsection
@section('footer')
@include('main.footer')
@endsection
