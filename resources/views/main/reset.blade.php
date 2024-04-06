
@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')
<div class="custom">
                <div class="card-body">
                <form method="POST" action="{{ route('password.change') }}" class="box">
                        @csrf
                        <div class="tab">
                 @if (Session::get('success'))
              <div class="alert alert-success" >
               {{ Session::get('success')}}
               </div>    
                @endif
              @if (Session::get('fail'))
    <div class="alert alert-danger">
      {{ Session::get('fail')}}
      @endif
    </div>
                <h1>Change Password</h1> <p class="text-muted"> Please enter your login and password!</p>
                 <input type="text"required name="email" placeholder="Username" value="{{ old('email') }}">

                  <input type="password" name="password" placeholder="Password">
                  <input type="password" name="new_password" placeholder="New Password">
                  <input type="password" name="confirm_password" placeholder="Confirm Password">

                   <input type="submit" name="" value="Submit" href="#"> 
                 </form>  </div>
@endsection
@section('footer')
@include('main.footer')
@endsection