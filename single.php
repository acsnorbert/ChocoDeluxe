<?php get_header(); ?>

<main id="primary" class="site-main container">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
                <header class="entry-header">

                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    
                </header>

               
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                
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
