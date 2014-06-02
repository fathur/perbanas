<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico" />

<title><?php wp_title( '|', FALSE, 'right' ); ?></title>
    
    <?php wp_head(); ?>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
		<div class="row header hidden-sm hidden-xs">
			<div class="col-xs-12 header-inner">
				<div class="row">
					<div class="col-xs-12 block text-center">
						<div class="row top-nav">
							<div class="col-xs-8"></div>
							<div class="col-xs-4">
								<ul>
									<li><a href="#">Login</a></li>
									<li><a href="#">Search</a></li>
									<li class="last"><a href="#">Bahasa Indonesia</a></li>
								</ul>
							</div>
						</div>
						<div class="logo-container">
							<img width="214px" height="149px" class="logo"
								src="<?php echo get_template_directory_uri(); ?>/img/LOGO_PERBANAS_EN.png" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbar-container">
		<div id="navbar-main" class="navbar navbar-default navbar-static-top"
			role="navigation">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-main-collapsed-menu-logo hidden-md hidden-lg">
						<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/perbanas-logo-collapsed.png"></a>
					</div>
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
					<!--<a class="navbar-brand" href="#">Project name</a>-->
				</div>
				<div class="navbar-collapse collapse">
					<div class="nav-large-wrapper-outer">
						<div class="nav-large-wrapper-inner">
							<div class="navbar-main-scrolled-menu-logo hidden-sm hidden-xs">
								<img src="<?php echo get_template_directory_uri(); ?>/img/perbanas-logo-scrolled.png" />
							</div>
							
							<?php echo perbanas_header_menu(); ?>
						</div>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>