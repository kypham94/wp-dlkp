<?php get_header(); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
		<div id="content">
			<div class="container">
				<div class="col-xs-12 col-sm-12 col-md-9">
					<div class="single-post">
						<h1><?php the_title(); ?></h1>
						<div class="content-single">
							<article class="post-content">
								<?php the_content(); ?>
							</article>
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