<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico">

<title><?php wp_title( '|', FALSE, 'right' ); ?></title>

<?php wp_head(); ?>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Static navbar -->
	<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
					data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span> <span
						class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>

			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="<?php echo get_site_url(); ?>/about">About</a></li>
					<li><a href="<?php echo get_site_url(); ?>/councils">Council</a></li>
					<li><a href="<?php echo get_site_url(); ?>/member-bank">Member Banks</a></li>
					<li><a href="<?php echo get_site_url(); ?>/#">Industry Guidelines</a></li>
					<li><a href="<?php echo get_site_url(); ?>/events">Events</a></li>	
					<li><a href="<?php echo get_site_url(); ?>/#">News and Media</a></li>				
					<li><a href="<?php echo get_site_url(); ?>/contact">Contact</a></li>	
				</ul>
			</div>
			<!--/.nav-collapse -->
		</div>
	</div>

	<?php if( is_front_page() ): ?>

	<div id="carousel-example-generic" class="carousel slide"
		data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0"
				class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img
					src="img/114854644-man-using-cash-machine-close-up-gettyimages.jpg"
					alt="image">
				<div class="carousel-caption">...</div>
			</div>
			<div class="item">
				<img src="img/123400946-canary-wharf-gettyimages.jpg" alt="image">
				<div class="carousel-caption">...</div>
			</div>
			<div class="item">
				<img src="img/123400946-canary-wharf-gettyimages.jpg" alt="image">
				<div class="carousel-caption">...</div>
			</div>
			.
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic"
			data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span>
		</a> <a class="right carousel-control" href="#carousel-example-generic"
			data-slide="next"> <span
			class="glyphicon glyphicon-chevron-right"></span>
		</a>
	</div>

	<?php endif; // End if is_front_page?>
	<div class="container">