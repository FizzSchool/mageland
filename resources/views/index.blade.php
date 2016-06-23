
<!DOCTYPE html lang="en-US">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>Dev</title>

<link rel='stylesheet' id='reset-css'  href='{{ URL::asset('css/reset.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='superfish-css'  href='{{ URL::asset('css/superfish.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='fontawsome-css'  href='{{ URL::asset('css/font-awsome/css/font-awesome.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='orbit-css-css'  href='{{ URL::asset('css/orbit.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='style-css'  href='{{ URL::asset('css/style.css')}}' type='text/css' media='all' />
<link rel='stylesheet' id='color-scheme-css'  href='{{ URL::asset('css/color/green.css')}}' type='text/css' media='all' />
<link rel="stylesheet" href='{{ URL::asset('css/zerogrid.css')}}' type="text/css" media="screen">
<link rel="stylesheet" href='{{ URL::asset('css/responsive.css')}}' type="text/css" media="screen">
<script type='text/javascript' src='{{ URL::asset('js/jquery.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery-migrate.min.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery-1.10.2.min.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/jquery.carouFredSel-6.2.1-packed.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/hoverIntent.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/superfish.js')}}'></script>
<script type='text/javascript' src='{{ URL::asset('js/orbit.min.js')}}'></script>
 <script src='{{ URL::asset('js/css3-mediaqueries.js')}}'></script>

<script type="text/javascript" language="javascript">
	$(function() {
		
		/* Start Carousel */
		$('#featured-posts').carouFredSel({
			auto: true,
					prev: '#prev2',
					next: '#next2',
		});
		/* End Carousel */
		
		
		/* Start Orbit Slider */
		$(window).load(function() {
			$('.post-gallery').orbit({
				animation: 'fade',
			});
		});
		/* End Orbit Slider */
			
			
		/* Start Super fish */
		jQuery(document).ready(function(){
			jQuery('ul.sf-menu').superfish({
				delay:         100,
				speed:         'fast',
				speedOut:      'fast',
			});
		});
		/* End Of Super fish */
			
	});
</script>
</head>

<body class="home blog">

	<!-- Start Header -->
    <div class="container zerogrid">
        <div class="col-full"><div class="wrap-col">
        	<div id="header-nav-container">
            
                    <a href='{{ url('index') }}'>
                    <img src="{{url('images/logo.png')}}" id="logo" />
                    </a>
                    
					<!-- Navigation Menu -->
                    
	<ul class="sf-menu"><li class="menu-item current-menu-item"><a href='{{ url('index')}}'>Home</a></li>
	<li class="menu-item"><a href="blog.html">Blog</a></li>
<li class="menu-item"><a href="#">Features</a>
<ul class="sub-menu">
	<li class="menu-item"><a href="#">Menu 01</a></li>
	<li class="menu-item"><a href="#">Menu 02</a></li>
	<li class="menu-item"><a href="#">Menu 03</a></li>
</ul>
</li>
<li class="menu-item"><a href="about.html">About us</a></li>
</ul>	
                    <!-- End Navigation Menu -->
                    
                    <div class="clear"></div>
                    
            </div>
			</div>
        </div>
    <div class="clear"></div> 
    </div>
    <div class="spacing-30"></div>
    <!-- End Header -->

    <p>
    @yield('container')
    </p>
    <!-- Start Featured Carousel -->

    <!-- Start Footer -->
    <div class="spacing-30"></div>
    <div class="container zerogrid">
        <div id="footer-container" class="col-full">
        <div class="wrap-col">	
            <!-- Footer Copyright -->
            <p>Copyrigh &copy; 2013 Euclid. All Rights Reserved.</p>
            <!-- End Footer Copyright -->
            
            <!-- Footer Logo -->
			<img src='{{URL::asset('images/footer-logo.png')}}'' id="footer-logo"' />
            <!-- End Footer Logo -->
        
        <div class="clear"></div>
		</div>
        </div>
    </div>
    <!-- End Footer -->


</body>

</html>