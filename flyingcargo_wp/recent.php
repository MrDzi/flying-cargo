<li class="mb-3">
    <article class="news-list__article--sidebar">
        <a href="#" class="d-flex flex-start">
            <?php
                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                echo '<div class="news-list__thumb" style="background-image: url('. $url.')"></div>';
            ?>
            <div class="news-list__article-content">
                <h4><?php the_title(); ?></h4>
                <span class="date"><?php the_date('d/m/Y'); ?></span>
            </div>
        </a>
    </article>
</li>
