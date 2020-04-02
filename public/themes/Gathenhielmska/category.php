<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<h1>archive</h1>

<!-- <?php wp_list_categories('current-cat') ?> -->

<?php
$terms = get_terms('category');
foreach ($terms as $term) {
    $terms_query = new WP_Query(array(
        'post_type' => 'evenemang',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'slug',
                'terms' => array($term->slug),
                'operator' => 'IN'
            )
        )
    ));
?>
    <h3><?php echo $term->name; ?></h3>
    <?php if ($terms_query->have_posts()) : ?>
        <?php while ($terms_query->have_posts()) : $terms_query->the_post(); ?>
            <div class="">
                <li><?php echo the_title(); ?></li>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php
    $terms_query = null;
    wp_reset_postdata();
}
?>

<?php if (is_category('teater')) : ?>
    <h3>Teater</h3>
<?php elseif (is_category('dans')) : ?>
    <h3>Dans</h3>
<?php elseif (is_category('stand-up')) : ?>
    <h3>Stand up</h3>
<?php elseif (is_category('hantverk')) : ?>
    <h3>Hantverk</h3>
<?php elseif (is_category('musik')) : ?>
    <h3>Musik</h3>

<?php else : ?>
    <p>This is some generic text to describe all other category pages,
        I could be left blank</p>
<?php endif; ?>
<?php get_footer(); ?>