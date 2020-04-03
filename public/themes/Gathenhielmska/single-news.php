<?php get_header(); ?>
<div class="single-post-wrapper">
    <?php if (have_posts()) : ?>

        <div class="single-event">
            <?php while (have_posts()) : the_post(); ?>


                <div class="single-news-container">
                    <p><?php echo the_field('title') ?></p>
                    <img class="thumbnail-single" src="<?php the_field('image') ?>" alt="">
                    <p> <?php echo the_field('Content') ?> </p>
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
