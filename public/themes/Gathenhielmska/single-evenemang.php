<?php get_header(); ?>
<div class="single-post-wrapper">
    <?php if (have_posts()) : ?>

        <div class="single-event">
            <?php while (have_posts()) : the_post(); ?>

                <img class="thumbnail-single" src="<?php the_field('thumbnail') ?>" alt="">

                <div class="single-event-text">
                    <p> <?php echo the_field('date') ?> </p>
                    <p>Inträde: <?php echo the_field('entrance') ?> </p>
                    <h3>Utsällning: <?php the_title(); ?></h3>


                    <?php the_content(); ?>

                    <?php get_field('Event info') ?>

                    <div class="ticket-wrapper">
                        <button class="ticket-btn" href="www.biletto.se">Tickets</button>

                        <?php $categories = get_the_terms($post, 'category')  ?>
                        <?php foreach ($categories as $category) : ?>

                            <a href="<?php echo get_term_link($category) ?>"> <?php echo $category->name ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>