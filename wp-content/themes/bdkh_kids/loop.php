<?php global $kidsBdkh ?>
    <ul class="clearfix">
        <?php while (have_posts()) : the_post() ?>
        <li class="out">
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>">
                <?php if (has_post_thumbnail(get_the_ID())) : ?>
                    <?php the_post_thumbnail('loop-thumbnail') ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri() ?>/images/logo-1.png" title="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>" alt="<?php _e('Can Tho climate change office', 'bdkh_kids') ?>" />
                <?php endif ?>
            </a>
            <h3>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>"><?php the_title() ?></a>
            </h3>
            <p><?php echo $kidsBdkh->limitWords(get_the_excerpt()) ?></p>
            <!--
            <span class="icon teach">teach</span>
            <span class="icon science-project">science-project</span>
            <span class="icon scientific-method">scientific-method</span>
            <span class="icon classroom-activities">classroom-activities</span>
            <span class="icon posters">posters</span>
             -->
        </li>
        <?php endwhile ?>
    </ul>

    <?php if(function_exists('wp_simple_pagination')) {
        wp_simple_pagination();
    } ?>
