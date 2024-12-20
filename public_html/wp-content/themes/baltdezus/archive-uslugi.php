<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package baltdezus
 */

get_header();
?>

<?php if (function_exists('custom_breadcrumbs')) custom_breadcrumbs(); ?>

<section class="posts-section">
    <div class="posts-container">
        <?php
        // Начало цикла
        if (have_posts()) :
            $counter = 1; // Счетчик для порядкового номера
            while (have_posts()) : the_post();
        ?>

            <div class="post-item">
           
              
                <!-- Название поста -->
                <h2 class="post-item__title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                
                <h2 class="post-item__icon">
                    <div class="item_icon"><img src="<?php echo esc_url(get_field('icob')); ?>"></div>
                </h2>

                <!-- Изображение поста (если есть) -->
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-item__thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('full'); ?>
                        </a>
                    </div>
                <?php endif; ?>

                <!-- Категории и кастомные таксономии -->
                <!-- Категории и кастомные таксономии -->
<div class="post-item__categories">
    <?php 
    // Инициализация счетчика
    $counter = 1;


    // Получаем кастомные таксономии (например, 'vrediteli_category')
    $custom_taxonomies = get_the_terms(get_the_ID(), 'categorys');
    if ($custom_taxonomies && !is_wp_error($custom_taxonomies)) :
        foreach ($custom_taxonomies as $tax) :
            echo ' <span class="post-item__category post-item__category--custom">[' . sprintf('%02d', $counter) . ']</span> ' . $tax->name . ' ';
            $counter++; // Увеличиваем счетчик
        endforeach;
    endif;
    ?>
</div>


                <!-- Кнопка Подробнее -->
                <div class="post-item__link">
                    <a href="<?php the_permalink(); ?>" class="post-item__button">Подробнее</a>
                </div>
            </div>

        <?php
            $counter++; // Увеличиваем основной счетчик
            endwhile;
        else :
            echo '<p>Посты не найдены.</p>';
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
?>
