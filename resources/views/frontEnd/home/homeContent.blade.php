@extends('frontEnd.master')

@section('title')
    T20 Live
@endsection


@section('mainContent')

<div id="page-wrapper">
				<div class="top-grids">
					<div class="top-grids-info">
                                            
						<!-- top-grid-left -->
						<div class="col-md-9 top-grid-left">
                                                    
							<!-- top-big-grids -->
							<div class="top-big-grids">
								<div class="col-md-8 top-grid-left-left">
									<div class="top-grid-left-left-grids">
										<div class="col-md-8 top-grid-left-img">
											<div data-video="{{$video->videoLink}}" id="video"> 
                                                                                            <img src="{{asset($video->videoImage)}}" style="width:407px;height:228px;" alt="Use your own screenshot."> 
											</div>
										</div>
										<div class="col-md-4 top-grid-left-info">
											<a class="text" href="single.html">{!!$video->videoTitle!!}</a>
											<p>{!!$video->videoDescription!!}</p>
											<div class="t-grid">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 2h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Ornare Congue</a></li>
												</ul>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>
									<!-- three-grids -->
<!--									<div class="three-grids">
										<div class="three-grid">
											<div class="three-grid-info">
												<div class="three-grid-img">
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f2.jpg" alt="" /></a>
												</div>
												<div class="three-grid-text">
													<div class="three-grid-text-heading">
														<a class="text" href="single.html">Fusce ornare congue ligula vel placerat</a>
													</div>
													<div class="t-grid author-grid">
														<ul>
															<li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
															<li><a href="#"><i class="fa fa-user"></i> Vestibulum</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="three-grid">
											<div class="three-grid-info">
												<div class="three-grid-img">
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f4.jpg" alt="" /></a>
												</div>
												<div class="three-grid-text">
													<div class="three-grid-text-heading">
														<a class="text" href="single.html">Fusce ornare congue ligula vel placerat</a>
													</div>
													<div class="t-grid author-grid">
														<ul>
															<li><a href="#"><i class="fa fa-clock-o"></i> 2h</a></li>
															<li><a href="#"><i class="fa fa-user"></i> Cras pretium </a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="three-grid">
											<div class="three-grid-info">
												<div class="three-grid-img">
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f6.jpg" alt="" /></a> 
												</div>
												<div class="three-grid-text">
													<div class="three-grid-text-heading">
														<a class="text" href="single.html">Fusce ornare congue ligula vel placerat</a>
													</div>
													<div class="t-grid author-grid">
														<ul>
															<li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
															<li><a href="#"><i class="fa fa-user"></i> Phasellus</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="clearfix"> </div>
									</div>-->
									<!-- //three-grids -->
									<!-- two-grids -->
									<div class="two-grids">
<!--										<div class="col-md-6 two-grid-left">
											<div class="two-grid-info">
												<div class="two-grid-img">
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f1.jpg" alt="" /></a>
												</div>
												<div class="two-grid-text">
													<div class="three-grid-text-heading two-grid-text-heading">
														<a class="text" href="single.html">Fusce ornare congue ligula vel placerat</a>
														<p>Nam id sollicitudin felis. Nulla non bibendum arcu. Vestibulum non venenatis risus.Suspendisse venenatis venenatis mi, et cursus risus vehicula non.</p>
													</div>
													<div class="t-grid author-grid two-grid-author">
														<ul>
															<li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
															<li><a href="#"><i class="fa fa-user"></i> Suspendisse</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>-->
