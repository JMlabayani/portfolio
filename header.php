<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>
	<script>
		new WOW().init();
	</script>
	<body <?php body_class(); ?>>
		<div class="main-wrapper">
		<div id="container">

		<div class="site-offcanvas">
        <div class="offcanvas-backdrop" style="display: none;"></div>
	        <div class="burger-nav">
	            <div class="burger-nav-inner">
	            	<div class="burger-nav-hold">
	            		<div class="burger-top">
							<div class="close-nav" data-offcanvas-slide="in">
			                    <div class="close-b-menu" data-offcanvas-slide="in">
			                        <em class="ai-font-close-a"></em>
			                    </div>
			                </div>
		                </div>
		                <div class="side-nav">
		                    <nav>
		                        <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav2', 'theme_location' => 'my-custom-menu' ) ); ?>
		                    </nav>
		                </div>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="mobile-header">
	    	<div class="header-burger" data-offcanvas-slide="out">
				<div class="header-burger-inner" data-offcanvas-slide="out">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
	    </div>
		<header class="header">		
			<div class="header-wrap">
				<div class="header-inner">
					<div class="header-left">
						<div class="header-logo">
							<a href="<?php echo esc_url( home_url() ) ?>">
								<img class="img-responsive" src="/wp-content/themes/portfolio/images/jmlogo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="header-right">
						<div class="header-navi">
							<nav class="navigation">
								<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'my-custom-menu' ) ); ?>
							</nav>
							<!-- <ul>
								<li>
									<a href="#">Home</a>
								</li>
								<li>
									<a href="#">Pages</a>
								</li>
								<li>
									<a href="#">Shortcode</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Contact Us</a>
								</li>
							</ul> -->
						</div>
					</div>
				</div>
			</div>
		</header>

		<?php if ( !is_home()  ) : ?>

			<div class="ip-banner-slider">
				<div>
					<div class="ip-banner">
						<canvas width="1600" height="500" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/slider1.jpg);"></canvas>
					</div>  
				</div>
				<div>
					<div class="ip-banner">
						<canvas width="1600" height="500" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/section-bg1.jpg);"></canvas>
					</div>  
				</div>
				<div>
					<div class="ip-banner">
						<canvas width="1600" height="500" style="background-image: url(<?php echo get_stylesheet_directory_uri() ?>/images/exigo-sea-bg.jpg);"></canvas>
					</div>  
				</div>
			</div>
		<?php endif ?>

<!-- all popup -->
<!-- contact us popup -->
<a href="#contactPopup" class="aios-content-popup contactPopupTrigger hide">Contact Popup Form</a>
<div class="aiosp-hide" id="contactPopup">
    <div class="contactPopup-content">
        <div class="contactPopup-title">
           Contact Us
        </div>
        <div class="contact-popup-form">
            <?php echo do_shortcode('[contact-form-7 id="667" title="Contact Form - Popup" html_class="use-floating-validation-tip"]') ?>
        </div>
    </div>
</div>

<!-- about popup -->
<a href="#aboutPopup" class="aios-content-popup aboutPopupTrigger hide">About Popup Form</a>
<div class="aiosp-hide" id="aboutPopup">
    <div class="aboutPopup-content">
        <div class="aboutPopup-title">
           About us
        </div>
        <div class="about-popup-content">
			<h3>Exigo's Approach</h3>
			<p>Exigo EPS Ltd's approach to our work is about always finding the best solutions for our clients; we strive to assist them in meeting their deadlines and making sure they fall within their budgets. Our team work closely with procurement managers and buyers of each project to ensure material and services are to specification and to the quality our clients have come to expect from Exigo.</p>
			<hr>
			<h3>Our Story</h3>
			<p>Starting in 2014 Exigo have achieved a lot between then and now. As a company we have been fortunate to have worked/working on some of the largest projects currently ongoing while also assisting field operators in keeping their operations running smoothly in existing fields. Since 2014 we have worked tirelessly to build up an extensive supply chain who brilliantly assist us in our efforts.</p>
			<hr>
			<h3>About Us</h3>
			<p>Exigo EPS Ltd is an ISO accredited company and approved supplier to many of the world’s leading EPC contractors and end users, offering a complete range of materials.</p>
			<p>Our reputation for safely delivering quality materials and services on time and to budget is of paramount importance in the industries we serve. We have proven expertise in managing large complex projects, assisting field operators in their operations and in maintaining strong relationships with our present and future clients.</p>
			<p>Each year that passes as a company we work tirelessly to maintain and progress the quality work we produce, always enhancing our employees knowledge and skill to ensure we always give our clients the best service possible.</p>
        </div>
    </div>
