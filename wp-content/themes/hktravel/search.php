<?php get_header(); ?>
<div class="content-post">
	<div class="container">
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active" id="home1">
				<div class="detail-post-main">
					<ul>       
						<h2>Kết Quả Tìm</h2>
						<?php if(have_posts()) : while(have_posts()) : the_post() ?>
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
						<?php endwhile; else: ?>
						<p>Không có kết quả tìm kiếm! :(</p>
					<?php endif; ?>
				</ul>
			</div>
		</div>
	</div>
</div>
</div>

<?php get_footer(); ?>