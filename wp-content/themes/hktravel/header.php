<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/bootstrap/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<link rel="shortcut icon" href="https://dulichkhampha.net/wp-content/uploads/2018/12/z6.jpg" />
	<meta name="google-site-verification" content="__eiLtWtIk2IcY9f156oJ3no0FPJ53CQo_ifEGII1aQ" />
	<?php wp_head(); ?>
</head>
<body>
	<?php global $hk_options; ?>
	<div id="wrapper">
		<header>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-xs-10 col-sm-6 col-md-2">
							<div class="logo">
								<?php if(is_home()){ ?>
									<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $hk_options[logo][url]; ?>" alt="<?php bloginfo('name'); ?>"></a></h1>
								<?php } else { ?>
									<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $hk_options[logo][url]; ?>" alt="<?php bloginfo('name'); ?>"></a>
								<?php } ?>
							</div>
						</div>
						<div class="col-xs-2 col-sm-6 col-md-10">
							<nav id="main-menu" class="hidden-xs hidden-sm">
								<?php wp_nav_menu( 
									array( 
										'theme_location' => 'main_nav', 
										'container' => 'false', 
										'menu_id' => 'header-menu', 
										'menu_class' => 'menu-main'
									) 
								); ?>
								
								<div class="clear"></div>
							</nav>
							<div class="hidden-bar hidden-md hidden-lg"><a href="#menu-mobile" class="menu-mobile"><i class="fa fa-bars" aria-hidden="true"></i></a></div>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="container">
		<div class="row" style="margin-top:30px">
			<div style="padding: 5px" title="Tìm kiếm" id="search">
				<form action="https://dulichkhampha.net" id="searchform" method="get">
				<div class="col-md-8 col-sm-8"> 
					<input class="form-control" type="text" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '')  {this.value = 'Search';}" id="s" name="s" value="Search" />
				</div>
				<div class="col-md-4 col-sm-4"> 
					<button type="submit" class="btn btn-primary mb-2">Tìm kiếm</button>
				</div>
				</form>
			</div>
		</div>
		</div>	
		<?php if(!is_home()) { ?>
			<div class="container">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
			</div>
			<?php } ?>
