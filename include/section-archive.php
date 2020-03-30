<?php

    $args = array(
        'post_type' => 'post'
    );

    $post_query = new WP_Query($args);

    if($post_query->have_posts() ) {
        while($post_query->have_posts() ) {
            $post_query->the_post();
            ?>
                <?php the_content(); ?>
            <?php
            }
    }
    
    //global $wp_query;

    $big = 999999999; // need an unlikely integer

    $pages = paginate_links( array(
            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
            'format' => '?paged=%#%',
            'current' => max( 1, get_query_var('paged') ),
            'total' => $post_query->max_num_pages,
            'type'  => 'array',
            'prev_next'   => true,
            'prev_text'    => __('Pre'),
            'next_text'    => __('&larr;'),
        )
    );

    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');

        $pagination = '<ul class="page-numbers">';

        foreach ( $pages as $page ) {
            $pagination .= "<li>$page</li>";
        }

        $pagination .= '</ul>';

        echo $pagination;
    }

?>