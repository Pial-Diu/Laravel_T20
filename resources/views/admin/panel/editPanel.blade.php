@extends('admin.master')
@section('title')
    Edit Panel Member
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Edit Panel Member</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           

        <div class="well">

            {!! Form::open(['url'=>'/panel/update','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editPanelForm']) !!}
            {{csrf_field()}}
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Member Name</label>
            <div class="col-sm-10">
                <input name="panelName" value="{{$panelById->panelName}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="id" value="{{$panelById->id}}" type="hidden" class="form-control" id="inputEmail3">
            </div>
          </div>
            <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Member Title</label>
            <div class="col-sm-10">
                <input name="panelTitle" value="{{$panelById->panelTitle}}" type="text" class="form-control" id="inputEmail3" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Quote</label>
            <div class="col-sm-10">
                <textarea name="panelQuote" rows="4" class="form-control" >{!!$panelById->panelQuote!!}</textarea>
            </div>
          </div>
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Member's Photo</label>
            <div class="col-sm-10">
                <img src="{{asset($panelById->panelImage)}}" height="200" width="300">
                <input name="panelImage" type="file" accept="image/*" class="form-control" id="inputEmail3">
                <span class="text-danger">{{$errors->has('panelImage') ? $errors->first('panelImage'):''}} </span>
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
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Save Panel Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>

<script>
        document.forms['editPanelForm'].elements['publicationStatus'].value={{$panelById->publicationStatus}}
</script>

@endsection