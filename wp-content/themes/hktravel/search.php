<?php get_header(); ?>
<div id="content" role="main">
	<div class="container">
		<div class="main-featured">
			<div class="row">       
				<h2>Kết Quả Tìm</h2>
				<?php if(have_posts()) : while(have_posts()) : the_post() ?>
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="detail-post">
							<span class="line"></span>
							<a href="<?php the_permalink(); ?>">
								<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
							</a>
							<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
						</div>
					</div>
				<?php endwhile; else: ?>
				<p>Không có kết quả tìm kiếm! :(</p>
			<?php endif; ?>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>