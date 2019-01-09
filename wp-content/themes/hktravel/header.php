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
	
	
	<![CDATA[
var bits=80; // how many bits
var speed=33; // how fast - smaller is faster
var bangs=5; // how many can be launched simultaneously (note that using too many can slow the script down)
var colours=new Array("#03f", "#f03", "#0e0", "#93f", "#0cf", "#f93", "#f0c"); 
//                     blue    red     green   purple  cyan    orange  pink

/****************************
*      Fireworks Effect     *
*(c)2004-11 mf2fm web-design*
*  http://www.mf2fm.com/rv  *
* DON'T EDIT BELOW THIS BOX *
****************************/
var bangheight=new Array();
var intensity=new Array();
var colour=new Array();
var Xpos=new Array();
var Ypos=new Array();
var dX=new Array();
var dY=new Array();
var stars=new Array();
var decay=new Array();
var swide=800;
var shigh=600;
var boddie;

window.onload=function() { if (document.getElementById) {
  var i;
  boddie=document.createElement("div");
  boddie.style.position="fixed";
  boddie.style.top="0px";
  boddie.style.left="0px";
  boddie.style.overflow="visible";
  boddie.style.width="1px";
  boddie.style.height="1px";
  boddie.style.backgroundColor="transparent";
  document.body.appendChild(boddie);
  set_width();
  for (i=0; i<bangs; i++) {
    write_fire(i);
    launch(i);
    setInterval('stepthrough('+i+')', speed);
  }
}}

function write_fire(N) {
  var i, rlef, rdow;
  stars[N+'r']=createDiv('|', 12);
  boddie.appendChild(stars[N+'r']);
  for (i=bits*N; i<bits+bits*N; i++) {
    stars[i]=createDiv('*', 13);
    boddie.appendChild(stars[i]);
  }
}

function createDiv(char, size) {
  var div=document.createElement("div");
  div.style.font=size+"px monospace";
  div.style.position="absolute";
  div.style.backgroundColor="transparent";
  div.appendChild(document.createTextNode(char));
  return (div);
}

function launch(N) {
  colour[N]=Math.floor(Math.random()*colours.length);
  Xpos[N+"r"]=swide*0.5;
  Ypos[N+"r"]=shigh-5;
  bangheight[N]=Math.round((0.5+Math.random())*shigh*0.4);
  dX[N+"r"]=(Math.random()-0.5)*swide/bangheight[N];
  if (dX[N+"r"]>1.25) stars[N+"r"].firstChild.nodeValue="/";
  else if (dX[N+"r"]<-1.25) stars[N+"r"].firstChild.nodeValue="\\";
  else stars[N+"r"].firstChild.nodeValue="|";
  stars[N+"r"].style.color=colours[colour[N]];
}

function bang(N) {
  var i, Z, A=0;
  for (i=bits*N; i<bits+bits*N; i++) { 
    Z=stars[i].style;
    Z.left=Xpos[i]+"px";
    Z.top=Ypos[i]+"px";
    if (decay[i]) decay[i]--;
    else A++;
    if (decay[i]==15) Z.fontSize="7px";
    else if (decay[i]==7) Z.fontSize="2px";
    else if (decay[i]==1) Z.visibility="hidden";
    Xpos[i]+=dX[i];
    Ypos[i]+=(dY[i]+=1.25/intensity[N]);
  }
  if (A!=bits) setTimeout("bang("+N+")", speed);
}

function stepthrough(N) { 
  var i, M, Z;
  var oldx=Xpos[N+"r"];
  var oldy=Ypos[N+"r"];
  Xpos[N+"r"]+=dX[N+"r"];
  Ypos[N+"r"]-=4;
  if (Ypos[N+"r"]<bangheight[N]) {
    M=Math.floor(Math.random()*3*colours.length);
    intensity[N]=5+Math.random()*4;
    for (i=N*bits; i<bits+bits*N; i++) {
      Xpos[i]=Xpos[N+"r"];
      Ypos[i]=Ypos[N+"r"];
      dY[i]=(Math.random()-0.5)*intensity[N];
      dX[i]=(Math.random()-0.5)*(intensity[N]-Math.abs(dY[i]))*1.25;
      decay[i]=16+Math.floor(Math.random()*16);
      Z=stars[i];
      if (M<colours.length) Z.style.color=colours[i%2?colour[N]:M];
      else if (M<2*colours.length) Z.style.color=colours[colour[N]];
      else Z.style.color=colours[i%colours.length];
      Z.style.fontSize="13px";
      Z.style.visibility="visible";
    }
    bang(N);
    launch(N);
  }
  stars[N+"r"].style.left=oldx+"px";
  stars[N+"r"].style.top=oldy+"px";
} 

window.onresize=set_width;
function set_width() {
  var sw_min=999999;
  var sh_min=999999;
  if (document.documentElement && document.documentElement.clientWidth) {
    if (document.documentElement.clientWidth>0) sw_min=document.documentElement.clientWidth;
    if (document.documentElement.clientHeight>0) sh_min=document.documentElement.clientHeight;
  }
  if (typeof(self.innerWidth)!="undefined" && self.innerWidth) {
    if (self.innerWidth>0 && self.innerWidth<sw_min) sw_min=self.innerWidth;
    if (self.innerHeight>0 && self.innerHeight<sh_min) sh_min=self.innerHeight;
  }
  if (document.body.clientWidth) {
    if (document.body.clientWidth>0 && document.body.clientWidth<sw_min) sw_min=document.body.clientWidth;
    if (document.body.clientHeight>0 && document.body.clientHeight<sh_min) sh_min=document.body.clientHeight;
  }
  if (sw_min==999999 || sh_min==999999) {
    sw_min=800;
    sh_min=600;
  }
  swide=sw_min;
  shigh=sh_min;
}
]]>
	
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
