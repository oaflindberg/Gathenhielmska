<?php /* Template Name: Event */ ?>
<?php get_header(); ?>

<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'Evenemang',
    'orderby' => 'date',
    'order' => 'ASC'
];
?>
<?php $events = get_posts($args); ?>
<?php if (count($events)) : ?>
    <div class="event-container">
        <?php foreach ($events as $post) : ?>
            <div class="event-cards">
                <?php the_post_thumbnail('thumbnail'); ?>
                <h1>
                    <a href="<?php echo get_permalink($post); ?>">
                        <?php echo $post->post_title; ?>
                    </a>
                </h1>
                <p><?php echo $post->post_content; ?></p>

            </div> <?php endforeach; ?> </div>
<?php endif; ?>



<?php $events = get_posts(['post_type' => 'Evenemang']) ?>



<?php foreach ($events as $event) : ?>

    <?php $categories = get_the_terms($event, 'category')  ?>


    <?php foreach ($categories as $category) : ?>

        <p> <?php echo $category->name ?></p>
    <?php endforeach; ?>

<?php endforeach; ?>



<?php get_footer(); ?>