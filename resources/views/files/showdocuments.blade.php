@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')
@foreach($data as $data)

<div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                        <!-- <img class="img-fluid" src="img/project-2.jpg" alt=""> -->
                        <iframe class="img-fluid" src="assets/{{$data->file}}" frameborder="0"></iframe>
                        <a class="case-overlay text-decoration-none" href="">
                            <!-- <small>$data-></small> -->
                            <h5 class="lh-base text-white mb-3">{{$data->discription}}
                            </h5>
                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                        </a>
                        <a class="case-overlay text-decoration-none" href="{{url('/download, $data->file')}}">
                        
                            <span class="btn btn-square btn-primary"> Download<i class="fa fa-download"></i></span>
                        </a>
                    </div>
                </div>                
@endforeach
@endsection
@section('footer')
@include('main.footer')
@endsection