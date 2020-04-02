<?php /* Template Name: About */ ?>

<?php get_header(); ?>
<div>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <?php get_field('About us') ?>
            <h1 class="about-us">Om oss</h1>
            <div class="about-wrapper">
                <div>
                    <h3> <?php echo the_field('title1') ?> </h3>
                    <p> <?php echo the_field('text1') ?> </p>
                </div>
                <div>
                    <h3> <?php echo the_field('title2') ?> </h3>
                    <p> <?php echo the_field('text2') ?> </p>
                </div>
            </div>



        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>