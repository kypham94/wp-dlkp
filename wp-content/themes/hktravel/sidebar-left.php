<div class="widget-l">
	<h3 class="title">
		Ngẫu nhiên
	</h3>
	<div class="content-sl">
		<ul>
			<?php 
				$postquery = new WP_Query(array('posts_per_page' => 8, 'orderby' => 'rand'));
				if ($postquery->have_posts()) {
				while ($postquery->have_posts()) : $postquery->the_post();
				$do_not_duplicate = $post->ID;
			?>
			<li>
				<i class="fa fa-angle-right"></i> <a href="<?php the_permalink();?>"><?php the_title();?></a>
			</li>
			<?php endwhile; }  wp_reset_postdata(); ?>
		</ul>
	</div>
</div>