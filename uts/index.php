<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container">
            <h1>Selamat Datang di Blog Pribadi Saya</h1>

            <p>
                Tempat berbagi cerita, pengalaman, ide,
                dan pengetahuan yang menarik untuk dipelajari.
            </p>

            <a class="hero-button" href="#artikel">
                Jelajahi Artikel
            </a>
        </div>
    </section>

    <section class="content-section container" id="artikel">
        <h2 class="section-title">Artikel Terbaru</h2>

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
                            <div class="post-meta">
                                <?php echo esc_html(get_the_date()); ?>
                            </div>

                            <h2>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="post-excerpt">
                                <?php the_excerpt(); ?>
                            </div>

                            <a class="read-more"
                               href="<?php the_permalink(); ?>">
                                Baca selengkapnya →
                            </a>
                        </div>

                    </article>
                <?php endwhile; ?>

            </div>

            <div class="pagination">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>
            <p>Belum ada artikel. Silakan buat artikel pertama kamu.</p>
        <?php endif; ?>
    </section>
</main>

<?php get_footer(); ?>