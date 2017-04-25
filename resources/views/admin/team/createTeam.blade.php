@extends('admin.master')
@section('title')
    Add Team
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary"> Create Team</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>  

        <div class="well">

            {!! Form::open(['url'=>'/team/save','method'=>'POST','class'=>'form-horizontal','enctype'=>'multipart/form-data']) !!}
            {{csrf_field()}}
          
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Team Type</label>
            <div class="col-sm-10">
                <select class="form-control" name="teamType">
                    <option>...Select Team Type... </option>
                    <option value="1">International</option>
                    <option value="0">Domestic</option>
                </select>
            </div>
          </div>
            <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">League Name</label>
            <div class="col-sm-10">
                <select class="form-control" name="teamLeague">
                    <option>...Select League name... </option>
                    @foreach($leagues as $league)
                    <option value="{{$league->leagueName}}">{{$league->leagueName}}</option>
                    @endforeach
                </select>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Team Name</label>
            <div class="col-sm-10">
                <input name="teamName" type="text" class="form-control" id="inputEmail3" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Team Description</label>
            <div class="col-sm-10">
                <textarea name="teamDescription" rows="12" class="form-control" ></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Team Statistics</label>
            <div class="col-sm-10">
                <textarea name="teamStat" rows="12" class="form-control" ></textarea>
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
                <input name="teamImage" type="file" accept="image/*" class="form-control" id="inputEmail3" required="">
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

@endsection