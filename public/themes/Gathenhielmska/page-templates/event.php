<?php /* Template Name: Event */ ?>
<?php get_header(); ?>
<div class="">
    <div class="">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>
<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'Evenemang',
];
?>
<?php $events = get_posts($args); ?>
<?php if (count($events)) : ?>
    <div class="event-container">
        <?php foreach ($events as $event) : ?>
            <div class="event-cards">
                <a href="<?php echo get_permalink($event); ?>">
                    <?php echo $event->post_title; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<?php get_footer(); ?>