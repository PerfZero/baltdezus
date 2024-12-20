<?php get_header(); ?>

<div class="content-wrapper">
    <div class="content-wrapper__left">
		<div class="content_head">
        <div class="breadcrumbs-custome">
			<a href="">Главная</a>
			<a href="">Вредители</a>
			
        </div>
			<img src="http://baltdezus.devdenis.ru/wp-content/uploads/2024/12/logo_black.png">
			<div class="meta-head">
        <div class="logo">
            <span class="logo__text">BALTDEZUS</span>
        </div>
		
        <h1 class="post-title"><?php the_title(); ?></h1>
			    </div>
						    </div>
        <div class="post-meta">
			<div class="content_contents">
            <span class="post-meta__icon"><img src="<?php echo esc_url(get_field('icob')); ?>"></span>
            <span class="post-meta__subtitle"><?php the_title(); ?></span>
        </div>
        <div class="post-content">
            <?php the_content(); ?>
        </div>
			<div class="post-numbers">
            <?php
                // Получаем все посты без фильтрации по категориям, чтобы проверить их общее количество
                $args = array(
                    'post_type' => 'vrediteli', // Тип контента
                    'posts_per_page' => -1, // Получаем все посты
                    'orderby' => 'date', // Сортировка по дате
                    'order' => 'ASC', // Или DESC в зависимости от того, как хотите сортировать
                );

                // Запрос всех постов
                $query = new WP_Query($args);
                $total_posts = $query->found_posts; // Общее количество постов
                $current_post_id = get_the_ID(); // ID текущего поста
                $current_post_number = 0; // Порядковый номер текущего поста

                // Перебираем посты, чтобы найти текущий пост и его порядковый номер
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $current_post_number++;
                        if ($current_post_id == get_the_ID()) {
                            break;
                        }
                    endwhile;
                    wp_reset_postdata();
                endif;

                // Форматируем номера с ведущими нулями
                $current_post_number = str_pad($current_post_number, 2, '0', STR_PAD_LEFT);
                $total_posts = str_pad($total_posts, 2, '0', STR_PAD_LEFT);
            ?>
            <span class="current-post-numbers"> <?php echo $current_post_number; ?></span>
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
<div class="post-niv">
 <!-- Порядковый номер и общее количество постов -->
          <div class="post-number">
            <?php
                // Получаем все посты без фильтрации по категориям, чтобы проверить их общее количество
                $args = array(
                    'post_type' => 'vrediteli', // Тип контента
                    'posts_per_page' => -1, // Получаем все посты
                    'orderby' => 'date', // Сортировка по дате
                    'order' => 'ASC', // Или DESC в зависимости от того, как хотите сортировать
                );

                // Запрос всех постов
                $query = new WP_Query($args);
                $total_posts = $query->found_posts; // Общее количество постов
                $current_post_id = get_the_ID(); // ID текущего поста
                $current_post_number = 0; // Порядковый номер текущего поста

                // Перебираем посты, чтобы найти текущий пост и его порядковый номер
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                        $current_post_number++;
                        if ($current_post_id == get_the_ID()) {
                            break;
                        }
                    endwhile;
                    wp_reset_postdata();
                endif;

                // Форматируем номера с ведущими нулями
                $current_post_number = str_pad($current_post_number, 2, '0', STR_PAD_LEFT);
                $total_posts = str_pad($total_posts, 2, '0', STR_PAD_LEFT);
            ?>
            <span class="current-post-number"> <?php echo $current_post_number; ?></span>
            <span class="total-posts-number">/ <?php echo $total_posts; ?></span>
        </div>

        <!-- Следующий и Предыдущий пост -->
        <div class="post-navigation">
            <div class="post-navigation__prev">
                <?php
                    $prev_post = get_previous_post();
                    if (!empty($prev_post)) : ?>
                        <a href="<?php echo get_permalink($prev_post->ID); ?>" class="prev-post-link">
                            <span><svg width="14" height="36" viewBox="0 0 14 36" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.63459 18.6933L4.96767 18L5.63459 17.3067L13 9.65028V2.47018L1 14.8623V21.1377L13 33.5298V26.3497L5.63459 18.6933Z" fill="#141414" stroke="#67C84A" stroke-width="2" />
</svg></span>
                        </a>
                <?php endif; ?>
            </div>
            <div class="post-navigation__next">
                <?php
                    $next_post = get_next_post();
                    if (!empty($next_post)) : ?>
                        <a href="<?php echo get_permalink($next_post->ID); ?>" class="next-post-link">
                            <span><svg width="14" height="36" viewBox="0 0 14 36" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M8.36541 18.6933L9.03233 18L8.36541 17.3067L1 9.65028V2.47018L13 14.8623V21.1377L1 33.5298V26.3497L8.36541 18.6933Z" fill="#141414" stroke="#67C84A" stroke-width="2" />
</svg></span>
                        </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
