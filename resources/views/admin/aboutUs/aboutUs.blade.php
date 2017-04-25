@extends('admin.master')
@section('title')
    About Us
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> About Us Info</h3>

<div class="row">
        <div class="col-lg-12">           

        <div class="well">
                        
<h3 class="text-center text-success">{{Session::get('message')}}</h3>  
            {!! Form::open(['url'=>'/about-us/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">About Us Title</label>
            <div class="col-sm-10">
                <input name="aboutTitle" value="{{$about->aboutTitle}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="id" type="hidden" class="form-control"  required="" value="1">
                <span class="text-danger">{{$errors->has('aboutTitle') ? $errors->first('aboutTitle'):''}} </span>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">About Us Description</label>
            <div class="col-sm-10">
                <textarea name="aboutDescription" rows="12" class="form-control" >{!!$about->aboutDescription!!}</textarea>
                <span class="text-danger">{{$errors->has('aboutDescription') ? $errors->first('aboutDescription'):''}} </span>
            </div>
          </div>
          
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">About Us Image</label>
            <div class="col-sm-10">
                <img src="{{asset($about->aboutImage)}}" height="200" width="300">
                <input value="{{$about->aboutImage}}" name="aboutImage" type="file" accept="image/*" class="form-control" id="inputEmail3">
                <span class="text-danger">{{$errors->has('aboutImage') ? $errors->first('aboutImage'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update About Us Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        
        </div>
        </div>
    </div>
</div>
@endsection