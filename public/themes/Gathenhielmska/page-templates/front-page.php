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

<img class="background-mobile" class="background-img" src="<?php the_field('background_mobile') ?>" alt="">
<img class="background-desktop" src="<?php the_field('background_desktop') ?>" alt="">


<div class="text-wrapper">
    <h4 class="front-text"> <?php the_field('text') ?> </h4>
</div>



<?php
$args = [
    'numberposts' => 4,
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
            <img class="cat-icon" src=" <?php echo get_field('image', $term)  ?>" alt="">
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
                            <p class="date-text"> <?php echo the_field('date') ?> </p>
                            <p> <?php echo the_field('descript') ?></p>
                            <div class="ticket-wrapper">
                                <button class="ticket-btn" href="www.biletto.se">Boka plats</button>
                                <?php $categories = get_the_terms($post, 'category')  ?>
                                <div class="category-box">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo get_term_link($category) ?>"> <img class="cat-icon" src="<?php echo get_field('white_img', $category)  ?>" alt="">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </a> <?php endforeach; ?>
    </div>
<?php endif; ?>

<!-- A: 182, M: 7 -->
<?php $post = get_post(7); ?>

<img class="front-background" src="<?php bloginfo('template_directory') ?>/assets/images/background/front-background.svg" alt="backgroun">
<img class="front-background-desktop" src="<?php bloginfo('template_directory') ?>/assets/images/background/Union.svg" alt="backgroun">

<div class="second-text">
    <p class="second-text"><?php the_field('second_text'); ?></p>
</div>

<?php
$args = [
    'numberposts' => 3,
    'post_type' => 'News',
    'orderby' => 'date',
    'order' => 'DESC'
];
?>
<?php $news = get_posts($args); ?>
<h3 class=" title news-front">Nyheter</h3>
<?php if (count($news)) : ?>
    <div class=" news-container news-container-front wrapper-front">
        <?php foreach ($news as $post) : ?>
            <div class="test">
                <div class="news-cards news-cards-front">
                    <img class="news-thumbnail news-thumbnail-front" src="<?php the_field('image') ?>" alt="">
                    <div class="news-content-container news-content-container-front">
                        <h3 class="news-title"><?php echo the_field('title') ?> </h3>
                        <p class="news-time"><?php echo the_time('F j, Y') ?></p>
                        <p class="news-short"><?php echo the_field('description') ?></p>
                        <div class="read-more-container read-more-container-front">
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

<?php get_footer(); ?>