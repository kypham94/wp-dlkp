<?php get_header(); ?>
<div id="content">
	<div class="content-post" id="page-category">
		<div class="container">
			<div class="tab-content">
				<h1><?php single_cat_title(); ?></h1>
				<div class="detail-post-main">
					<ul>
						<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<li>
								<div class="time-line">
									<span class="round"></span>
									<span class="time"><?php echo get_the_date('d/m/Y'); ?></span>
								</div>
								<div class="info-post">
									<div class="row">
										<div class="col-xs-12 col-sm-12 col-md-8">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span>Chia sẻ bởi: <strong><?php the_author(); ?></strong></span></div>
											<p><?php echo teaser(80); ?></p>
											<div class="view"><span><?php echo getpostviews(get_the_id()); ?> Lượt xem</span></div>
										</div>
										<div class="col-xs-12 col-sm-12 col-md-4">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</li>
						<?php endwhile; else : ?>
							<li><p>Không có bài viết nào trong chuyên mục!</p></li>
						<?php endif; ?>
					</ul>
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
</div>
<?php get_footer(); ?>