<?php /* Template Name: News */ ?>
<?php get_header(); ?>

<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'News',
    'orderby' => 'date',
    'order' => 'DESC',
];
$argsFirst = [
    'numberposts' => 1,
    'post_type' => 'News',
    'orderby' => 'date',
    'order' => 'DESC'
];
?>
<?php $news = get_posts($args); ?>
<?php $newsFirst = get_posts($argsFirst); ?>
<?php if (count($news)) : ?>

    <div class="news-container">
        <?php foreach ($newsFirst as $post) : ?>
            <div class="news-cards">
                <img class="news-thumbnail" src="<?php the_field('image') ?>" alt="">
                <div class="news-content-container">
                    <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                    <p class="news-short"><?php echo the_field('description') ?></p>
                    <div class="read-more-container">
                        <a class="read-more" href="<?php echo get_permalink($post); ?>"><button class="read-more-btn">Läs mer</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="newsletter">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

            <?php endwhile;
            endif; ?>
        </div>
        <?php foreach (array_slice($news, 1) as $post) : ?>
            <div class="news-cards">
                <img class="news-thumbnail" src="<?php the_field('image') ?>" alt="">
                <div class="news-content-container">
                    <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                    <p class="news-short"><?php echo the_field('description') ?></p>
                    <div class="read-more-container">
                        <a class="read-more" href="<?php echo get_permalink($post); ?>"><button class="read-more-btn">Läs mer</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
<?php endif; ?>
<?php get_footer(); ?>
