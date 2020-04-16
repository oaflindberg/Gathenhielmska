<?php /* Template Name: About */ ?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php get_field('About us') ?>
        <div class="about-wrapper">
            <h2 class="about-us">Om oss</h2>
            <div>
                <h3> <?php echo the_field('title1') ?> </h3>
                <p> <?php echo the_field('text1') ?> </p>
            </div>
            <div>
                <h3> <?php echo the_field('title2') ?> </h3>
                <p> <?php echo the_field('text2') ?> </p>
            </div>
            <h3>Historia</h3>
            <img class="timeline" src="<?php bloginfo('template_directory') ?>/assets/images/images/tidslinje_v2.png" alt="timeline">


            <div class="history-wrapper">
                <div class="history-line">
                    <div class="year-line"></div>
                    <div class="year-line"></div>
                    <div class="year-line"></div>
                    <div class="year-line"></div>
                    <div class="year-line"></div>
                    <div class="year-line"></div>
                </div>

                <div class="history-container">
                    <div class="year-text">
                        <p class="year">1717</p>
                        <p class="info-text">Marken skänks till den kungliga kaparen Lars Gathenhielm av Karl XII. </p>
                    </div>
                    <div class="year-text">
                        <p class="year">1737</p>
                        <p class="info-text">Tomten säljs till Lars syster Anna Thalena Gathe och hennes man Johan Busck.</p>
                    </div>
                    <div class="year-text">
                        <p class="year">1846</p>
                        <p class="info-text">Huset säljs till repslagaremästaren Mathias Dahlström.</p>
                    </div>

                    <div class="year-text">
                        <p class="year">1943</p>
                        <p class="info-text">Lagen om kulturminnesskydd träder i kraft och Gathenhielmska huset blir landets första hus att bli förklarat till byggnadsminne. </p>
                    </div>
                    <div class="year-text">
                        <p class="year">1987</p>
                        <p class="info-text">Gathenhielmska huset säljs till Göteborgs stad.</p>
                    </div>

                    <div class="year-text">
                        <p class="year">2020</p>
                        <p class="info-text">Gathenhielmska huset öppnar som kulturmötesplats. </p>
                    </div>
                </div>
            </div>
        </div>


        </div>
    <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>