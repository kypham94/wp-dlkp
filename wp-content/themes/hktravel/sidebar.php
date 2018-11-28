<div class="widget">
	<h3>
		Bài mới
	</h3>
	<div class="content-w">
		<ul>
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-thumb-wg') ); ?>
					</a>
					<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
					<div class="clear"></div>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>

<div class="widget">
	<h3>
		Bài viết xem nhiều
	</h3>
	<div class="content-w">
		<ul>
			<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
			<?php global $wp_query; $wp_query->in_the_loop = true; ?>
			<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<li>
					<h4><a href="<?php the_permalink(); ?>"><i class="fa fa-angle-double-right"></i> <?php the_title(); ?></a></h4>
				</li>
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>

<div class="widget">
	<h3>
		Fan page
	</h3>
	<div class="content-w">
		<div class="fb-page" data-href="https://facebook.com/huykiradotnet" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
	</div>
</div>