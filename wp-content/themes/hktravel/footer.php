			<?php global $hk_options; ?>
			<footer>
				<div class="menu-footer hidden-sm hidden-xs">
					<div class="container">
						<div class="ft-menu">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_nav', 'container' => 'false', 'menu_id' => 'footer-nav', 'menu_class' => 'menu-footer') ); ?>
						</div>
					</div>
				</div>
				<div class="content-footer">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="al-content">
									<img src="<?php echo $hk_options[logo][url]; ?>" alt="<?php bloginfo('name'); ?>">
									<p><?php echo $hk_options['text-footer']; ?></p>
									<p><a href="<?php bloginfo('url'); ?>/gioi-thieu">Xem thêm <i class="fa fa-angle-double-right"></i></a></p>
									<p><a href="https://dulichkhampha.net/dieu-khoan-su-dung">Điều khoản sử dụng</p>
									<p><a href="https://dulichkhampha.net/chinh-sach-bao-mat">Chính sách bảo mật</p>
									<ul class="social-ft">
					                    <li><a href="<?php echo $hk_options['tw'];?>"><i class="fa fa-twitter"></i></a></li>
					                    <li><a href="<?php echo $hk_options['li'];?>"><i class="fa fa-linkedin-square"></i></a></li>
					                    <li><a href="<?php echo $hk_options['fb'];?>"><i class="fa fa-facebook-square"></i></a></li>
					                    <li><a href="<?php echo $hk_options['sk'];?>"><i class="fa fa-skype"></i></a></li>
					                    <li><a href="<?php echo $hk_options['pi'];?>"><i class="fa fa-pinterest-square"></i></a></li>  
					                </ul>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-2">
								<div class="block-link">
									<h3>Du lịch trong nước</h3>
									<?php wp_nav_menu( array( 'theme_location' => 'info_nav', 'container' => 'false', 'menu_id' => 'info-nav', 'menu_class' => 'menu-info') ); ?>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-2">
								<div class="block-link">
									<h3>Du lịch nước ngoài</h3>
									<?php wp_nav_menu( array( 'theme_location' => 'link_nav', 'container' => 'false', 'menu_id' => 'info-link', 'menu_class' => 'menu-link') ); ?>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="block-link ft-contact">
									<h3>Liên hệ</h3>
									<ul>
					                    <li>
					                        <i class="fa fa-map-marker"></i>
					                        <div class="fleft location_address">
					                            <?php echo $hk_options[addft]; ?>
					                        </div>
											<div class="clear"></div>
					                    </li>
					                    <li>
					                        <i class="fa fa-phone"></i>
					                        <div class="fleft contact_no">
					                            <a href="tel:+<?php echo $hk_options[phoneft]; ?>">+ <?php echo $hk_options[phoneft]; ?></a>  /  <a href="tel:+<?php echo $hk_options[hotft]; ?>"><?php echo $hk_options[hotft]; ?></a>
					                        </div>
					                        <div class="clear"></div>
					                    </li>
					                    <li>
					                        <i class="fa fa-envelope-o"></i>
					                        <div class="fleft contact_mail">
					                            <a href="mailto:<?php echo $hk_options[emailft]; ?>"><?php echo $hk_options[emailft]; ?></a>
					                        </div>
					                        <div class="clear"></div>
					                    </li>
					                </ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="copyright">
					<div class="container">
						<div class="copy-c">
							<p><?php echo $hk_options[copyr]; ?></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</footer>
			<nav id="menu-mobile">
				<?php wp_nav_menu( array( 'theme_location' => 'main_nav', 'container' => 'false', 'menu_id' => 'main-nav_mi', 'menu_class' => 'menu_mobi') ); ?>
				<div class="clear"></div>
			</nav>
		</div>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.all.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
		<?php wp_footer(); ?>
		<div id="fb-root"></div>
		<script>
		(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>
		<div id="backtotop"> 
		<a href="javascript:void(0)" class="backtotop"></a> 
		</div>                 
		<script type="text/javascript"> 
		$(function () { 
		    $("#backtotop").hide(); 
		    $(window).scroll(function () { 
		        if ($(this).scrollTop() > 500) { 
		            $('#backtotop').fadeIn(); 
		        } else { 
		            $('#backtotop').fadeOut(); 
		        } 
		    }); 
		}); 
		jQuery('.backtotop').click(function () { 
		    jQuery('html, body').animate({ 
		        scrollTop: 0 
		    }, 'slow'); 
		});
		
		$('#search').hide();
		$('.menu-item-299').click(function(){
			$('#search').fadeToggle("slow", "linear");
		});
		</script>
		
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-130880742-1"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-130880742-1');
		</script>




<!--<script type='text/javascript'>
//<![CDATA[
document.write('<div class="tet-2019"><img class="left-2019" id="left-2020" src="https://dulichkhampha.net/wp-content/uploads/2019/01/tet_left.png" alt="Câu đối chúc tết 2019"/><img class="right-2019" id="right-2020" src="https://dulichkhampha.net/wp-content/uploads/2019/01/tet_right.png" alt="Câu đối chúc tết 2019"/></div><style>#left-2020{width: 130px;left:0;z-index:7;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}#right-2020{width: 130px;right:0;z-index:7;position:fixed;;transition:all 0.3s linear;-moz-transition:all 0.3s linear;-webkit-transition:all 0.3s linear}.left-2019{top:0px}.right-2019{top:0px}.text-2019-l{top:50px}.text-2019-r{top:50px}@media screen and (max-width:1024px){.tet-2019{display:none}}@media screen and (max-width:1440px){#shareduyblogs{display:none}}</style>')
//]]>
</script>
<script>//<![CDATA[
      var lastScroll = 0;
      jQuery(document).ready(function($) {
        $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll > lastScroll) {
            $('#right-2020').removeClass('left-2019').addClass('text-2019-l')
            $('#left-2020').removeClass('right-2019').addClass('text-2019-r')
          } else if (scroll < lastScroll) {
            $('#right-2020').addClass('left-2019').removeClass('text-2019-l')
$('#left-2020').addClass('right-2019').removeClass('text-2019-r')
          }
          lastScroll = scroll;
        })
      })
//]]></script>-->

	</body>
</html>
