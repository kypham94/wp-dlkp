<?php get_header(); ?>
	<div id="content">
		<div class="container">
			<div class="col-xs-12 col-sm-12 col-md-9">
				<div class="single-post">
					<div class="content-single">
						<article class="post-content">
							<p>Trang không tồn tại vui lòng về <a href="<?php bloginfo('url'); ?>">TRANG CHỦ</a></p>
							<div style="text-align: center; margin-bottom: 15px;">
								<img src="<?php bloginfo('template_directory'); ?>/images/404.png" alt="Trang không tồn tại">
							</div>
						</article>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-3">
				<div class="sidebar">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>