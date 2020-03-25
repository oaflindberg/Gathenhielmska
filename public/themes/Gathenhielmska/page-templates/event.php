<?php /* Template Name: Event */ ?>
<?php get_header(); ?>
<div class="">
    <div class="">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'event',
];
?>
<?php $events = get_posts($args); ?>
<?php if (count($events)) : ?>
    <div class="event-container">
        <?php foreach ($events as $post) : ?>
            <div class="event-cards">
                <a href="<?php echo get_permalink($post); ?>">
                    <?php echo $post->post_title; ?>

                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>