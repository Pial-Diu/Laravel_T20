@extends('admin.master')

@section('title')
    Edit News
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Write News</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           

        <div class="well">
                        

<h3 class="text-center text-success">{{Session::get('message')}}</h3>  
            {!! Form::open(['url'=>'/news/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editNewsForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">News Title</label>
            <div class="col-sm-10">
                <input name="newsTitle" value="{{$newsById->newsTitle}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="id" type="hidden" class="form-control"  required="" value="{{$newsById->id}}">
                <input name="newsAuthor" type="hidden" value="{{ Auth::user()->name}}">
                <span class="text-danger">{{$errors->has('newsTitle') ? $errors->first('newsTitle'):''}} </span>
            </div>
          </div>
          
          
          
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">News Short Description</label>
            <div class="col-sm-10">
                <textarea name="newsShortDescription" rows="3" class="form-control" >{!!$newsById->newsShortDescription!!}</textarea>
                <span class="text-danger">{{$errors->has('newsShortDescription') ? $errors->first('newsShortDescription'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">News Long Description</label>
            <div class="col-sm-10">
                <textarea name="newsLongDescription" rows="14" class="form-control" >{!!$newsById->newsLongDescription!!}</textarea>
                <span class="text-danger">{{$errors->has('newsLongDescription') ? $errors->first('newsLongDescription'):''}} </span>
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
            <label for="inputEmail3" class="col-sm-2 control-label">News Image</label>
            <div class="col-sm-10">
                <img src="{{asset($newsById->newsImage)}}" height="200" width="300">
                <input name="newsImage" type="file" accept="image/*" class="form-control" id="inputEmail3">
                <span class="text-danger">{{$errors->has('newsImage') ? $errors->first('newsImage'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Update news Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        
        </div>
        </div>
    </div>
</div>
<script>
        document.forms['editNewsForm'].elements['publicationStatus'].value={{$newsById->publicationStatus}}
</script>

@endsection