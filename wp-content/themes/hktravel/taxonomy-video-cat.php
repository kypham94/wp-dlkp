<?php get_header(); ?>
<div id="content">
	<div class="content-post" id="page-video">
		<div class="container">
			<div class="tab-content">
				<h1><?php single_cat_title(); ?></h1>
			</div>
		</div>
	</div>
	<div class="content-video">
		<div class="container">
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