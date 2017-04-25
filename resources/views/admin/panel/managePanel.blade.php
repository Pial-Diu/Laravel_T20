@extends('admin.master')
@section('title')
    Manage Panel Members
@endsection

@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">Panel Member List</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           
            <h3 class="text-center text-danger">{{Session::get('message2')}}</h3>
        <div class="well">
            
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Member Name</th>
                        <th>Member Title</th>
                        <th>Photo</th>
                        <th>Quote</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($panels as $panel)
                    <tr>
                        <td>{{$panel->id}}. </td>
                        
                        
                        <td>{{$panel->panelName}} </td>
                        <td>{{$panel->panelTitle}} </td>
                        <td >
                            <img src="{{asset($panel->panelImage)}}" alt="{{$panel->panelTitle}}" width='200' height="200">
                        </td>
                        <td><i>{!!$panel->panelQuote!!}</i> </td>
                        <td>{{$panel->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                        <td>
                            <a class="btn btn-success" href="{{url('/panel/edit/'.$panel->id)}}" title="Edit">
                                <span class="glyphicon glyphicon-edit">  </span>
                            </a>
                            <a class="btn btn-danger" href="{{url('/panel/delete/'.$panel->id)}}" onclick="return confirm('Are you sure?')" title="Delete">
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