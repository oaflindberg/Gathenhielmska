<?php /* Template Name: Info */ ?>

<?php get_header(); ?>

<div class="info-wrapper">
    <a class="arrow-back-info" href="http://localhost:8000/kontakt/">
        <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/arrow-back.svg" alt="back">
    </a>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div>

<?php get_footer(); ?>