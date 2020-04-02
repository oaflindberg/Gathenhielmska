<?php get_header(); ?>
<div class="single-post-wrapper">
    <?php if (have_posts()) : ?>

        <div class="single-event">
            <?php while (have_posts()) : the_post(); ?>

                <img class="thumbnail-single" src="<?php the_field('thumbnail') ?>" alt="">

                <div class="single-event-text">
                    <p> <?php echo the_field('date') ?> </p>
                    <p> <?php echo the_field('entrance') ?> </p>
                    <h3><?php the_title(); ?></h3>

                    <!-- <?php $date = the_date($d = '', $before = '', $after = '',  $echo = true);
                            echo $date; ?> -->

                    <?php the_content(); ?>

                    <?php get_field('Event info') ?>


                    <?php $categories = get_the_terms($post, 'category')  ?>

                    <?php foreach ($categories as $category) : ?>
                        <p> Kategori:</p>
                        <a href="<?php echo get_term_link($category) ?>"> <?php echo $category->name ?></a>

                    <?php endforeach; ?>

                    <button href="www.biletto.se">Tickets</button>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</div>
<div class="navigation">
    <p><?php posts_nav_link(); ?></p>
</div>
<!-- <?php previous_post_link(); ?>

<?php next_post_link(); ?> -->

<?php get_footer(); ?>