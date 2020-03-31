<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<h1>archive</h1>

<?php wp_list_categories('current-cat') ?>
<?php wp_list_pages('post_type') ?>

<?php if (is_category('teater')) : ?>
    <p>This is the text to describe teater</p>
<?php elseif (is_category('dans')) : ?>
    <p>This is the text to describe dans</p>
<?php else : ?>
    <p>This is some generic text to describe all other category pages,
        I could be left blank</p>
<?php endif; ?>
<?php get_footer(); ?>