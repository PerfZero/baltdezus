<?php get_header(); ?>

<div class="content-wrapper">
    <div class="content-wrapper__left">
		<div class="content_head">
        <div class="breadcrumbs-custome">
			<a href="">Главная</a>
			<a href="">Услуги</a>
			
        </div>
			<img src="http://baltdezus.devdenis.ru/wp-content/uploads/2024/12/logo_black.png">
			<div class="meta-head">
        <div class="logo">
            <span class="logo__text">BALTDEZUS</span>
        </div>
		
        <h1 class="post-title post-uslugi"><?php the_title(); ?></h1>
			    </div>
						    </div>
        <div class="post-meta">
			<div class="content_contents uslugi-cont">
            <span class="post-meta__icon"><img src="<?php echo esc_url(get_field('icob')); ?>"></span>
            <span class="post-meta__subtitle"><?php the_title(); ?></span>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
			
 </div>
    </div>
    <div class="content-wrapper__right">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail">
                <?php the_post_thumbnail('fill'); ?>
            </div>
        <?php endif; ?>
		
    </div>
</div>

<?php get_footer(); ?>
