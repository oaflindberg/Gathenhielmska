<?php get_header(); ?>

<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

        <?php $date = the_date($d = '', $before = '', $after = '',  $echo = true);
        echo $date; ?>


        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>


<?php $categories = get_the_terms($post, 'category')  ?>

<?php foreach ($categories as $category) : ?>
    <p> <?php echo 'Kategori: ' .  $category->name ?></p>
<?php endforeach; ?>




<div class="navigation">
    <p><?php posts_nav_link(); ?></p>
</div>


<!-- <?php previous_post_link(); ?>

<?php next_post_link(); ?> -->

<?php get_footer(); ?>