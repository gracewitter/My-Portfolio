<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Grace Witter web developer portfolio">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--====== Favicon Icon ======-->
  <link rel="shortcut icon" href="wp-content/themes/unfold/favicon.png" type="image/png">

	<!--====== Bootstrap css ======-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!--====== Line Icons css ======-->
  <link href="https://cdn.lineicons.com/1.0.1/LineIcons.min.css" rel="stylesheet">

	<!--====== Magnific Popup css ======-->
  <link rel="stylesheet" href="wp-content/themes/unfold/magnific-popup.css">

	<!--====== Default css ======-->
  <link rel="stylesheet" href="wp-content/themes/unfold/default.css">

  <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
  <title>Grace Witter - Web Developer Portfolio </title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">

		<!--====== PRELOADER PART START ======-->

	  <div class="preloader">
	    <div class="loader_34">
	      <div class="ytp-spinner">
	        <div class="ytp-spinner-container">
	          <div class="ytp-spinner-rotator">
	            <div class="ytp-spinner-left">
	              <div class="ytp-spinner-circle"></div>
	            </div>
	            <div class="ytp-spinner-right">
	              <div class="ytp-spinner-circle"></div>
	            </div>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>

	  <!--====== PRELOADER ENDS START ======-->

	  <!--====== HEADER PART START ======-->

		<header id="home" class="header-area">
			<div class="navigation fixed-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg">
								<a class="navbar-brand" href="http://www.gracewitter.com">
									<img src="http://www.gracewitter.com/wp-content/uploads/2019/12/logo-name.png" alt="Grace Witter Logo" />
								</a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	                <span class="toggler-icon"></span>
	                <span class="toggler-icon"></span>
	                <span class="toggler-icon"></span>
	              </button>
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
	                <ul class="navbar-nav ml-auto">
	                  <li class="nav-item active"><a class="page-scroll" href="https://www.gracewitter.com/">Home</a></li>
	                  <li class="nav-item"><a class="page-scroll" href="https://www.gracewitter.com/#about">About</a></li>
	                  <!-- <li class="nav-item"><a class="page-scroll" href="#service">Services</a></li> -->
	                  <li class="nav-item"><a class="page-scroll" href="https://www.gracewitter.com/#work">Portfolio</a></li>
	                  <!-- <li class="nav-item"><a class="page-scroll" href="#blog">Blog</a></li> -->
	                  <li class="nav-item"><a class="page-scroll" href="https://www.gracewitter.com/contact/">Contact Me</a></li>
	                </ul>
	              </div> <!-- navbar collapse -->
							</nav> <!-- navbar -->
						</div>
					</div> <!-- row -->
				</div> <!-- container -->
			</div> <!-- navigation -->

		</header>

		<div id="main" class="site-main">
