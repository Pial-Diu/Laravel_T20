@extends('frontEnd.master')

@section('mainContent')
	<div class="top-grid-left-left-grids" style="width: 90%; margin-left: 5%;">
										<div style="height:100px; width:100%">
											<h3 style="text-align: center;padding-top: 30px;font-weight: bold; text-shadow: 2px 2px #3E9CCA;">{!!$news->newsTitle!!}</h3>
										</div>


										<div class="s-top-grid-left-img">
											<img src="{{asset($news->newsImage)}}" style="width: 80%; height: 400px; padding-left: 10%;">
											<div  class="single-img-grid">
												<div class="s-author">
													<p>Posted By <a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{$news->newsAuthor}}</a> &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i> June 2, 2016 &nbsp;&nbsp; <a href="#"><i class="fa fa-comments" aria-hidden="true"></i> Comments (10)</a></p>
												</div>
												<div class="s-para">
													<p>{!!$news->newsLongDescription!!}
													</p>
												</div>
											</div>
										</div>
									</div><br>
	
@endsection