<?php get_header() ?>

    <div id="featured-content">
        <div class="slide-wrapper">
            <div class="slide-container">
                <?php
                    $args = array(
                        'meta_key' => 'wpcf-slider',
                        'meta_value' => 1,
                        'posts_per_page' => 5
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) : $loop->the_post();
                ?>
                <div class="slide">
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('slider') ?>
                    </a>
                    <div class="ribbon blue"><h1 data-font="Schoolbell"><?php the_title() ?></h1></div>
                </div>
                <?php endwhile ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>