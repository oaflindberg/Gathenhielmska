<?php get_header(); ?>
<div class="single-page">
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
                            <h3> <?php the_title(); ?></h3>
                        </div>

                        <div>
                            <?php the_content(); ?>

                        </div>


                        <div class="ticket-wrapper">
                            <button class="ticket-btn" href="www.biletto.se">Boka plats</button>

                            <?php $categories = get_the_terms($post, 'category')  ?>
                            <?php foreach ($categories as $category) : ?>

                                <a href="<?php echo get_term_link($category) ?>">
                                    <img class="cat-icon" src=" <?php echo get_field('white_img', $category)  ?>" alt="">
                                </a>
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


    <div class="upcoming-wrapper">

        <div class="upcoming">

            <h3>Kommande evenemang</h3>

            <?php
            $args = [
                'numberposts' => 5,
                'post_type' => 'Evenemang',
                'orderby' => 'date',
                'order' => 'ASC'
            ];
            ?>

            <?php $events = get_posts($args); ?>

            <?php foreach ($events as $single) : ?>

                <a href="<?php echo get_permalink($single); ?>">
                    <div class="upcoming-event">
                        <div class="icon-event">

                            <img src="<?php bloginfo('template_directory') ?>/assets/images/icons/calender.svg" alt="calender">
                            <div>
                                <p> <?php echo the_field('date', $single->ID)  ?> </p>
                                <p> <?php echo the_field('end_date', $single->ID) ?> </p>
                            </div>
                            <div>
                                <p> <?php echo the_field('time', $single->ID) ?> </p>
                                <p> <?php echo the_field('end_time', $single->ID) ?> </p>


                            </div>

                        </div>
                        <div>
                            <p class="upcoming-title"><?php echo $single->post_title; ?></p>
                        </div>
                    </div>

                </a>
            <?php endforeach; ?>
        </div>
    </div>

</div>
<?php get_footer(); ?>