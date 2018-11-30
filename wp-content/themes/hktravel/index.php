<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('slider'); ?>
		<div class="content-featured">
			<div class="container">
				<h2><span>Bài viết nổi bật</span></h2>
				<div class="main-featured">
					<div class="row">
						<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=8&post_type=post&cat=5'); ?>
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
		<div class="content-post">
			<div class="container">
				<div role="tabpanel">
					<ul class="nav nav-tabs post-tabs" role="tablist">
						<li role="presentation" class="active">
							<a href="#home1" aria-controls="home1" role="tab" data-toggle="tab">Bài viết mới</a>
						</li>
						<li role="presentation">
							<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Xem nhiều nhất</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home1">
							<div class="detail-post-main">
								<ul>
									<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=post'); ?>
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
						<div role="tabpanel" class="tab-pane" id="tab1">
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
								<a href="#tour" aria-controls="tour" role="tab" data-toggle="tab">Tour du lịch</a>
							</li>
							<li role="presentation">
								<a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">Khách sạn</a>
							</li>
							<li role="presentation">
								<a href="#restaurent" aria-controls="restaurent" role="tab" data-toggle="tab">Nhà hàng</a>
							</li>
							<li role="presentation">
								<a href="#rent" aria-controls="rent" role="tab" data-toggle="tab">Thuê xe</a>
							</li>
						</ul>
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="tour">
								<div class="content-tour-list">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour2.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour3.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour4.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour5.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour6.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour7.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/tour8.jpg"></a>
												<div class="info-tour">
													<h4><a href="#">Tour du lịch Đà Nẵng 2N3Đ</a></h4>
													<div class="meta">
														<span>Hà Nội <span class="fa fa-long-arrow-right"></span> Đà Nẵng</span>
													</div>
													<div class="price">
														<span>3.000.000 VNĐ</span>
														<i>Hải Thanh Travel</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="hotel">
								<div class="content-tour-list">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h1.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h2.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h3.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h4.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h5.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h6.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h7.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/h8.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Khách sạn Novotel Đà Nẵng</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span style="color: #e00;">3.000.000 VNĐ</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="restaurent">
								<div class="content-tour-list">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r1.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r2.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r3.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r4.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r5.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r6.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r7.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/r8.jpg"></a>
												<div class="info-tour info-hotel">
													<div class="star" style="background: #FF5722;"><span>5</span></div>
													<div class="h-info">
														<h4><a href="#">Nhà hàng Phương Đông</a></h4>
														<div class="meta">
															<span>02 Trần phú, Đà Nẵng</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Đánh giá</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="rent">
								<div class="content-tour-list">
									<div class="row">
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t1.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t2.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t3.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t4.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t5.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t6.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t7.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-4 col-md-3">
											<div class="detail-tour detail-hotel detail-rent">
												<a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/t8.jpg"></a>
												<div class="info-tour info-hotel info-rent">
													<div class="h-info">
														<h4><a href="#">Thuê xe Hyundai County </a></h4>
														<div class="meta">
															<span>Nói đến dòng xe phục vụ khách...</span>
														</div>
													</div>
													<div class="clear"></div>
													<div class="price">
														<span>Xem chi tiết</span>
														<i>12 Lượt xem</i>
														<div class="clear"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="content-video">
			<div class="container">
				<h2 class="title-video">
					Video mới
				</h2>
				<div class="list-video">
					<div class="row">
					<?php// $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=10&post_type=video'); ?>
					<?php// global $wp_query; $wp_query->in_the_loop = true; ?>
					<?php// while ($getposts->have_posts()) : $getposts->the_post(); ?>
						<div class="col-xs-6 col-sm-4 col-md-5ths">
							<div class="list-v">
								<div class="detail-video">
									<a href="<?php// the_permalink();?>">
										<?php// echo get_the_post_thumbnail( get_the_id(), 'video-thumb', array( 'class' =>'thumnail') ); ?>
									</a>
								</div>
								<h4><a href="<?php// the_permalink();?>"><?php the_title(); ?></a></h4>
							</div>
						</div>
					<?php// endwhile; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="content-location">
			<div class="container">
				<h2>Địa điểm du lịch</h2>
				<div class="list-location">
					<ul class="row">
						<?php// $args = array( 
						    //'hide_empty' => 0,
						    //'taxonomy' => 'dia-diem-du-lich',
						    //'orderby' => id,
						    //); 
						    //$cates = get_categories( $args ); 
						    //foreach ( $cates as $cate ) {  ?>
								<li class="col-xs-6 col-sm-3 col-md-2" >
									<a href="<?php// echo get_term_link($cate->slug, 'dia-diem-du-lich'); ?>"><?php// echo $cate->name ?></a>
								</li>
						<?php } ?>
            		</ul>
				</div>
			</div>
		</div> -->
	</div>
<?php get_footer(); ?>