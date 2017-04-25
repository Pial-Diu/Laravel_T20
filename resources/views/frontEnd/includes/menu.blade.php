
<div class="header">
	
		
		<div class="navigation">
				 <span class="menu"></span> 
                                 <ul class="navig" style="">
                                     <li><a href="{{url('/')}}" class="act">হোম </a></li>
						
						<li><a  href="{{url('/about')}}">আমাদের সম্পর্কে </a></li>
						<li><a href="news.html">ফিকশ্চার </a></li>
                                                <li class="plan active"><a href="single.html">জাতীয় দল</a>
							<ul class="sub-nav sub">
                                                            @foreach($nationalTeams as $nationalTeam)
                                <?php $title = $nationalTeam->teamName; ?>
                                <?php $title = str_replace(' ', '_', $title); ?>
								<li><a href="{{url('/national-team/'.$title)}}">{{$nationalTeam->teamName}}</a></li>
								<!--<li><a href="single.html">Domestic</a></li>-->
                                                            @endforeach
							</ul>
						</li>
                                                <li class="plan active"><a href="single.html">লীগ দল</a>
							<ul class="sub-nav sub">
                                                            @foreach($publichedLeagues as $publichedLeague)
								<li><a href="single.html">{{$publichedLeague->leagueName}}</a></li>
								<!--<li><a href="single.html">Domestic</a></li>-->
                                                            @endforeach
							</ul>
						</li>
                                                <!--<li><a href="#" >আই.পি.এল-২০১৭</a></li>-->
						<li><a href="gallery.html">খবর </a></li>
						<li><a href="trainers.html">ব্লগ </a></li>
						<li><a href="contact.html">ফলাফল </a></li>
						<li><a href="#" >লাইভ স্কোর </a></li>
                                                <li><a href="#" >যোগাযোগ </a></li>
                                                <li class="plan active"><a href="single.html">অন্যান্য</a>
							<ul class="sub-nav sub">
								<li><a href="single.html">Records</a></li>
								<li><a href="single.html">Profiles</a></li>
                                                                <li><a href="single.html">Live Stream</a></li>
                                                                <li><a href="single.html">Useful Links</a></li>
							</ul>
						</li>
                                                <!--<li><a href="#" >Wiki</a></li>-->
						<div class="clearfix"> </div>
					</ul>
					
		</div>
<!--		<div class="search">
				<form>
					<input type="text" placeholder="Type and search..." required=" ">
				</form>
		</div>-->
		<div class="clearfix"> </div>
		</div>