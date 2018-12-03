<div id="content" role="main">
    <div id="searchResults">       
        <h2>Kết Quả Tìm</h2>
        <?php if(have_posts()) : while(have_posts()) : the_post() ?>
        <div class="search">
            <h1><?php the_title();?></h1>
                <img src="<?php bloginfo('stylesheet_directory'); ?>/timthumb.php?src=<?php echo get_post_meta($post->ID,'Thumb',true)?>&a=t&w=130&h=130" border="0" />
                <?php the_content_rss('', false,'', 40);?>
            </p>
        </div>
            <?php endwhile; else: ?>
            <p>Tìm không ra! :(</p>
            <?php endif; ?>
    </div>
</div>