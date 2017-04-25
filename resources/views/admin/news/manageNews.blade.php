@extends('admin.master')
@section('title')
    Manage News
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">News List</h3>

<div class="row">
        <div class="col-lg-12">
            <h3 class="text-center text-success">{{Session::get('message')}}</h3>           
            <h3 class="text-center text-danger">{{Session::get('message2')}}</h3>
        <div class="well">
            
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>SL.</th>
                        <th>News Title</th>
                        <th>Short Description</th>
                        <th>Publication Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newss as $news)
                    <tr>
                        <td>{{$news->id}} </td>
                        <td>{{$news->newsTitle}} </td>
                        <td>{!!$news->newsShortDescription!!} </td>
                        <td>{{$news->publicationStatus == 1 ? 'Published' : 'Unpublished'}} </td>
                        <td>
                            <a class="btn btn-info" href="{{url('/news/view/'.$news->id)}}" title="News Details">
                                <span class="glyphicon glyphicon-info-sign">  </span>
                            </a>
                            <a class="btn btn-success" href="{{url('/news/edit/'.$news->id)}}" title="Edit">
                                <span class="glyphicon glyphicon-edit">  </span>
                            </a>
                            <a class="btn btn-danger" href="{{url('/news/delete/'.$news->id)}}" onclick="return confirm('Are you sure?')" title="Delete">
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