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

            <div class="post-item tover-item">
           
              
                
                <h2 class="post-item__titles">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                           <p class="post-item__desk">
                    Инсектицидное средство
                </p>
                
            
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
<div class="post-item__price">

</div>
 <div class="post-item__metas">
				 <div class="post-item__price">
                   500₽
                </div>
                <!-- Кнопка Подробнее -->
                <div class="post-item__links">
                    <a href="<?php the_permalink(); ?>" class="post-item__button">Подробнее</a>
                </div>
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
