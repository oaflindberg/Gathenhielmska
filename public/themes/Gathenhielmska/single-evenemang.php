<?php get_header(); ?>
<div class="single-post-wrapper">

    <?php if (have_posts()) : ?>

        <div class="single-event">
            <?php while (have_posts()) : the_post(); ?>

                <img class="thumbnail-single" src="<?php the_field('thumbnail') ?>" alt="">

                <div class="single-event-text">
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
                    <div>
                        <p>Inträde: <?php echo the_field('entrance') ?> </p>
                    </div>
                    <div>
                        <h3>Utställning: <?php the_title(); ?></h3>
                    </div>

                    <div>
                        <?php the_content(); ?>

                    </div>


                    <div class="ticket-wrapper">
                        <button class="ticket-btn" href="www.biletto.se">Tickets</button>

                        <?php $categories = get_the_terms($post, 'category')  ?>
                        <?php foreach ($categories as $category) : ?>

                            <a href="<?php echo get_term_link($category) ?>"> <?php echo $category->name ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="navigation">
                        <div>
                            <?php previous_post_link(); ?>
                        </div>
                        <div>
                            <?php next_post_link(); ?>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>

<?php get_footer(); ?>