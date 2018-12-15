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
	<?php wp_head(); ?>
</head>
<body>
	<?php global $hk_options; ?>
	<div id="wrapper">
		<header>
			<div class="top-header">
				<div class="container">
					<div class="row">
						<div class="site-header">
							<div class="site-branding">
								<div class="container">
									<div class="row">
										<div class="banner"> <!-- banner-->
											<?php if(is_home()){ ?>
												<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $hk_options[logo][url]; ?>" alt="<?php bloginfo('name'); ?>"></a></h1>
											<?php } else { ?>
												<a href="<?php bloginfo('url'); ?>"><img src="<?php echo $hk_options[logo][url]; ?>" alt="<?php bloginfo('name'); ?>"></a>
											<?php } ?>
										</div>  <!--end banner-->
										
										<div class="box">  <!--box-->
											<div class="box-left">
												<form role="search" method="get" class="searchform" action="https://dulichkhampha.net">
													<label for="search-form-5c14531da93cb">
														<span class="screen-reader-text">Tìm kiếm:</span>
													</label>
													<input type="search" class="search-field" onfocus="if (this.value == 'Search') {this.value = '';}" onblur="if (this.value == '')  {this.value = 'Search';}" id="s" name="s" value="Search">
													
													<button type="submit" class="search-submit"><i class="fa fa-search" aria-hidden="true"></i><span class="screen-reader-text">Search</span></button>
												</form>
											</div>
											
											<div class="box-right">
												<div class="box-right">
													<aside id="text-13" class="widget widget_text">			
														<div class="textwidget"><p><i class="fa fa-phone"></i> Hotline : 0979.027.181</p>
															<p><i class="fa fa-envelope"></i> Email : dulichkhampha.net@gmail.com</p>
															<p><i class="fa fa-map-marker"></i> Địa chỉ : G1110, Xuân Mai Complex, Hà Đông, Hà Nội</p>
														</div>
													</aside>					
												</div>
											</div>
										</div> <!--end box-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<nav id="site-navigation" class="main-navigation">
					<div class="container">
						<div class="row">
							<div class="primary-menu-container visible-lg col-lg-12">
								<ul id="primary-menu" class="primary-menu menu clearfix">
									<li id="menu-item-379" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-379">
										<a href="http://khomaudepraothue.com/dulich/">Trang chủ</a>
									</li>
									<li id="menu-item-274" class="menu-item menu-item-type-taxonomy menu-item-object-project menu-item-has-children menu-item-274">
										<a href="http://khomaudepraothue.com/dulich/?project=tour-du-lich">Tour du lịch</a>
										<ul class="sub-menu">
											<li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279">
												<a href="http://khomaudepraothue.com/dulich/?page_id=2">Trang Mẫu</a>
											</li>
											<li id="menu-item-280" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-280">
												<a href="http://khomaudepraothue.com/dulich/?page_id=2">Trang Mẫu</a></li>
											</ul>
									</li>
								</ul>
							</div>
							
							<div class="hidden-lg col-xs-12">
								<div id="menu-toggle" class="mobile-menu-no-search">
									<span id="">Menu</span>
									<button id="" type="button" class="rt-navbar-toggle hidden-lg">
										<span class="screen-reader-text sr-only">Toggle navigation</span>
										<span class="icon-bar bar1"></span>
										<span class="icon-bar bar2"></span>
										<span class="icon-bar bar3"></span>
									</button>
								</div>
							</div>
						</div><!-- .row -->
					</div><!-- .container -->
				</nav>
			</div>
		</header>
		
		<?php if(!is_home()) { ?>
			<div class="container">
				<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs"><i class="fa fa-home"></i> ','</p>');} ?>
			</div>
			<?php } ?>
