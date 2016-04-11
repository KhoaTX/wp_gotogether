<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title(); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
	</head>

  <!--<body <?php //body_class(isset($class) ? $class : ''); ?>>-->
  <body data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header" id="myPage">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#myPage"><?php echo wp_get_attachment_image(20); ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#about">ABOUT</a></li>
            <li><a href="#services">SERVICES</a></li>
            <li><a href="#portfolio">PORTFOLIO</a></li>
            <li><a href="#pricing">PRICING</a></li>
            <li><a href="#contact">CONTACT</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <h1>Go Together</h1> 
      <p>We specialize in blablabla</p> 
      <form class="form-inline">
        <input type="email" class="form-control" size="50" placeholder="Email Address" required>
        <button type="button" class="btn btn-danger">Subscribe</button>
      </form>
    </div>

    <!--<div id="main-container" class="container">-->
    <!-- Container (About Section) -->
    <div id="about" class="container-fluid">