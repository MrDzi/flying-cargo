<li class="mb-3">
    <article class="news-list__article">
        <a href="<?php the_permalink(); ?>" class="d-flex">
            <?php the_post_thumbnail() ?>
            <div class="news-list__article-content">
                <h4><?php the_title(); ?></h4>
                <span class="date"><?php the_date(); ?></span>
            </div>
        </a>
    </article>
</li>
