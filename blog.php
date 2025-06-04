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
                        $thumb_url = get_the_post_thumbnail_url(get_the_ID(), 'large');
                        $post_class = ($post_count <= 3) ? 'post-main-item' : 'post-small-item';
                        $H2_class = ($post_count <= 3) ? 'abackground': 'Sbackground' ;
                        $p_class = ($post_count <= 3) ? 'bejegyzesek': 'Aejegyzesek' ;
                    ?>
                        
                        <a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?> style="background-image: url('<?php echo esc_url($thumb_url); ?>');" >
                            <article  >
                                
                                <h2 <?php post_class($H2_class); ?>><p  <?php post_class($p_class); ?>><?php the_title(); ?></p></h2>
                                
                            </article>
                        </a>
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