<br>                                                                              
                                       @foreach($newss as $news) 
                                                                                
										<div class="col-md-6 two-grid-right">
											<div class="two-grid-info">
                                                                                            <br>
												<div class="two-grid-img">
                                                                                                    <a href="single.html"><img style="width:275px; height: 156px;" src="{{asset($news->newsImage)}}" alt="" /></a>
												</div>
										<div class="two-grid-text">
											<div class="three-grid-text-heading two-grid-text-heading">
											<?php $temp = $news->newsTitle ?>
											<?php $title = str_replace(' ', '_', $temp); ?>

												<a class="text" href="{{url('/singleNews/'.$title)}}"><b>{!!$news->newsTitle!!}</b></a>
												<p>{!!mb_substr($news->newsShortDescription,0,150)."...";!!}</p>
											</div>
											<div class="t-grid author-grid two-grid-author">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 6h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Vestibulum</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
										
                                                                                <!--<div class="clearfix"> </div>-->
                                                                                @endforeach
									</div>
                                                                        <hr><hr>
									<!-- //two-grids -->
									<!-- two-grids-bottom -->
									<div class="two-grids-bottom">
										<div class="two-grids-bottom-grids">
											<div class="col-md-6 two-grids-bottom-grid">
												<div class="two-grids-bottom-grid-img">
													<a href="single.html">Cras euismod tortor sit amet sem dapibus lacinia vel ut felis</a>
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f5.jpg" alt="" /></a>
												</div>
												<div class="two-grids-bottom-grid-info">
													<ul>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Mauris ac vestibulum lectus</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam condimentum tempor ex id tempor</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Aenean tempus nunc non leo porta</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam tincidunt dui vulputate ullamcorper</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Duis lacus enim, fermentum sit amet</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Donec vitae est vitae mi consectetur</a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-6 two-grids-bottom-grid">
												<div class="two-grids-bottom-grid-img">
													<a href="single.html">Donec vitae est vitae mi consectetur molestie at ac ex</a>
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f3.jpg" alt="" /></a>
												</div>
												<div class="two-grids-bottom-grid-info">
													<ul>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Mauris ac vestibulum lectus</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam condimentum tempor ex id tempor</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam tincidunt dui vulputate ullamcorper</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Duis lacus enim, fermentum sit amet</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Donec vitae est vitae mi consectetur</a></li>
													</ul>
												</div>
											</div>
											<div class="clearfix"> </div>
										</div>
										<div class="two-grids-bottom-grids">
											<div class="col-md-6 two-grids-bottom-grid">
												<div class="two-grids-bottom-grid-img">
													<a href="single.html">Proin urna mauris, consequat quis nisl non tincidunt pharetra</a>
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f9.jpg" alt="" /></a>
												</div>
												<div class="two-grids-bottom-grid-info">
													<ul>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Mauris ac vestibulum lectus</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Aenean tempus nunc non leo porta</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam tincidunt dui vulputate ullamcorper</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Duis lacus enim, fermentum sit amet</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Donec vitae est vitae mi consectetur</a></li>
													</ul>
												</div>
											</div>
											<div class="col-md-6 two-grids-bottom-grid">
												<div class="two-grids-bottom-grid-img">
													<a href="single.html">Nunc metus neque, placerat at sapien eget, tempor</a>
													<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f2.jpg" alt="" /></a>
												</div>
												<div class="two-grids-bottom-grid-info">
													<ul>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Mauris ac vestibulum lectus</a></li>
														<li><a href="single.html"><i class="fa fa-arrow-right"></i> Nam condimentum tempor ex id tempor</a></li>
														<li><a href="v_single.html"><i class="fa fa-play-circle-o"></i> Donec vitae est vitae mi consectetur</a></li>
													</ul>
												</div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
									<!-- two-grids-bottom -->
									<!-- more-news -->
									<div class="more-news">
										<div class="more-news-heading">
											<h3>More News</h3>
										</div>
										<div class="more-news-grids">
											<div class="col-md-6 more-news-left">
												<div class="news-grids-bottom">
													<!-- date -->
													<div id="design" class="date">
														<div id="cycler">   
															<div class="date-text">
																<h4>Premier League</h4>
																<ul>
																	<li><a href="single.html"><i class="fa fa-arrow-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																	<li><a href="V_single.html"><i class="fa fa-play-circle-o"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																</ul>
															</div>
															<div class="date-text">
																<h4>Championship</h4>
																<ul>
																	<li><a href="single.html"><i class="fa fa-arrow-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																	<li><a href="V_single.html"><i class="fa fa-play-circle-o"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																	<li><a href="V_single.html"><i class="fa fa-play-circle-o"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																</ul>
															</div>
															<div class="date-text">
																<h4>FA Cup</h4>
																<ul>
																	<li><a href="single.html"><i class="fa fa-arrow-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																	<li><a href="V_single.html"><i class="fa fa-play-circle-o"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																</ul>
															</div>
															<div class="date-text">
																<h4>Champions League</h4>
																<ul>
																	<li><a href="V_single.html"><i class="fa fa-play-circle-o"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																</ul>
															</div>
															<div class="date-text">
																<h4>Champions League</h4>
																<ul>
																	<li><a href="single.html"><i class="fa fa-arrow-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
																</ul>
															</div>
														</div>
														<script>
															function cycle($item, $cycler){
																setTimeout(cycle, 2000, $item.next(), $cycler);
																
																$item.slideUp(1000,function(){
																	$item.appendTo($cycler).show();        
																});
												
																}
															cycle($('#cycler div:first'),  $('#cycler'));
														</script>
													</div>
													<!-- //date -->
												</div>
											</div>
											<div class="col-md-6 more-news-left">
												<div class="more-news-left-heading">
													<h4>June 09,2015</h4>
												</div>
												<div class="news-right-grids">
													<div class="news-right-grids-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f7.jpg" alt="" /></a>
													</div>
													<div class="news-right-grids-info">
														<a href="single.html">Scottish Cup</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids">
													<div class="news-right-grids-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt="" /></a>
													</div>
													<div class="news-right-grids-info">
														<a href="single.html">League Cup</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="more-news-left-heading">
													<h4>July 17,2015</h4>
												</div>
												<div class="news-right-grids">
													<div class="news-right-grids-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f10.jpg" alt="" /></a>
													</div>
													<div class="news-right-grids-info">
														<a href="single.html">Welsh Football</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="more-news-left-heading">
													<h4>August 01,2015</h4>
												</div>
												<div class="news-right-grids">
													<div class="news-right-grids-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt="" /></a>
													</div>
													<div class="news-right-grids-info">
														<a href="single.html">National League</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="more-news-left-heading">
													<h4>September 24,2015</h4>
												</div>
												<div class="news-right-grids">
													<div class="news-right-grids-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f13.jpg" alt="" /></a>
													</div>
													<div class="news-right-grids-info">
														<a href="single.html">Women's Football</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
											<div class="clearfix"> </div>
										</div>
									</div>
									<!-- //more-news -->
								</div>
								<!-- top-grid-left-right -->
								<div class="col-md-4 top-grid-left-right">
									<div class="top-grid-left-right-grid">
										<div class="top-grid-left-right-img">
											<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt="" /></a>
										</div>
										<div class="top-grid-left-right-info">
											<a class="text" href="single.html">Phasellus ligula lectus</a>
											<p>Nam id sollicitudin felis. Nulla non bibendum arcu.Suspendisse venenatis venenatis mi, et cursus risus vehicula non.</p>
											<div class="t-grid right-info-t-grid">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Quisque massa</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="top-grid-left-right-grid">
										<div class="top-grid-left-right-top">
											<a href="single.html">Maecenas ut molestie neque, eget faucibus turpis</a>
											<p>Nunc accumsan neque id massa molestie, ac semper quam maximus.Maecenas suscipit, ipsum vel condimentum</p>
										</div>
										<div class="top-grid-left-right-img">
											<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f14.jpg" alt="" /></a>
										</div>
										<div class="top-grid-left-right-info">
											<a class="text" href="single.html">Lorem ipsum dolor sit amet</a>
											<p>Nam id sollicitudin felis. Nulla non bibendum arcu.Suspendisse venenatis venenatis mi, et cursus risus vehicula non.</p>
											<div class="t-grid right-info-t-grid">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Ornare Congue</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="top-grid-left-right-grid">
										<div class="top-grid-left-right-top">
											<a href="single.html">Maecenas ut molestie neque, eget faucibus turpis</a>
											<p>Nunc accumsan neque id massa molestie, ac semper quam maximus.Maecenas suscipit, ipsum vel condimentum</p>
										</div>
										<div class="top-grid-left-right-img">
											<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f13.jpg" alt="" /></a>
										</div>
										<div class="top-grid-left-right-info">
											<a class="text" href="single.html">Donec sodales consectetur ex, in euismod odio pharetra eget</a>
											<p>Nam id sollicitudin felis. Nulla non bibendum arcu.Suspendisse venenatis venenatis mi, et cursus risus vehicula non.</p>
											<div class="t-grid right-info-t-grid">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Sed leo leo</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="top-grid-left-right-grid">
										<div class="top-grid-left-right-top">
											<a href="single.html">Maecenas ut molestie neque, eget faucibus turpis</a>
											<p>Nunc accumsan neque id massa molestie, ac semper quam maximus.Maecenas suscipit, ipsum vel condimentum</p>
										</div>
										<div class="top-grid-left-right-img">
											<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f1.jpg" alt="" /></a>
										</div>
										<div class="top-grid-left-right-info">
											<a class="text" href="single.html">Donec sodales consectetur ex, in euismod odio pharetra eget</a>
											<p>Nam id sollicitudin felis. Nulla non bibendum arcu.Suspendisse venenatis venenatis mi, et cursus risus vehicula non.</p>
											<div class="t-grid right-info-t-grid">
												<ul>
													<li><a href="#"><i class="fa fa-clock-o"></i> 7h</a></li>
													<li><a href="#"><i class="fa fa-user"></i> Donec sodales</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="top-news">
										<div class="top-news-heading">
											<h3>Top News</h3>
										</div>
										<div class="top-news-grids">
											<div class="top-news-grid">
												<div class="top-news-grid-heading">
													<a href="single.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean rutrum ac nulla</a>
												</div>
												<div class="t-grid top-t-grid">
													<ul>
														<li><a href="#"><i class="fa fa-clock-o"></i> 1h</a></li>
														<li><a href="#"><i class="fa fa-user"></i> Vivamus nibh</a></li>
													</ul>
												</div>
											</div>
											<div class="top-news-grid">
												<div class="top-news-grid-heading">
													<a href="single.html">Duis orci enim, rutrum vel sodales ut, tincidunt nec turpis.</a>
												</div>
												<div class="t-grid top-t-grid">
													<ul>
														<li><a href="#"><i class="fa fa-clock-o"></i> 3h</a></li>
														<li><a href="#"><i class="fa fa-user"></i> Cras pretium</a></li>
													</ul>
												</div>
											</div>
											<div class="top-news-grid">
												<div class="top-news-grid-heading">
													<a href="single.html">Sed leo leo, porta vel commodo in, vulputate eu est. In rhoncus tempor dictum. </a>
												</div>
												<div class="t-grid top-t-grid">
													<ul>
														<li><a href="#"><i class="fa fa-clock-o"></i> 4h</a></li>
														<li><a href="#"><i class="fa fa-user"></i> Aenean rutrum</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!-- top-grid-left-right -->
								<div class="clearfix"> </div>
							</div>
							<!-- //top-big-grids -->
						</div>
						<!-- //top-grid-left -->
						<!-- top-grid-right -->
						<div class="col-md-3 top-grid-right">
							<!-- today-match -->
                                                         
                                                        
							<div class="today-match">
								<div class="today-match-heading">
									<h2 class="text-center"><b>আজকের ম্যাচ</b></h2>
								</div>
