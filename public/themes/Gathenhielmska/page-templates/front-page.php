<?php /* Template Name: Front-page */ ?>

<?php get_header(); ?>
<!-- <div class="contact-wrapper">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>



            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
</div> -->

<img class="background-img" src="<?php the_field('background') ?>" alt="">
<div class="text-wrapper">
    <h4 class="front-text"> <?php the_field('text') ?> </h4>
</div>



<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'Evenemang',
    'orderby' => 'date',
    'order' => 'ASC'
];
?>
<?php $events = get_posts($args); ?>

<h3 class=" title upcoming-h3">Kommande evenemang</h3>

<?php

$terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
)); ?>
<div class="category-list cat-front">

    <?php foreach ($terms as $term) : ?>

        <a href="<?php echo get_term_link($term) ?> ">
            <img src=" <?php echo get_field('image_icon', $term)  ?>" alt="">
            <p> <?php echo get_field('title', $term)  ?></p>
        </a>

    <?php endforeach; ?>
</div>

<?php if (count($events)) : ?>
    <div class="event-container wrapper-front">
        <?php foreach ($events as $post) : ?>
            <a href="<?php echo get_permalink($post); ?>">
                <div class="test">
                    <div class="card-front event-cards ">
                        <img class="thumbnail" src="<?php the_field('thumbnail') ?>" alt="">
                        <?php the_post_thumbnail('thumbnail'); ?>
                        <div>
                            <p class="entrance"> <?php echo the_field('entrance') ?> </p>
                        </div>
                        <?php get_field('Event info') ?>
                        <div class="event-text">
                            <h3><?php echo $post->post_title; ?></h3>
                            <p> <?php echo the_field('date') ?> </p>
                            <p> <?php echo the_field('descript') ?></p>
                            <div class="ticket-wrapper">
                                <button class="ticket-btn" href="www.biletto.se">Tickets</button>
                                <?php $categories = get_the_terms($post, 'category')  ?>
                                <?php foreach ($categories as $category) : ?>
                                    <a href="<?php echo get_term_link($category) ?>"> <img src=" <?php echo get_field('image_icon', $category)  ?>" alt="">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </a> <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- A: 182, M: 7 -->
<?php $post = get_post(182); ?>

<img class="front-background" src="<?php bloginfo('template_directory') ?>/assets/images/background/front-background.svg" alt="backgroun">
<div class=" second-text">
    <p class="second-text"><?php the_field('second_text'); ?></p>
</div>

<?php
$args = [
    'numberposts' => 10,
    'post_type' => 'News',
    'orderby' => 'date',
    'order' => 'ASC'
];
?>
<?php $news = get_posts($args); ?>
<h3 class=" title news-front">Nyheter</h3>
<?php if (count($news)) : ?>
    <div class=" news-container wrapper-front">
        <?php foreach ($news as $post) : ?>
            <div class="test">
                <div class="news-cards">
                    <img class="news-thumbnail" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container">
                        <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                        <p class="news-short"><?php echo the_field('description') ?></p>
                        <div class="read-more-container">
                            <a class="read-more" href="<?php echo get_permalink($post); ?>"><button class="read-more-btn">Läs mer</button></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
<?php endif; ?>

<?php $post = get_post(7); ?>

<img class="front-background" src="<?php bloginfo('template_directory') ?>/assets/images/images/bird-frontpage.png" alt="background">

<<<<<<< HEAD

<?php get_footer(); ?>
=======
<?php get_footer(); ?>
>>>>>>> 7571d64adafe5d6d973c6701453d07a4e17e0a61
