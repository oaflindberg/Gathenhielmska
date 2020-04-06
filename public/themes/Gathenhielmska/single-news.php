<?php get_header(); ?>
<div class="single-news-wrapper">
    <?php if (have_posts()) : ?>
        <div class="single-news">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-news-container">
                    <img class="single-news-thumbnail" src="<?php the_field('image') ?>" alt="">
                    <h3><?php echo the_field('title') ?></h3>
                    <p><?php echo the_field('content') ?> </p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
<div class="navigation">
    <?php previous_post_link(); ?>
    <?php next_post_link(); ?>
</div>


<?php get_footer(); ?>
