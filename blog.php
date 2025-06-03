<?php
/* Template Name: Blog */
get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>

        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $args = array(
            'post_type'      => 'post',
            'posts_per_page' => 5,
            'paged'          => $paged
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    
                    <div class="post-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                    <div class="post-meta">
                       
                        <span><?php the_author(); ?></span>
                    </div>
                </article>
            <?php endwhile; ?>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages
                ));
                ?>
            </div>

        <?php else : ?>
            <p>Nincsenek elérhető bejegyzések.</p>
        <?php endif;

        wp_reset_postdata();
        ?>
    </div>
</main>

<?php get_footer(); ?>
