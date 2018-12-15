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
	<script type="application/ld+json">{
		"@context": "http://schema.org/",
		"@type": "Professionalservice",
	        "@id":"https://dulichkhampha.net/",
		"url": "https://dulichkhampha.net/",
		"logo": "https://dulichkhampha.net/wp-content/uploads/2018/12/du-lich-kham-pha.png",
	        "image":"https://dulichkhampha.net/wp-content/uploads/2018/12/du-lich-kham-pha.png",
	        "priceRange":"1000$-30000$",
		"hasMap": "https://www.google.com/maps/dir/21.0296832,105.8004992/Xu%C3%A2n+Mai+Complex,+H%C3%A0+%C4%90%C3%B4ng,+H%C3%A0+N%E1%BB%99i/@20.9939653,105.7403791,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x313452fa04f0058f:0x9347c7d0fe6b8b05!2m2!1d105.7413187!2d20.9604323",	
		"email": "mailto:dulichkhampha.net@gmail.com",
	        "founder": "Hoàn Nguyễn",  
		"address": {
		"@type": "PostalAddress",
		"addressLocality": "Hà Nội",
		"addressCountry": "VIỆT NAM",
		"addressRegion": "Hà Nội",
		"postalCode":"100000",
		"streetAddress": "G1110, Xuân Mai Complex, Hà Đông, Hà Nội"
		},
		"description": "Cùng khám phá những địa điểm du lịch, ăn uống; các kiến thức về sức khỏe, làm đẹp hữu ích nhất trên website: dulichkhampha.net",
		"name": "Du lịch khám phá",
		"telephone": "0979027181", 
		"openingHours": [ "Mo-Sun 08:00-22:00" ],
		"geo": {
		"@type": "GeoCoordinates",
			"latitude": "20.9939653", 
		"longitude": "105.8004992" 
			}, 			


		"sameAs" : [    "https://www.facebook.com/dulichkhampha.net/",
						"https://www.youtube.com/channel/UCyQhQaa3qYoeUFxhkQTfALg?view_as=subscriber",
						"https://twitter.com/dulich_khampha",
						"https://www.instagram.com/dulichkhampha.nett/",
						"https://www.linkedin.com/in/du-l%E1%BB%8Bch-kh%C3%A1m-ph%C3%A1-9b1682176/",
						"https://www.pinterest.com/dulichkhamphanet/",
						"https://trello.com/dulichkhampha",
						"https://www.tumblr.com/blog/du-lich-kham-pha"]
		}
	</script>

	<script type="application/ld+json">{
		  "@context": "http://schema.org/",
		  "@type": "Person",
		  "name": "Hoàn Nguyễn", 
		  "jobTitle": "Ceo",
		  "worksFor" : "Chia sẻ kinh nghiệm du lịch",
		  "url": "https://dulichkhampha.net/",
		  "sameAs":["https://www.facebook.com/Hoan2603", 
		  "https://www.youtube.com/channel/UConaJZtT22qeTnHUmkxVtMQ?view_as=subscriber",
		  "AlumniOf" : [ "Trường Trung học phổ thông Xuân Trường", 
		  "Học viện Nông nghiệp Việt Nam" ], 
		  "address": {
		  "@type": "PostalAddress",
	          "addressLocality": "Hà Nội",
	          "addressRegion": "vietnam"
		 }}
	</script>
</head>
<body>
	<?php global $hk_options; ?>
	<div id="wrapper">
		<header>
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
											<li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279">
												<a href="http://khomaudepraothue.com/dulich/?page_id=2">Trang Mẫu</a>
											</li>
											
											<li id="menu-item-279" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-279">
												<a href="http://khomaudepraothue.com/dulich/?page_id=2">Trang Mẫu</a>
											</li>
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
