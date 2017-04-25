@extends('admin.master')
@section('title')
    Modify Pinned Video
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Pinned Video Info</h3>

<div class="row">
        <div class="col-lg-12">           

        <div class="well">
                        

<h3 class="text-center text-success">{{Session::get('message')}}</h3>  
            {!! Form::open(['url'=>'/video/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Video Title</label>
            <div class="col-sm-10">
                <input name="videoTitle" value="{{$video->videoTitle}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="id" type="hidden" class="form-control"  required="" value="1">
                <span class="text-danger">{{$errors->has('videoTitle') ? $errors->first('videoTitle'):''}} </span>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Video Description</label>
            <div class="col-sm-10">
                <textarea name="videoDescription" rows="3" class="form-control" >{!!$video->videoDescription!!}</textarea>
                <span class="text-danger">{{$errors->has('videoDescription') ? $errors->first('videoDescription'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Video Link</label>
            <div class="col-sm-10">
                <input name="videoLink" value="{{$video->videoLink}}" type="text" class="form-control" id="inputEmail3" required="">
                <span class="text-danger">{{$errors->has('videoLink') ? $errors->first('videoLink'):''}} </span>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Video Image</label>
            <div class="col-sm-10">
                <img src="{{asset($video->videoImage)}}" height="200" width="300">
                <input value="{{$video->videoImage}}" name="videoImage" type="file" accept="image/*" class="form-control" id="inputEmail3">
                <span class="text-danger">{{$errors->has('videoImage') ? $errors->first('videoImage'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update Pinned Video Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        
        </div>
        </div>
    </div>
</div>
@endsection