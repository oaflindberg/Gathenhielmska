<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <div class="single-event">
        <?php while (have_posts()) : the_post(); ?>


            <h1><?php the_title(); ?></h1>

            <!-- <?php $date = the_date($d = '', $before = '', $after = '',  $echo = true);
                    echo $date; ?> -->

            <?php the_content(); ?>

            <?php get_field('Event info') ?>

            <img class="thumbnail" src="<?php the_field('thumbnail') ?>" alt="">
            <p> <?php echo the_field('entrance') ?> </p>
            <p> <?php echo the_field('date') ?> </p>

            <?php $categories = get_the_terms($post, 'category')  ?>

            <?php foreach ($categories as $category) : ?>
                <p> <?php echo 'Kategori: ' .  $category->name ?></p>
            <?php endforeach; ?>

            <button href="www.biletto.se">Tickets</button>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
<div class="navigation">
    <p><?php posts_nav_link(); ?></p>
</div>
<!-- <?php previous_post_link(); ?>

<?php next_post_link(); ?> -->

<?php get_footer(); ?>