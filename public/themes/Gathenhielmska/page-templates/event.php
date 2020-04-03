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

    <?php wp_list_categories('feed_type') ?>

    <div class="event-container">
        <?php foreach ($events as $post) : ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <img class="thumbnail" src="<?php the_field('thumbnail') ?>" alt="">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div>
                        <p class="entrance"> <?php echo the_field('entrance') ?> </p>
                    </div>

                    <?php get_field('Event info') ?>

                    <div class="event-text">
                        <h3>

                            <?php echo $post->post_title; ?>

                        </h3>
                        <p> <?php echo the_field('date') ?> </p>

                        <p> <?php echo the_field('descript') ?></p>

                        <div class="ticket-wrapper">
                            <button class="ticket-btn" href="www.biletto.se">Tickets</button>

                            <?php $categories = get_the_terms($post, 'category')  ?>
                            <?php foreach ($categories as $category) : ?>

                                <a href="<?php echo get_term_link($category) ?>"> <?php echo $category->name ?></a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </a> <?php endforeach; ?> </div>
<?php endif; ?>
<?php get_footer(); ?>