<!--								<div class="match-grid">
									<div class="match-info">
										<ul>
											<li><span>16:00</span> Germany <span class="color">Vs</span> England</li>
											<li><span>17:30</span> Hungary <span class="color">Vs</span> Croatia</li>
											<li><span>18:45</span> Finland <span class="color">Vs</span> Austria</li>
											<li><span>19:00</span> Poland <span class="color">Vs</span> Spain</li>
											<li><span>20:15</span> Italy <span class="color">Vs</span> France</li>
											<li><span>20:45</span> Portugal <span class="color">Vs</span> Netherlands</li>
										</ul>
									</div>
								</div>-->

<script type="text/javascript"> 
 app="www.cricwaves.com"; mo="f1_kzd"; nt="flash"; mats =""; tor =""; Width="302px"; Height="252px"; wi ="w"; 
 co ="flash"; ad="2"; 
</script>
<script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
							</div>
							<!-- //today-match -->
							<!-- ranking -->
							<div class="ranking">
								<div class="ranking-heading">
                                                                    <h3 class="text-center"><b>আই.সি.সি ওয়ার্ল্ড র‍্যাঙ্কিং</b></h3>
								</div>
<!--								<div class="ranking-grids">
									<table>
										<thead>
											<th class="th-rank">
												Rank
											</th>
											<th class="th-country">
												Country
											</th>
											<th class="th-t-points">
												Total Points
											</th>
											<th class="th-p-points">
												Previous Points
											</th>
										</thead>
										<tbody>
											<tr class="b-color">
												<td class="rank">
													1.
												</td>
												<td class="country">
													Belgium
												</td>
												<td class="t-points">
													1506
												</td>
												<td class="t-points p-points">
													1494
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													2.
												</td>
												<td class="country">
													Argentina
												</td>
												<td class="t-points">
													1457
												</td>
												<td class="t-points p-points">
													1455
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													3.
												</td>
												<td class="country">
													Spain
												</td>
												<td class="t-points">
													1374
												</td>
												<td class="t-points p-points">
													1370
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													4.
												</td>
												<td class="country">
													Germany
												</td>
												<td class="t-points">
													1355
												</td>
												<td class="t-points p-points">
													1347
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													5.
												</td>
												<td class="country">
													Chile
												</td>
												<td class="t-points">
													1307
												</td>
												<td class="t-points p-points">
													1293
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													6.
												</td>
												<td class="country">
													Brazil
												</td>
												<td class="t-points">
													1254
												</td>
												<td class="t-points p-points">
													1251
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													7.
												</td>
												<td class="country">
													Portugal
												</td>
												<td class="t-points">
													1234
												</td>
												<td class="t-points p-points">
													1219
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													8.
												</td>
												<td class="country">
													Colombia
												</td>
												<td class="t-points">
													1215
												</td>
												<td class="t-points p-points">
													1211
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													9.
												</td>
												<td class="country">
													England
												</td>
												<td class="t-points">
													1112
												</td>
												<td class="t-points p-points">
													1106
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													10.
												</td>
												<td class="country">
													Austria
												</td>
												<td class="t-points">
													1095
												</td>
												<td class="t-points p-points">
													1091
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													11.
												</td>
												<td class="country">
													Uruguay
												</td>
												<td class="t-points">
													1082
												</td>
												<td class="t-points p-points">
													1074
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													12.
												</td>
												<td class="country">
													Switzerland
												</td>
												<td class="t-points">
													1070
												</td>
												<td class="t-points p-points">
													1050
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													13.
												</td>
												<td class="country">
													Ecuador
												</td>
												<td class="t-points">
													1039
												</td>
												<td class="t-points p-points">
													1040
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													14.
												</td>
												<td class="country">
													Italy
												</td>
												<td class="t-points">
													999
												</td>
												<td class="t-points p-points">
													991
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													15.
												</td>
												<td class="country">
													Netherlands
												</td>
												<td class="t-points">
													997
												</td>
												<td class="t-points p-points">
													994
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													16.
												</td>
												<td class="country">
													Romania
												</td>
												<td class="t-points">
													990
												</td>
												<td class="t-points p-points">
													987
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													17.
												</td>
												<td class="country">
													Wales
												</td>
												<td class="t-points">
													984
												</td>
												<td class="t-points p-points">
													974
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													18.
												</td>
												<td class="country">
													Croatia
												</td>
												<td class="t-points">
													965
												</td>
												<td class="t-points p-points">
													958
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													19.
												</td>
												<td class="country">
													Hungary
												</td>
												<td class="t-points">
													951
												</td>
												<td class="t-points p-points">
													945
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													20.
												</td>
												<td class="country">
													Turkey
												</td>
												<td class="t-points">
													943
												</td>
												<td class="t-points p-points">
													933
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>-->
<script> d="www.cricwaves.com"; wi ="w"; co ="100"; </script> <script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/iccScript.js"></script>							<div class="player-rank">
								<div class="ranking-heading">
									<h3>Top 10 Players</h3>
								</div>
								<div class="ranking-grids">
									<table>
										<thead>
											<th class="th-rank">
												Rank
											</th>
											<th class="th-country">
												Name
											</th>
											<th class="th-t-points">
												Position
											</th>
											<th class="th-p-points">
												Club
											</th>
											<th class="th-p-points">
												Nationality
											</th>
										</thead>
										<tbody>
											<tr class="b-color">
												<td class="rank">
													1.
												</td>
												<td class="country">
													<a href="club.html">Lionel Messi</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">Barcelona</a>
												</td>
												<td class="t-points p-points">
													Argentina
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													2.
												</td>
												<td class="country">
													<a href="club.html">Cristiano Ronaldo</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">Real Madrid</a>
												</td>
												<td class="t-points p-points">
													Portugal
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													3.
												</td>
												<td class="country">
													<a href="club.html">Xavi</a>
												</td>
												<td class="t-points">
													Midfielder
												</td>
												<td class="t-points p-points">
													<a href="club.html">Barcelona</a>
												</td>
												<td class="t-points p-points">
													Spain
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													4.
												</td>
												<td class="country">
													<a href="club.html">Andres Iniesta</a>
												</td>
												<td class="t-points">
													Midfielder
												</td>
												<td class="t-points p-points">
													<a href="club.html">Barcelona</a>
												</td>
												<td class="t-points p-points">
													Spain
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													5.
												</td>
												<td class="country">
													<a href="club.html">Ibrahimovic</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">PSG</a>
												</td>
												<td class="t-points p-points">
													Sweden
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													6.
												</td>
												<td class="country">
													<a href="club.html">Radamel Falcao</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">Atletico Madrid</a>
												</td>
												<td class="t-points p-points">
													Colombia
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													7.
												</td>
												<td class="country">
													<a href="club.html">Robin van Persie</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">Man Utd</a>
												</td>
												<td class="t-points p-points">
													Netherlands
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													8.
												</td>
												<td class="country">
													<a href="club.html">Andrea Pirlo</a>
												</td>
												<td class="t-points">
													Midfielder
												</td>
												<td class="t-points p-points">
													<a href="club.html">Juventus</a>
												</td>
												<td class="t-points p-points">
													Italy
												</td>
											</tr>
											<tr class="b-color">
												<td class="rank">
													9.
												</td>
												<td class="country">
													<a href="club.html">Yaya Toure</a>
												</td>
												<td class="t-points">
													Midfielder
												</td>
												<td class="t-points p-points">
													<a href="club.html">Man City</a>
												</td>
												<td class="t-points p-points">
													Ivory Coast
												</td>
											</tr>
											<tr class="bg-color">
												<td class="rank">
													10.
												</td>
												<td class="country">
													<a href="club.html">Edinson Cavani</a>
												</td>
												<td class="t-points">
													Forward
												</td>
												<td class="t-points p-points">
													<a href="club.html">Napoli</a>
												</td>
												<td class="t-points p-points">
													Uruguay
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<!-- //player-rank -->
							<div class="clearfix"> </div>
							<!-- most-view-grids -->
							<div class="most-view-grids">
								<div class="most-view-grids-heading">
									<h3>Most Viewed</h3>
								</div>
								<div class="sap_tabs">
									<div id="horizontalTab" style="display: block; margin: 0px;">
										<ul class="resp-tabs-list">
											<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span>Today</span></li>
											<li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span>This Week</span></li>
											<li class="resp-tab-item grid3" aria-controls="tab_item-2" role="tab"><span>This Month</span></li>
											<div class="clearfix"></div>
										</ul>
										<div class="clear"></div>
										<div class="resp-tabs-container">
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f7.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Sed neque nibh</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="#">Nam efficitur</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f10.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Quisque lacinia</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f13.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Duis accumsan</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f15.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Nulla facilisi</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f15.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Nulla facilisi</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f7.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Sed neque nibh</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Nam efficitur</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f10.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Quisque lacinia</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f13.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Duis accumsan</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
											<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f13.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Duis accumsan</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f15.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Nulla facilisi</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f7.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Sed neque nibh</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f8.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Nam efficitur</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
												<div class="news-right-grids most-view-left">
													<div class="news-right-grids-img most-view-left-img">
														<a href="single.html"><img src="{{asset('public/frontEnd/images/')}}/f10.jpg" alt=""></a>
													</div>
													<div class="news-right-grids-info most-view-left-img">
														<a href="single.html">Quisque lacinia</a>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
													</div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- //most-view-grids -->
						</div>
						<!-- //top-grid-right -->
						<div class="clearfix"> </div>
					</div>
					<!-- more-sports -->
					<div class="more-sports">
						<div class="more-sports-heading">
							<h3>More Information</h3>
						</div>
						<div class="more-sports-grids">
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="index.html"><img src="{{asset('public/frontEnd/images/')}}/f15.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="index.html">Lorem ipsum dolor sit amet</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="index.html">Football</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="baseball.html"><img src="{{asset('public/frontEnd/images/')}}/b1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="baseball.html">Quisque tristique dignissim</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="baseball.html">Baseball</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="basketball.html"><img src="{{asset('public/frontEnd/images/')}}/basket1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="basketball.html">Morbi tincidunt urna condimentum</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="basketball.html">Basketball</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="horse_Racing.html"><img src="{{asset('public/frontEnd/images/')}}/h1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="horse_Racing.html">Suspendisse viverra vestibulum</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="horse_Racing.html">Horse Racing</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="more-sports-grids more-sports-grids-bottom">
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="golf.html"><img src="{{asset('public/frontEnd/images/')}}/g1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="golf.html">Nullam nec eros ac purus luctus</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="golf.html">Golf</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="tennis.html"><img src="{{asset('public/frontEnd/images/')}}/t1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="tennis.html">Vivamus quis magna ornare</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="tennis.html">Tennis</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="rugby.html"><img src="{{asset('public/frontEnd/images/')}}/r1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="rugby.html">Lorem ipsum dolor sit amet</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="rugby.html">Rugby</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="col-md-3 more-sports-grid">
								<div class="more-grids">
									<div class="col-md-6 more-grid-left">
										<a href="cricket.html"><img src="{{asset('public/frontEnd/images/')}}/c1.jpg" alt="" /></a>
									</div>
									<div class="col-md-6 more-grid-right">
										<div class="more-grid-right-top">
											<a href="cricket.html">Cras porta, orci vitae pellentesque</a>
										</div>
										<div class="more-grid-right-bottom">
											<a href="cricket.html">Cricket</a>
										</div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!-- //more-sports -->
				</div>
			</div>
			<!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<div class="login-body">
											<div class="login-heading">
												<h3>Login</h3>
											</div>
											<div class="login-info">
												<form>
													<input type="text" class="user" name="email" placeholder="Email" required="">
													<input type="password" name="password" class="lock" placeholder="Password">
													<div class="forgot-top-grids">
														<div class="forgot-grid">
															<ul>
																<li>
																	<input type="checkbox" id="brand1" value="">
																	<label for="brand1"><span></span>Remember me</label>
																</li>
															</ul>
														</div>
														<div class="forgot">
															<a href="#">Forgot password?</a>
														</div>
														<div class="clearfix"> </div>
													</div>
													<input type="submit" name="Sign In" value="Login">
													<div class="signup-text">
														<a href="signup.html">Don't have an account? Create one now</a>
													</div>
													<hr>
													<h2>or login with</h2>
													<div class="login-icons">
														<ul>
															<li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
															<li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
														</ul>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
@endsection