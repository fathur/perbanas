<?php perbanas_force_members_area(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="favicon.ico" />

<title>Perbanas | <?php wp_title( '|', TRUE, 'right' ); ?></title>
    
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
					<div class="col-xs-12 block">
						<div class="row top-nav">
							<div class="col-xs-6"></div>
							<div class="col-xs-6">
								<ul>
									
									<?php if ( is_user_logged_in() ) { ?>
									<li><a href="<?php echo wp_logout_url( get_bloginfo('siteurl') ); ?>"><?php _e('Log Out','perbanas'); ?></a><?php //echo wp_loginout( get_permalink() ); ?></li>
									<li><a href="<?php echo get_post_type_archive_link('memberarea'); ?>"><?php _e('Member Area','perbanas'); ?></a></li>
									<?php } else { ?>
									<li><a id="login-button" href="#"><?php _e('Log In','perbanas'); ?></a></li>
									<?php } ?>
									<li><a id="search-button" href="#"><?php _e('Search','perbanas'); ?></a></li>
									<li class="last language-dropdown-container"><a id="language-button" href="#"><?php _e('Language','perbanas'); ?></a>
										<ul id="language-dropdown">
									    <li><a href="<?php echo get_option('siteurl'); ?>/id">Bahasa</a></li>
									    <li><a href="<?php echo get_option('siteurl'); ?>/en">English</a></li>
									  </ul>
									</li>
								</ul>
							</div>
						</div>
						<div class="row top-nav-extra">
							<div class="col-xs-8"></div>
							<div class="col-xs-4 text-right">
								<form action="<?php echo get_bloginfo('siteurl'); ?>" method="get">
									<input type="text" name="s" id="search-textbox" />
						    </form>
							</div>
						</div>
						<?php if ( ! is_user_logged_in() ) { ?>
						<div class="row top-nav-login-dialog-container">
							<div class="col-xs-8"></div>
							<div class="col-xs-4">
								<form action="<?php echo get_option('siteurl');?>/wp-login.php" method="post" class="top-nav-login-dialog-form">
									<input type="text" placeholder="Username" name="log" id="user_login" />
									<input type="password" placeholder="Password" name="pwd" id="user_pass" />

									<div class="login-dialog-buttons">
										<a class="forgot-password" href="<?php echo wp_lostpassword_url(); ?>">Forgot password?</a>
										<input type="submit" name="wp-submit" id="wp-submit" class="btn" value="submit" />
										<input type="hidden" name="redirect_to" value="<?php echo get_bloginfo('siteurl'); // ( $_SERVER['REQUEST_URI'] ); ?>" />
										<input type="hidden" name="testcookie" value="0" />
									</div>
								</form>
							</div>
						</div>
						<?php } ?>
						<div class="logo-container text-center">
							<a href="<?php echo get_bloginfo('siteurl'); ?>">
							<img width="214px" height="149px" class="logo"
								src="<?php echo get_template_directory_uri(); ?>/img/LOGO_PERBANAS_EN.png" />
							</a>
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
						<a href="<?php echo get_option('siteurl'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/perbanas-logo-collapsed.png"></a>
					</div>
					<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span> <span
							class="icon-bar"></span> <span class="icon-bar"></span> <span
							class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse">
					<div class="nav-large-wrapper-outer">
						<div class="nav-large-wrapper-inner">
							<div class="navbar-main-scrolled-menu-logo hidden-sm hidden-xs">
								<a href="<?php echo get_bloginfo('siteurl'); ?>">
								<img src="<?php echo get_template_directory_uri(); ?>/img/perbanas-logo-scrolled.png" />
								</a>
							</div>
							
							<?php echo perbanas_header_menu(); ?>
						</div>
					</div>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>