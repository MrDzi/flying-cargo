<!-- <li class="mb-3">
    <article class="news-list__article">
        <a href="<?php the_permalink(); ?>" class="d-flex">

            <div class="news-list__article-content">
                <h4><?php the_title(); ?></h4>
                <span class="date"><?php the_date('d/m/Y'); ?></span>
            </div>
        </a>
    </article>
</li> -->

<div class="col-md-4 news-block-wrapper__col">
    <article class="news-list__article">
        <a href="<?php the_permalink(); ?>">
            <?php
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="news-list__image" style="background-image: url('. $url.')"></div>';
            ?>
            <div class="news-list__article-content">
                <h4><?php the_title(); ?></h4>
                <!-- <span class="date"><?php the_date('d/m/Y'); ?>.</span> -->
                <div><?php the_excerpt(); ?></div>
            </div>
        </a>
    </article>
</div>
