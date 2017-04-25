@extends('frontEnd.master')

@section('title')
	{{$team->teamName}}
@endsection

@section('mainContent')
	</br>
	<header>
		<h3 style="text-align:center;font-size:28px;color: #3E9CCA;">{{$team->teamName}}</h3>
		<blockquote style="text-align:center">{!!$team->teamDescription!!}
		</blockquote>
	</header>
	<figure style="text-align:center">
		<img src="{{asset($team->teamImage)}}" style="width: 80%;height: 500px" alt="{{$team->teamName}}">
	</figure></br>
	<figcaption style="text-align:center ;color:#3E9CCA">
		<span>{{$team->teamName}} ক্রিকেট দল</span>
	</figcaption></br>
		
		<!--Description-->
	<main style="width:90%;text-align:center;margin-left:60px;">
		<div>
			<p style="font-size:16px">{!!$team->teamDescription!!} </p>
		</div>
	</main>
	</br><hr />
	<h3 style="text-align: center; color: #3E9CCA;"> পরিসংখ্যান </h3></br>
		
		<!--Stats-->
	<section style="width:90%;margin-left:60px;">
		<div>
			<p>{!!$team->teamStat!!}</p>
		</div>
	</section></br>

@endsection