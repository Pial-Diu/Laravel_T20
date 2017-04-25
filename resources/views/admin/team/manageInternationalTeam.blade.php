@extends('admin.master')
@section('title')
    Manage International Team
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">International Team List</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           
            <h3 class="text-center text-danger">{{Session::get('message2')}}</h3>
        <div class="well">
            
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Team Name</th>
                        <th>Team Image</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{$team->id}}. </td>
                        <td>{{$team->teamName}} </td>
                        <td>
                            <img src="{{asset($team->teamImage)}}" style="height:120px;width:200px;" alt="{{$team->teamName}}">
                        </td>
                        <td>{{$team->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                        <td>
                            <a class="btn btn-info" href="{{url('/team/international/view/'.$team->id)}}" title="Team Details">
                                <span class="glyphicon glyphicon-info-sign">  </span>
                            </a>
                            <a class="btn btn-success" href="{{url('/team/international/edit/'.$team->id)}}" title="Edit">
                                <span class="glyphicon glyphicon-edit">  </span>
                            </a>
                            <a class="btn btn-danger" href="{{url('/team/delete/international/'.$team->id)}}" onclick="return confirm('Are you sure?')" title="Delete">
                                <span class="glyphicon glyphicon-trash">  </span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection