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
		"description": "Cùng khám phá những địa điểm về văn hóa, du lịch, ăn uống; các kiến thức về sức khỏe, làm đẹp hữu ích nhất trên website: dulichkhampha.net",
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
		  "worksFor" : "Giám đốc du lịch khám phá",
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
