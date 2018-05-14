<div class="col-lg-6 col-12 mb-4">
    <article class="posts-list__post d-flex">
        <a href="<?php the_permalink(); ?>"></a>
        <?php
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            echo '<div class="posts-list__post-image" style="background-image: url('. $url.')"></div>';
        ?>
        <div class="posts-list__post-content">
            <div class="posts-list__post-content-inner">
                <h4><?php the_title() ?></h4>
                <div class="font-14"><?php the_excerpt(); ?></div>
                <div class="date"><?php the_date('d/m/Y'); ?></div>
            </div>
        </div>
    </article>
</div>

<!-- <div class="col-md-6 mb-4">
    <article class="posts-list__post d-flex">
        <a href="single.php"></a>
        <div class="posts-list__post-image"></div>
        <div class="posts-list__post-content">
            <h4>Test headline</h4>
            <p>Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Aenean dignissim pellentesque felis.</p>
            <span class="date">15.11.2017.</span>
        </div>
    </article>
</div> -->
