<?php get_header() ?>

    <?php global $post; setup_postdata($post);?>
    <article class="has-sidebar">
        <div class="title-bar generic">
            <h2><?php wp_title('') ?></h2>
        </div>

        <div class="main-content no-sidebar">
            <section class="fck">
                <header class="entry-header">
					<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'bdkh_kids' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'bdkh_kids'); ?></p>
					<form id="searchform" action="<?php echo home_url('/') ?>" method="get" role="search">
                        <div>
                            <label class="screen-reader-text" for="s"><?php _e('Search for', 'bdkh_kids') ?>:</label>
                            <input id="s" type="text" name="s" value="" />
                            <input id="searchsubmit" type="submit" value="<?php _e('Search', 'bdkh_kids') ?>">
                        </div>
                    </form>
				</div><!-- .entry-content -->
            </section>
        </div>

    </article>

<?php get_footer() ?>