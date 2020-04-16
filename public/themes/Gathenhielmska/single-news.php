<?php get_header(); ?>
<div class="single-news-wrapper">
    <a class="arrow-back-news" href="http://localhost:8000/nyheter/">
        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/arrow-back.svg" alt="back">
    </a>
    <?php if (have_posts()) : ?>
        <div class="single-news">
            <?php while (have_posts()) : the_post(); ?>
                <div class="single-news-cards">
                    <img class="news-thumbnail single-news-thumbnail" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container single-news-content-container">
                        <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                        <p class="news-short"><?php echo the_field('content') ?></p>
                        <div class="news-navigation">
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