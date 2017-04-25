@extends('admin.master')
@section('title')
    View News
@endsection
@section('mainContent')

<div id="page-wrapper"><br>
    <h3 class="text-center text-primary">News Details</h3>

<div class="row">
        <div class="col-lg-12">
            
        <div class="well">
<table class="table table-bordered table-hover">
<tr>
    <th style="width:200px;">News ID</th>
    <td>{{$news->id}}</td>
</tr>
<tr>
    <th>News Title</th>
    <td><strong>{{$news->newsTitle}}</strong></td>
</tr>
<tr>
    <th>Author Name</th>
    <td>{{$news->newsAuthor}}</td>
</tr>

<tr>
    <th>News Short Description</th>
    <td>{!! $news->newsShortDescription !!}</td>
</tr>
<tr>
    <th>News Long Description</th>
    <td>{!! $news->newsLongDescription !!}</td>
</tr>
<tr>
    <th>News Image</th>
    <td><img src="{{asset($news->newsImage)}}" alt="{{$news->newsTitle}}" width='300' height="200"></td>
</tr>
<tr>
    <th>Publication Status</th>
    <td>{{$news->publicationStatus == 1 ? 'Published' : 'Unpublished'}}</td>
</tr>

</table>
            </div>
        </div>
    </div>
</div>
@endsection