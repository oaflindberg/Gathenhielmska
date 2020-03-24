<?php /* Template Name: Contact */ ?>

<?php get_header(); ?>
<div class="contact-form-wrapper">
    <div class="contact-form">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
