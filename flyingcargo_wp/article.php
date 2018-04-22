<div class="col-lg-6 col-12 mb-4">
    <article class="posts-list__post d-flex">
        <a href="<?php the_permalink(); ?>"></a>
        <?php 
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="posts-list__post-image" style="background-image: url('. $url.')"></div>';
        ?>
        <div class="posts-list__post-content">
            <div class="posts-list__post-content-inner">
                <h3><?php the_title() ?></h3>
                <div class="date mb-10"><?php the_date('d/m/Y'); ?></div>
                <div class="font-14"><?php the_excerpt(); ?></div>
            </div>
        </div>
    </article>
</div>
