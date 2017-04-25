@extends('admin.master')
@section('title')
    Manage League
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">League List</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           
            <h3 class="text-center text-danger">{{Session::get('message2')}}</h3>
        <div class="well">
            
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>League Name</th>
                        <th>League Origin</th>
                        <th>League Description</th> 
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($leagues as $league)
                    <tr>
                        <td>{{$league->id}} </td>
                        <td>{{$league->leagueName}} </td>
                        <td>{{$league->leagueOrigin}} </td>
                        <td>{!!$league->leagueDescription!!} </td>
                        <td>{{$league->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                        <td>
                            <a class="btn btn-success" href="{{url('/league/edit/'.$league->id)}}" title="Edit">
                                <span class="glyphicon glyphicon-edit">  </span>
                            </a>
                            <a class="btn btn-danger" href="{{url('/league/delete/'.$league->id)}}" onclick="return confirm('Are you sure?')" title="Delete">
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