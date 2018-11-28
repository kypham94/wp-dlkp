<?php get_header(); ?>
<div id="content">
	<div class="content-post" id="page-video">
		<div class="container">
			<div class="tab-content">
				<h1>Video</h1>
			</div>
			<div class="row">
				<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=1&post_type=video'); ?>
				<?php global $wp_query; $wp_query->in_the_loop = true; ?>
				<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="content-video-single" style="margin-bottom: 30px;">
						<iframe width="100%" height="500" src="https://www.youtube.com/embed/<?php echo types_render_field("video"); ?>" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-3">
					<div class="title"><?php the_title(); ?></div>
					<div class="content-single">
						<article class="post-content">
							<?php the_content(); ?>
						</article>
					</div>
				</div>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
	<div class="content-video">
		<div class="container">
			<h2 class="title-video">
				Video mới
			</h2>
			<div class="list-video">
				<div class="row">
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<div class="col-xs-6 col-sm-4 col-md-5ths">
							<div class="list-v">
								<div class="detail-video">
									<a href="<?php the_permalink();?>">
										<?php echo get_the_post_thumbnail( get_the_id(), 'video-thumb', array( 'class' =>'thumnail') ); ?>
									</a>
									<a href="<?php the_permalink();?>"><span><i class="fa fa-play"></i></span></a>
								</div>
								<h4><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h4>
							</div>
						</div>
					<?php endwhile; else : ?>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Không có video nào trong chuyên mục</p>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php if(paginate_links()!='') {?>
			<div class="quatrang">
				<?php
				global $wp_query;
				$big = 999999999;
				echo paginate_links( array(
					'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format' => '?paged=%#%',
					'prev_text'    => __('«'),
					'next_text'    => __('»'),
					'current' => max( 1, get_query_var('paged') ),
					'total' => $wp_query->max_num_pages
					) );
			    ?>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>