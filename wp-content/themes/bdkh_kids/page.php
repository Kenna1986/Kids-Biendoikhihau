<?php get_header() ?>

    <?php global $post; setup_postdata($post);?>
    <article class="has-sidebar">
        <div class="title-bar generic">
            <h2><?php wp_title('') ?></h2>
            <div class="icon-tray">
                <span class="icon know" title="Know your world"></span>
                <span class="icon weather-and-climate" title="Weather And Climate"></span>
                <span class="icon global-climate change" title="Global Climate Change"></span>
                <span class="icon global-warming" title="Global Warming"></span>
                <span class="icon big-questions" title="Big Questions"></span>
            </div>
        </div>

        <div class="main-content no-sidebar">
            <section class="fck"><?php the_content() ?></section>
        </div>

    </article>

<?php get_footer() ?>