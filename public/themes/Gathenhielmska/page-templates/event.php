<?php /* Template Name: Event */ ?>
<?php get_header(); ?>

<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'Evenemang',
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