</div>

<!-- where we work popup -->
<a href="#workPopup" class="aios-content-popup workPopupTrigger hide">Work Popup Form</a>
<div class="aiosp-hide" id="workPopup">
    <div class="workPopup-content">
        <div class="workPopup-title">
           Where we work
        </div>
        <div class="work-popup-content">
			<p>Exigo are a global company who operate in every continent. We have an ever growing network of branches being established throughout each region of the globe to enable us to better assist our clients.</p>
			<p>As a company we operate in various markets assisting our clients in each sector they venture into. We operate and assist in the following:</p>
			<hr>
			<h2>Upstream:</h2>
			<p>We assist our clients in their offshore and onshore oil &amp; gas production. Procuring material to enable them to build pipelines, storage &amp; gasification facilities.</p>
			<hr>
			<h2>Downstream:</h2>
			<p>On the request of our clients, we work hard in assisting them with their material requirements onsite at their refineries to allow oil &amp; gas to be refined for commercial use.</p>
			<hr>
			<h2>LNG:</h2>
			<p>Working with our clients in their lng requirements we assist and support them in the procurement of materials for building liquefaction export terminals, regasification import terminals and LNG storage.</p>
        </div>
    </div>
</div>

<!-- what we do popup -->
<a href="#doPopup" class="aios-content-popup doPopupTrigger hide">do Popup Form</a>
<div class="aiosp-hide" id="doPopup">
    <div class="doPopup-content">
        <div class="doPopup-title">
           What we do
        </div>
        <div class="do-popup-content">
			<h2>Procurement:</h2>
			<p>Exigo works with end users, operators and epc contractors across the globe ensuring the material they require onsite is sourced, competitively priced, technically compliant and delivered on time. We have vast experience in procuring material for our clients and ensuring wherever required, it will be delivered.</p>
			<p>If you have any material requirements, either for yourself or the project you are working on then please get in touch to see what solution we can offer.</p>
			<hr>
			<h2>Construction:</h2>
			<p>Going hand in hand with our procurement department, Exigo is able to offer construction services to our clients. Hving made partnerships with numerous contractors exigo can offer a solution for your construction and procurement requirement.</p>
			<p>If you have any requirement for construction services, please get in touch with exigo where we can then build a world class solution for your need.</p>
			<hr>
			<h2>Consultancy:</h2>
			<p>Due to our vast experience as a company our team are able to offer a comprehensive consultancy package whereby we can assist in your project requirements by finding the correct and suitable vendors to work on the projects different phases.</p>
			<p>Previously our experience has led to end users trusting us to source a suitable contractor for various parts of their project, along with also sourcing vendors to supply staff, design and commissioning.</p>
			<p>If your project requires our consultancy services please get in touch so we can discuss further your needs to then allow us to create a bespoke solution for you.</p>
			<hr>
			<h2>Importing:</h2>
			<hr>
			<h2>Buying:</h2>
			<hr>
			<h2>Selling:</h2>
			<hr>
			<h2>Distributing:</h2>
			<hr>
			<h2>Trading:</h2>
			<hr>
			<h2>Marketing:</h2>
        </div>
    </div>
</div>