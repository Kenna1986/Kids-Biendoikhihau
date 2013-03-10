<?php get_header() ?>

    <?php global $post; setup_postdata($post);?>
    <article class="has-sidebar">
        <div class="title-bar generic">
            <h2><?php wp_title('') ?></h2>
            <div class="icon-tray">
                <span class="icon know"></span>
                <span class="icon weather-and-climate"></span>
                <span class="icon global-climate change"></span>
                <span class="icon global-warming"></span>
                <span class="icon big-questions"></span>
            </div>
        </div>

        <div class="main-content no-sidebar">
            <section class="fck"><?php the_content() ?></section>

            <?php get_template_part('content', 'game') ?>
        </div>

    </article>

<?php get_footer() ?>