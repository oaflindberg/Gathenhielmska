<?php /* Template Name: News */ ?>
<?php get_header(); ?>

<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'News',
    'orderby' => 'date',
    'order' => 'ASC'
];
?>
<?php $news = get_posts($args); ?>

<?php if (count($news)) : ?>


    <div class="news-container">
        <?php foreach ($news as $post) : ?>

            <div class="news-cards">
                <h3> <?php echo the_field('title') ?> </h3>
                <img class="news-thumbnail" src="<?php the_field('image') ?>" alt="">
                <p class="news-short"> <?php echo the_field('description') ?></p>
                <a class="read-more" href="<?php echo get_permalink($post); ?>">Läs mer</a>
            </div>

    </div>
<?php endforeach; ?>
</div>
<?php endif; ?>
<?php get_footer(); ?>
