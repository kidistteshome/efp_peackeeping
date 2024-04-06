
@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')
<style>
    .custom {
        display: grid;
    place-items: center;
    margin-bottom:20px;
}

.box {
    padding: 40px;
    background-image: url('../img/un_female_soldier.jpg');
    text-align: center;
    transition: 0.25s;
    
    
}
.box input[type="text"],
.box input[type="password"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px auto;
    text-align: center;
    border: 2px solid #389ebf;
    padding: 10px 10px;
    width: 150px;
    outline: none;
    color: #fbfcfa;
    border-radius: 24px;
    transition: 0.25s
}
   
    .box h1 {
    color: #389ebf;
    text-transform: uppercase;
}
.box input[type="text"]:focus,
.box input[type="password"]:focus {
    width: 300px;
    border-color: #2ecc71;
    color: white;

}
.box input[type="submit"] {
    border: 0;
    background: none;
    display: block;
    margin: 20px  auto;
    text-align: center;
    padding: 14px 40px;
    outline: none;
    color: #389ebf;
    border-radius: 24px;
    transition: 0.25s;
    cursor: pointer
}
.box input[type="submit"]:hover {
    background: #389ebf;
    color:white;
}
.text-muted{
    
}

</style>
<div class="custom">
                <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="box">
                        @csrf

                <h1>Login</h1> <p class="text-muted"> Please enter your login and password!</p>
                 <input type="text"required name="email" placeholder="Username" value="{{ old('email') }}">

                  <input type="password" name="password" placeholder="Password">

                   <a class="forgot text-muted" href="{{ route('change.password') }}">change password?</a> 
                   <input type="submit" name="" value="Login" href="#"> 
                 </form>  </div>
@endsection
@section('footer')
@include('main.footer')
@endsection