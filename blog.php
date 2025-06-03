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

        if ($query->have_posts()) : ?>
            <div class="posts-row">
                <?php
                    $post_count = 0;
                    while ($query->have_posts()) : $query->the_post();
                        $post_count++;
                        
                        $post_class = ($post_count <= 3) ? 'post-main-item' : 'post-small-item';
                    ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
                            <h2 class="abackground"><a href="<?php the_permalink(); ?>" class="bejegyzesek"><?php the_title(); ?></a></h2>
                            
                        </article>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $query->max_num_pages,
                    'current' => $paged,
                ));
                ?>
            </div>

        <?php else : ?>
            <p>Nincsenek elérhető bejegyzések.</p>
        <?php
        endif;
        wp_reset_postdata();
        ?>

    </div>
</main>

<?php get_footer(); ?>
