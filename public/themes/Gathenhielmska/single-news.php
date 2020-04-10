<?php get_header(); ?>
<div class="single-news-wrapper">
    <?php if (have_posts()) : ?>
        <div class="single-news">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-news-cards">
                    <img class="news-thumbnail" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container">
                        <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                        <p class="news-short"><?php echo the_field('content') ?></p>
                        <div class="navigation">
                            <div>
                                <?php previous_post_link(); ?>
                            </div>
                            <div>
                                <?php next_post_link(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>






<?php get_footer(); ?>
