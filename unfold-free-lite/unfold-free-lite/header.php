<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Unfold
 * @since 1.0.0
 */
?>

<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Grace Witter - Web Developer</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="style.css">

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

    <header id="home" class=" header-area page-header container">
      <div class="navigation fixed-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand" href="index.html">
                  <img src="logo.png" alt="Logo">
                </a> <!-- Logo -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                  <span class="toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="page-scroll" href="#home">Home</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#about">About</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#service">Services</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#work">Portfolio</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#blog">Blog</a></li>
                    <li class="nav-item"><a class="page-scroll" href="#contact">Contact</a></li>
                  </ul>
                </div> <!-- navbar collapse -->
              </nav> <!-- navbar -->
            </div>
          </div> <!-- row -->
        </div> <!-- container -->
      </div> <!-- navigation -->
    </header>


      <div id="main" class="site-main">
