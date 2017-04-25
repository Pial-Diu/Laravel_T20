@extends('admin.master')
@section('title')
    Add News
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Write News</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           

        <div class="well">

            {!! Form::open(['url'=>'/news/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">News Name</label>
            <div class="col-sm-10">
                <input name="newsTitle" type="text" class="form-control" id="inputEmail3" required="">
                <input name="newsAuthor" type="hidden" value="{{ Auth::user()->name}}">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">News Short Description</label>
            <div class="col-sm-10">
                <textarea name="newsShortDescription" rows="4" class="form-control" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">News Long Description</label>
            <div class="col-sm-10">
                <textarea name="newsLongDescription" rows="12" class="form-control" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Publication Status</label>
            <div class="col-sm-10">
                <select class="form-control" name="publicationStatus">
                    <option>...Select Publication Status... </option>
                    <option value="1">Published</option>
                    <option value="0">Unpublished</option>
                </select>
            </div>
          </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Article Image</label>
            <div class="col-sm-10">
                <input name="newsImage" type="file" accept="image/*" class="form-control" id="inputEmail3" required="">
                <span class="text-danger">{{$errors->has('newsImage') ? $errors->first('newsImage'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Save News Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>

@endsection