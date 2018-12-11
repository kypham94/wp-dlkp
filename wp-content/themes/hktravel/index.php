<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('slider'); ?>
		<div class="content-featured">
			<div class="container">
				<h2><span>Danh mục nổi bật</span></h2>
				<div class="main-featured">
					<div class="row">
						
						<div class="col-xs-12 col-sm-12 col-md-4" style="height:510px;">
							<img src="https://dulichkhampha.net/wp-content/uploads/2018/12/1.jpg" style="height:510px;">
							<h5 class="heading_title"><a href="https://dulichkhampha.net/gioi-thieu">Giới thiệu</a></h5>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-4" style="height:235px; margin-bottom: 35px;">
							<img src="https://dulichkhampha.net/wp-content/uploads/2018/12/2.jpg">
							<h5 class="heading_title"><a href="https://dulichkhampha.net/du-lich">Du lịch</a></h5>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-4" style="height:235px; margin-bottom: 35px;">
							<img src="https://dulichkhampha.net/wp-content/uploads/2018/12/3.jpg">
							<h5 class="heading_title"><a href="https://dulichkhampha.net/am-thuc">Ẩm thực</a></h5>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-4" style="height:235px; margin-bottom: 35px;">
							<img src="https://dulichkhampha.net/wp-content/uploads/2018/12/4.jpg">
							<h5 class="heading_title"><a href="https://dulichkhampha.net/lam-dep">Làm đẹp</a></h5>
						</div>
						
						<div class="col-xs-12 col-sm-12 col-md-4" style="height:235px; margin-bottom: 35px;">
							<img src="https://dulichkhampha.net/wp-content/uploads/2018/12/5.jpg">
							<h5 class="heading_title"><a href="https://dulichkhampha.net/suc-khoe">Sức khỏe</a></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-post">
			<div class="container">
				<div role="tabpanel">
					<ul class="nav nav-tabs post-tabs" role="tablist">
						<li role="presentation">
							<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Xem nhiều nhất</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab1">
							<div class="detail-post-main">
								<ul>
									<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
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
									<?php endwhile; wp_reset_postdata(); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			<div class="title-head">
				<div class="container">
					<div role="tabpanel">
						<ul class="nav nav-tabs post-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#dulich" aria-controls="dulich" role="tab" data-toggle="tab">Du lịch - Phượt</a>
							</li>
							<li role="presentation">
								<a href="#vanhoa" aria-controls="vanhoa" role="tab" data-toggle="tab">Văn hóa</a>
							</li>
							<li role="presentation">
								<a href="#amthuc" aria-controls="amthuc" role="tab" data-toggle="tab">Ẩm thực</a>
							</li>
							<li role="presentation">
								<a href="#lamdep" aria-controls="lamdep" role="tab" data-toggle="tab">Làm đẹp</a>
							</li>
							<li role="presentation">
								<a href="#suckhoe" aria-controls="suckhoe" role="tab" data-toggle="tab">Sức khỏe</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="dulich">
								<div class="content-tour-list">
									<div class="row">
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=1'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-6 col-sm-4 col-md-3">
												<div class="detail-post">
													<span class="line"></span>
													<a href="<?php the_permalink(); ?>">
														<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
													</a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>	
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="vanhoa">
								<div class="content-tour-list">
									<div class="row">
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=2'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-6 col-sm-4 col-md-3">
												<div class="detail-post">
													<span class="line"></span>
													<a href="<?php the_permalink(); ?>">
														<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
													</a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>	
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="amthuc">
								<div class="content-tour-list">
									<div class="row">
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=3'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-6 col-sm-4 col-md-3">
												<div class="detail-post">
													<span class="line"></span>
													<a href="<?php the_permalink(); ?>">
														<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
													</a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>	
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="lamdep">
								<div class="content-tour-list">
									<div class="row">
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=35'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-6 col-sm-4 col-md-3">
												<div class="detail-post">
													<span class="line"></span>
													<a href="<?php the_permalink(); ?>">
														<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
													</a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>	
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="suckhoe">
								<div class="content-tour-list">
									<div class="row">
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=37'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-6 col-sm-4 col-md-3">
												<div class="detail-post">
													<span class="line"></span>
													<a href="<?php the_permalink(); ?>">
														<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
													</a>
													<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
												</div>
											</div>
										<?php endwhile; wp_reset_postdata(); ?>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
