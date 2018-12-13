<!-- Slider get 3 bài viết mới nhất!-->

<div class="content-top">
	<div class="container">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php 
					$args = array(
						'post_status' => 'publish', // Chỉ lấy những bài viết được publish
						'showposts' => 2, // số lượng bài viết
						'cat' => 1,
					);
				?>
				<?php $getposts = new WP_query($args);?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<div class="item">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8">
								<?php echo get_the_post_thumbnail( get_the_id(), 'slider-thumb', array('alt' => get_the_title(), 'class' => 'images-slider')); ?>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="info-slider">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<div class="meta"><span>Chia sẻ bởi: <strong><?php the_author(); ?></strong></span></div>
									<p><?php echo teaser(50); ?></p>
									<a href="<?php the_permalink(); ?>" class="more">Chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
								<ol class="carousel-indicators">
									<li data-target="#carousel-id" data-slide-to="0" class=""></li>
									<li data-target="#carousel-id" data-slide-to="1" class=""></li>
									<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
								</ol>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>

				<?php 
					$args = array(
						'post_status' => 'publish', // Chỉ lấy những bài viết được publish
						'showposts' => 1, // số lượng bài viết
						'offset' => 2 // Bỏ 2 bài đầu tiên
						'cat' => 1,
					);
				?>
				<?php $getposts = new WP_query($args);?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
					<div class="item active">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-8">
								<?php echo get_the_post_thumbnail( get_the_id(), 'slider-thumb', array('alt' => get_the_title(), 'class' => 'images-slider')); ?>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4">
								<div class="info-slider">
									<h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
									<div class="meta"><span>Chia sẻ bởi: <strong><?php the_author(); ?></strong></span></div>
									<p><?php echo teaser(50); ?></p>
									<a href="<?php the_permalink(); ?>" class="more">Chi tiết <i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
								<ol class="carousel-indicators">
									<li data-target="#carousel-id" data-slide-to="0" class=""></li>
									<li data-target="#carousel-id" data-slide-to="1" class=""></li>
									<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
								</ol>
							</div>
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
