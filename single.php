<?php get_header(); ?>

<main id="primary" class="site-main container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="author">Szerző: <?php the_author(); ?></span> |
                        <span class="date">Dátum: <?php the_time(get_option('date_format')); ?></span> |
                        <span class="category">Kategória: <?php the_category(', '); ?></span>
                    </div>
                </header>

                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <div class="tags"><?php the_tags('Címkék: ', ', ', ''); ?></div>
                </footer>
            </article>

            <nav class="post-navigation">
                <div class="nav-previous"><?php previous_post_link('%link', '← Előző bejegyzés'); ?></div>
                <div class="nav-next"><?php next_post_link('%link', 'Következő bejegyzés →'); ?></div>
            </nav>

            <?php
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
            ?>
        <?php endwhile;
    else :
        echo '<p>Nincs megjeleníthető bejegyzés.</p>';
    endif;
    ?>
</main>


<?php get_footer(); ?>
