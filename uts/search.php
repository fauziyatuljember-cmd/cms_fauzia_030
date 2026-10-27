<?php get_header(); ?>

<main class="content-section container">
    <h1 class="section-title">
        Hasil pencarian: <?php echo esc_html(get_search_query()); ?>
    </h1>

    <?php if (have_posts()) : ?>
        <div class="post-grid">
            <?php while (have_posts()) : the_post(); ?>
                <article class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="post-card-body">
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php the_excerpt(); ?>
                        <a class="read-more" href="<?php the_permalink(); ?>">
                            Baca selengkapnya →
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <?php the_posts_pagination(); ?>
    <?php else : ?>
        <p>Artikel yang kamu cari belum ditemukan.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>