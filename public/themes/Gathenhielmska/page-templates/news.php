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
        <h1 class="news-header">Nyheter</h1>
        <div class="first-news-newsletter">
            <?php foreach ($newsFirst as $post) : ?>
                <div class="news-cards news-card-first">
                    <img class="news-thumbnail news-thumbnail-first" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container news-content-container-first">
                        <h3 class="news-title news-title-first"><?php echo the_field('title') ?> </h3>
                        <p class="news-time-first"><?php echo the_time('F j Y') ?></p>
                        <p class="news-short news-short-first"><?php echo the_field('description') ?></p>
                        <div class="read-more-container read-more-container-first">
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
        </div>
        <div class="testing-testing">
            <?php foreach (array_slice($news, 1) as $post) : ?>
                <div class="news-cards news-cards-rest ">
                    <img class="news-thumbnail news-thumbnail-rest" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container news-content-container-rest">
                        <h3 class="news-title news-title-rest"><?php echo the_field('title') ?> </h3>
                        <p class="news-time-first"><?php echo the_time('F j Y') ?></p>
                        <p class="news-short news-short-rest"><?php echo the_field('description') ?></p>
                        <div class="read-more-container read-more-container-rest">
                            <a class="read-more" href="<?php echo get_permalink($post); ?>"><button class="read-more-btn">Läs mer</button></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>
<?php get_footer(); ?>
