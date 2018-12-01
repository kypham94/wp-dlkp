<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<?php setpostview(get_the_id()); ?>
		<div id="content">
			<div class="container"><!-- 
				<div class="col-xs-12 col-sm-12 col-md-2 hidden-sm hidden-xs">
					<div class="sidebar-left">
						<?php get_sidebar('left'); ?>
					</div>
				</div> -->
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="single-post">
						<h1><?php the_title(); ?></h1>
						<div class="meta">
							<span>Ngày đăng: <strong><?php echo get_the_date('d/m/Y'); ?></strong></span>
							<span>Chia sẻ bởi: <strong><?php the_author(); ?></strong></span>
							<span>Chuyên mục: <strong><?php the_category(','); ?></strong></span>
							<span>Lượt xem: <strong><?php echo getpostviews(get_the_id()); ?> lượt</strong></span>
						</div>
						<div class="content-single">
							<article class="post-content">
								<?php the_content(); ?>
							</article>
						</div>
						<div class="post-tag">
							<span>Từ Khóa: </span><?php the_tags(''); ?>
						</div>
						<div class="share">
							<span class="like">
								<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
								<script src="https://apis.google.com/js/platform.js" async defer></script>
							  	<g:plusone size="medium"></g:plusone>
							</span>
							<div class="clear"></div>
						</div>
						<div class="comment">
							<div class="cmt">
								<div class="fb-comments" data-width="100%" data-href="<?php the_permalink(); ?>" data-numposts="3"></div>
							</div>
						</div>
						<div class="post-rel">
							<h3>Bài viết liên quan</h3>
							<div class="content-rel">
								<div class="row">
								<?php
								    $categories = get_the_category($post->ID);
								    if ($categories) 
								    {
								        $category_ids = array();
								        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
								 
								        $args=array(
									        'category__in' => $category_ids,
									        'post__not_in' => array($post->ID),
									        'showposts'=>6,
									        'caller_get_posts'=>1
								        );

								        $my_query = new wp_query($args);
								        if( $my_query->have_posts() ) 
								        {
								            while ($my_query->have_posts())
								            {
								                $my_query->the_post();
								                ?>
								                <div class="col-xs-12 col-sm-6 col-md-4">
								                	<div class="detail-rel">
								                		<a href="<?php the_permalink(); ?>">
															<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-thumb-wg') ); ?>
														</a>
														<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								                	</div>
								                </div>
								                <?php
								            }
								        }
								    }
								?>
								</div>
							</div>
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
	<?php endwhile; ?>
	<?php endif; ?>
<?php get_footer(); ?>