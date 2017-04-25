@extends('admin.master')
@section('title')
    View International Team
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">International Team Details</h3>

<div class="row">
        <div class="col-lg-12">
            
        <div class="well">
<table class="table table-bordered table-hover">
<tr>
    <th style="width:170px;">Team ID</th>
    <td>{{$team->id}}</td>
</tr>
<tr>
    <th>Team Name</th>
    <td><strong>{{$team->teamName}}</strong></td>
</tr>
<tr>
    <th>Team Image</th>
    <td><img src="{{asset($team->teamImage)}}" alt="{{$team->teamName}}" width='300' height="200"></td>
</tr>
<tr>
    <th>Team Description</th>
    <td>{!!$team->teamDescription!!}</td>
</tr>

<tr>
    <th>Team Statistics</th>
    <td>{!! $team->teamStat !!}</td>
</tr>
<tr>
    <th>Publication Status</th>
    <td>{{$team->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
</tr>

</table>
            </div>
        </div>
    </div>
</div>
@endsection