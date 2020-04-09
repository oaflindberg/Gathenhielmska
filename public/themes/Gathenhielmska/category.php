<?php get_header(); ?>
<?php
$terms = get_terms('category');

$id = get_queried_object()->term_id;

$terms_query = new WP_Query(array(
    'post_type' => 'evenemang',
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'id',
            'terms' => array($id),
            'operator' => 'IN'
        )
    )
));

?>

<?php if ($terms_query->have_posts()) : ?>
    <?php while ($terms_query->have_posts()) : $terms_query->the_post(); ?>
        <div class="event-container category-container">
            <a href="<?php echo get_permalink($post); ?>">
                <div class="event-cards">
                    <img class="thumbnail" src="<?php the_field('thumbnail') ?>" alt="">
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <div>
                        <p class="entrance"> <?php echo the_field('entrance') ?> </p>
                    </div>
                    <?php get_field('Event info') ?>
                    <div class="event-text">
                        <div>
                            <h3><?php echo $post->post_title; ?></h3>
                        </div>
                        <div class="time-info">
                            <div>
                                <p> <?php echo the_field('date') ?> </p>
                                <p> <?php echo the_field('end_date') ?> </p>
                            </div>
                            <div>
                                <p> <?php echo the_field('time') ?> </p>
                                <p> <?php echo the_field('end_time') ?> </p>
                            </div>
                        </div>
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
            </a>
        </div>
    <?php endwhile; ?>
<?php endif; ?>
<?php
$terms_query = null;
wp_reset_postdata();

?>


<?php get_footer(); ?>