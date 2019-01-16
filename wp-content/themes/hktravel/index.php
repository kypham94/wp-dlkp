<?php get_header(); ?>
	<div id="content">
		<?php get_template_part('slider'); ?>
		<div class="content-featured">
			<div class="container">
				<h2><span>Danh mục nổi bật</span></h2>
				<div class="main-featured">
					<div class="box-left">
						<div class="cate_list" style="background: url(https://dulichkhampha.net/wp-content/uploads/2018/12/gioi-thieu.jpg);
		background-size: cover;">
							<a href="https://dulichkhampha.net/gioi-thieu" title="Giới thiệu"></a>
							<h5 class="heading_title">
								<a href="https://dulichkhampha.net/gioi-thieu" title="Giới thiệu"><i class="fa fa-map-marker"></i>Giới thiệu</a>
							</h5>
						</div>
					</div>
					
					<div class="box-right">
						<div class="cate_list" style="background: url(https://dulichkhampha.net/wp-content/uploads/2018/12/am-thuc.jpg);
		background-size: cover;float:right">
							<a href="https://dulichkhampha.net/am-thuc" title="Ẩm thực"></a>
							<h5 class="heading_title">
								<a href="https://dulichkhampha.net/am-thuc" title="Ẩm thực"><i class="fa fa-map-marker"></i>Ẩm thực</a>
							</h5>
						</div>
						
						<div class="cate_list" style="background: url(https://dulichkhampha.net/wp-content/uploads/2018/12/du-lich.jpg);
		background-size: cover;">
							<a href="https://dulichkhampha.net/du-lich" title="Du lịch"></a>
							<h5 class="heading_title">
								<a href="https://dulichkhampha.net/du-lich" title="Du lịch"><i class="fa fa-map-marker"></i>Du lịch</a>
							</h5>
						</div>
				
						<div class="cate_list" style="background: url(https://dulichkhampha.net/wp-content/uploads/2018/12/suc-khoe.jpg);
		background-size: cover;float:right">
							<a href="https://dulichkhampha.net/suc-khoe" title="Sức khỏe"></a>
							<h5 class="heading_title">
								<a href="https://dulichkhampha.net/suc-khoe" title="Sức khỏe"><i class="fa fa-map-marker"></i>Sức khỏe</a>
							</h5>
						</div>
						
						<div class="cate_list" style="background: url(https://dulichkhampha.net/wp-content/uploads/2018/12/lam-dep.jpg);
		background-size: cover;">
							<a href="https://dulichkhampha.net/lam-dep" title="Làm đẹp"></a>
							<h5 class="heading_title">
								<a href="https://dulichkhampha.net/lam-dep" title="Làm đẹp"><i class="fa fa-map-marker"></i>Làm đẹp</a>
							</h5>
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
							<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Bài viết nổi bật</a>
						</li>
					</ul>
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="tab1">
							<div class="detail-post-main">
								<div class="info-post">
									<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=post&meta_key=views&orderby=meta_value_num'); ?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
										<div class="col-xs-12 col-sm-12 col-md-4" id="post_noibat">
											<div class="box-post">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
											<div class="box-mota">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span><strong><i>View: </strong><?php echo getpostviews(get_the_id()); ?> Lượt xem</i></span></div>
											<p><?php echo teaser(30); ?></p>
											</div>
											</div>
										</div>
									<?php endwhile; wp_reset_postdata(); ?>
									<div class="clear"></div>
								</div>
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
						
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=post&cat=1'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
										<div class="col-xs-12 col-sm-12 col-md-4" id="post_noibat">
											<div class="box-post" style="background:#f5f5f5;">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
											<div class="box-mota-cate">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span><strong><i>View: </strong><?php echo getpostviews(get_the_id()); ?> Lượt xem</i></span></div>
											<p><?php echo teaser(30); ?></p>
											</div>
											</div>
										</div>
										<?php endwhile; wp_reset_postdata(); ?>	
								
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="amthuc">
								<div class="content-tour-list">
									
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=post&cat=3'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-12 col-sm-12 col-md-4" id="post_noibat">
											<div class="box-post" style="background:#f5f5f5;">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
											<div class="box-mota-cate">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span><strong><i>View: </strong><?php echo getpostviews(get_the_id()); ?> Lượt xem</i></span></div>
											<p><?php echo teaser(30); ?></p>
											</div>
											</div>
										</div>
										<?php endwhile; wp_reset_postdata(); ?>	
								
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="lamdep">
								<div class="content-tour-list">
								
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=post&cat=35'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-12 col-sm-12 col-md-4" id="post_noibat">
											<div class="box-post" style="background:#f5f5f5;">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
											<div class="box-mota-cate">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span><strong><i>View: </strong><?php echo getpostviews(get_the_id()); ?> Lượt xem</i></span></div>
											<p><?php echo teaser(30); ?></p>
											</div>
											</div>
										</div>
										<?php endwhile; wp_reset_postdata(); ?>	
						
								</div>
							</div>
							<div role="tabpanel" class="tab-pane" id="suckhoe">
								<div class="content-tour-list">
								
										<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=6&post_type=post&cat=37'); ?>
										<?php global $wp_query; $wp_query->in_the_loop = true; ?>
										<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
											<div class="col-xs-12 col-sm-12 col-md-4" id="post_noibat">
											<div class="box-post" style="background:#f5f5f5;">
											<div class="info-post-img">
												<a href="<?php the_permalink(); ?>">
													<?php echo get_the_post_thumbnail( get_the_id(), 'post-thumb', array("alt"=>get_the_title(), 'class' => 'img-post') ); ?>
												</a>
											</div>
											<div class="box-mota-cate">
											<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
											<div class="meta"><span><strong><i>View: </strong><?php echo getpostviews(get_the_id()); ?> Lượt xem</i></span></div>
											<p><?php echo teaser(30); ?></p>
											</div>
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
<?php get_footer(); ?>
