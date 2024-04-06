@extends('main.main')
@section('header')
@include('main.header')
@endsection
@section('content')

<div class="container">
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('fail'))
    <div class="alert alert-danger">
        {{ session('fail') }}
    </div>
@endif
         <div class="row justify-content-center"> 
        <div class="col-md-6">
<form action="{{route('file.upload')}}"method="post" enctype="multipart/form-data">
    @csrf
                <div class="form-group">
           
                <select class="form-select" name="type" aria-label="Default select example">
                    <option selected>Type</option>
                    <option value="1">News</option>
                    <option value="2">Document</option>
                    <option value="3">Gallary</option>
                </select>
                </div
                ><br>
        <div class="form-group">
           
               <input type="file" name="file" class="form-control form-control-sm" id="inputEmail" >
       </div><br>
       <div class="row">
            <div class="form-outline">
                <textarea placeholder="Enter description" class="form-control" name="discreption" id="textAreaExample1" rows="4"></textarea>

            </div>       <br>
     </div>       <br>
        <div  style="float: right;">
          <button type="submit" class="btn btn-primary btn-sm">Upload <i class="fa fa-upload"></i></button>
        </div>
                <br>
                <br>
                <br>
            </form>
    </div>
 </div>
@endsection
@section('footer')
@include('main.footer')
@endsection