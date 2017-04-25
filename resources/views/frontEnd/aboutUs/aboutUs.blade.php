@extends('frontEnd.master')

@section('title')
    About Us
@endsection

@section('mainContent')
    <div id="page-wrapper">
				<!-- contact -->
				<div class="contact about">
					<!--<div class="about-info">-->
                                            <h1 class="text-center" style="color:#12D194;">A brief history</h1><br><br><br>
					<!--</div>-->
					<div class="about-grids">
						<div class="col-md-8 about-left">
                                                    <!--<h4 style="color:#F44336" class="text-center">~{!!$about->aboutTitle!!}~</h4>-->
                                                    <p>{!!$about->aboutDescription!!}</p>
						</div>
						<div class="col-md-4 about-right">
                                                    <!--<img style="height:222px;width:395px;" src="{{asset('/public/frontEnd/images/')}}/about1.jpg" alt="">-->
                                                    <img style="height:222px;width:395px;" src="{{asset($about->aboutImage)}}" alt="">
                                                    <p class="text-center"><em><strong>SoftExpo-2017</strong></em></p>
						</div>
						<div class="clearfix"> </div>
					</div>
                                        <br><br><br>
					<div class="testimonial">
						<div class="testimonial-heading">
							<h3>Our Team</h3>
						</div>
                                               
						<div class="testimonial-grids">
                                                @foreach($panels as $panel)
							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial">
									<div class="content_box">
										<blockquote>
											<p>{!!$panel->panelQuote!!}</p>    
                                                                                        <div class="a-author">{!!$panel->panelTitle!!} ,  <a href="#" style="color:#F44336">{!!$panel->panelName!!}</a></div>
										</blockquote>
									</div>
									<div class="avatar">
                                                                            <img src="{{asset($panel->panelImage)}}" style="height:70px;width:100px;" class="img-responsive" alt="">
									</div>
								</div>
							</div>
                                                @endforeach
<!--							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial">
									<div class="avatar">
										<img src="{{asset('/public/frontEnd/images/')}}/at2.jpg" class="img-responsive" alt="">
									</div>
									<div class="content_box">
										<blockquote>
											<p>In pellentesque, libero eu accumsan ullamcorper, lorem mauris dictum turpis, pretium vulputate augue enim dictum tortor. Quisque nisi sapien, consectetur vitae sapien vel</p>    
											<div class="a-author">Editor - <a href="#">Marry watson</a></div>
										</blockquote>
									</div>
								</div>
							</div>-->
<!--							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial item-testimonial_last">
									<div class="avatar">
										<img src="{{asset('/public/frontEnd/images/')}}/at3.jpg" class="img-responsive" alt="">
									</div>
									<div class="content_box">
										<blockquote>
											<p>Sed ultrices felis eros, at dignissim massa suscipit ac. Morbi gravida, lacus eu blandit tincidunt, neque mi auctor arcu, vel euismod lorem nibh sed tortor.</p>    
											<div class="a-author">Senior Reporter - <a href="#">Jack</a></div>
										</blockquote>
									</div>
								</div>
						  </div>-->
						  <div class="clearfix"> </div>
						</div>
<!--						<div class="testimonial-grids testimonial-bottom">
							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial">
									<div class="content_box">
										<blockquote>
											<p>Nulla a urna non eros egestas fermentum quis id diam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>    
											<div class="a-author">Reader - <a href="#">KM Vilson</a></div>
										</blockquote>
									</div>
									<div class="avatar">
										<img src="{{asset('/public/frontEnd/images/')}}/at2.jpg" class="img-responsive" alt="">
									</div>
								</div>
							</div>
							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial">
									<div class="avatar">
										<img src="{{asset('/public/frontEnd/images/')}}/at3.jpg" class="img-responsive" alt="">
									</div>
									<div class="content_box">
										<blockquote>
											<p>In pellentesque, libero eu accumsan ullamcorper, lorem mauris dictum turpis, pretium vulputate augue enim dictum tortor. Quisque nisi sapien, consectetur vitae sapien vel</p>    
											<div class="a-author">Reporter - <a href="#">Williams</a></div>
										</blockquote>
									</div>
								</div>
							</div>
							<div class="col-md-4 testimonial-top-grid">
								<div class="item-testimonial item-testimonial_last">
									<div class="avatar">
										<img src="{{asset('/public/frontEnd/images/')}}/at1.jpg" class="img-responsive" alt="">
									</div>
									<div class="content_box">
										<blockquote>
											<p>Sed ultrices felis eros, at dignissim massa suscipit ac. Morbi gravida, lacus eu blandit tincidunt, neque mi auctor arcu, vel euismod lorem nibh sed tortor.</p>    
											<div class="a-author">Reporter - <a href="#">Jokate</a></div>
										</blockquote>
									</div>
								</div>
						  </div>-->
						  <div class="clearfix"> </div>
						</div>
				   </div>
				</div>
				<!-- //contact -->
			
@endsection