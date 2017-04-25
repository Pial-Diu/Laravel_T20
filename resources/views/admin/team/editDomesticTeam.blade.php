@extends('admin.master')
@section('title')
    Edit Domestic Team
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Edit International Team</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>  

        <div class="well">

            {!! Form::open(['url'=>'/team/update/domestic','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data','name'=>'editInternationalTeamForm']) !!}
            {{csrf_field()}}
          
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Team Name</label>
            <div class="col-sm-10">
                <input name="teamName" value="{{$teamById->teamName}}" type="text" class="form-control" id="inputEmail3" required="">
                <input name="teamType" value="{{$teamById->teamType}}" type="hidden" class="form-control" id="inputEmail3">
                <input name="teamLeague" value="{{$teamById->teamLeague}}" type="hidden" class="form-control" id="inputEmail3">
                <input name="id" value="{{$teamById->id}}" type="hidden" class="form-control" id="inputEmail3" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Team Description</label>
            <div class="col-sm-10">
                <textarea name="teamDescription" rows="12" class="form-control" >{!!$teamById->teamDescription!!}</textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Team Statistics</label>
            <div class="col-sm-10">
                <textarea name="teamStat" rows="12" class="form-control" >{!!$teamById->teamStat!!}</textarea>
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
            <label for="inputEmail3" class="col-sm-2 control-label">Team Image</label>
            <div class="col-sm-10">
                <img src="{{asset($teamById->teamImage)}}" height="200" width="300">
                <input name="teamImage" type="file" accept="image/*" class="form-control" id="inputEmail3">
                <span class="text-danger">{{$errors->has('teamImage') ? $errors->first('teamImage'):''}} </span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-block btn-success" name="sub">Save Team Info</button>
            </div>
          </div>
        {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
<script>
        document.forms['editInternationalTeamForm'].elements['publicationStatus'].value={{$teamById->publicationStatus}}
</script>

@endsection