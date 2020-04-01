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

                <?php get_field('Event info') ?>
                <p> <?php echo the_field('descript') ?></p>
                <p> <?php echo the_field('entrance') ?> </p>
                <p> <?php echo the_field('date') ?> </p>

                <img class="thumbnail" src="<?php the_field('thumbnail') ?>" alt="">


                <?php $categories = get_the_terms($post, 'category')  ?>
                <?php foreach ($categories as $category) : ?>
                    <p> <?php echo 'Kategori: ' .  $category->name ?></p>
                    <a href="<?php echo get_term_link($category) ?>"> <?php echo $category->name ?></a>
                <?php endforeach; ?>
                <button href="www.biletto.se">Tickets</button>

            </div> <?php endforeach; ?> </div>
<?php endif; ?>
<?php get_footer(); ?>