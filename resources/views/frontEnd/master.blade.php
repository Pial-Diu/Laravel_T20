
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Live info Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
 <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/frontEnd/images/unnamed.png')}}" />
 
<link href="{{asset('public/frontEnd/css/')}}/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="{{asset('public/frontEnd/css/')}}/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{asset('public/frontEnd/css/')}}/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="{{asset('public/frontEnd/css/')}}/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
		<link href="{{asset('public/frontEnd/menu/css/')}}/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- webfonts -->
<link href='//fonts.googleapis.com/css?family=Nunito:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<!--// webfonts --> 
 <!-- Meters graphs -->
<script src="{{asset('public/frontEnd/js/')}}/jquery-1.11.1.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->

</head> 
   
<body class="sticky-header left-side-collapsed">
                <!--<div class="main-content" >-->
			<!-- header-starts -->
                        <div style="height:61px;width:52px;background-color: #272727;margin:0px;padding:0px;">
                            <i class="fa fa-trophy fa-3x" style="margin-top: 7px;margin-left: 7px;color:#F44336;"></i>
                        </div>
			@include('frontEnd.includes.header')
                        
                            @include('frontEnd.includes.menu')
			
                        @yield('mainContent')
                        
                        @include('frontEnd.includes.footer')
     
		<!--</div>-->
        

      <!-- main content end-->
<!--	</section>-->
	<script src="{{asset('public/frontEnd/js/')}}/modernizr.custom.js"></script>

	<script src="{{asset('public/frontEnd/js/')}}/menu_jquery.js"></script>
	<!--//pop-up-->	
	<script src="{{asset('public/frontEnd/js/')}}/jquery.nicescroll.js"></script>
	<script src="{{asset('public/frontEnd/js/')}}/scripts.js"></script>
	 <!--Bootstrap Core JavaScript--> 
	<script src="{{asset('public/frontEnd/js/')}}/bootstrap.min.js"></script>
	<!--pop-up-->
	<script src="{{asset('public/frontEnd/js/')}}/menu_jquery.js"></script>
	<!--//pop-up-->	
	<!-- clock-bottom -->
	<script type="text/javascript">
	$(document).ready(function() {
	// Create two variable with the names of the months and days in an array
	var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
	var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

	// Create a newDate() object
	var newDate = new Date();
	// Extract the current date from Date object
	newDate.setDate(newDate.getDate());
	// Output the day, date, month and year    
	$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

	setInterval( function() {
		// Create a newDate() object and extract the seconds of the current time on the visitor's
		var seconds = new Date().getSeconds();
		// Add a leading zero to seconds value
		$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
		},1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the minutes of the current time on the visitor's
		var minutes = new Date().getMinutes();
		// Add a leading zero to the minutes value
		$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
		},1000);
		
	setInterval( function() {
		// Create a newDate() object and extract the hours of the current time on the visitor's
		var hours = new Date().getHours();
		// Add a leading zero to the hours value
		$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
		}, 1000);
		
	}); 
	</script>
	<!-- clock-bottom -->
	<!-- ResponsiveTabs -->
	<script src="{{asset('public/frontEnd/js/')}}/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	</script>
	<!-- //ResponsiveTabs -->
	<!-- video -->
	<script src="{{asset('public/frontEnd/js/')}}/simplePlayer.js"></script>
	<script>
		$("document").ready(function() {
			$("#video").simplePlayer();
		});
	</script>
	<!-- //video -->
</body>
</html>