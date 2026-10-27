<?php get_header(); ?>

<main class="article-archive">

    <!-- HEADER DAFTAR ARTIKEL -->
    <section class="archive-hero">
        <div class="archive-hero-content">

            <span class="archive-label">
                WEB FAUZIA FAMILY
            </span>

            <h1>
                <?php
                if (is_category()) {
                    single_cat_title();
                } elseif (is_tag()) {
                    single_tag_title();
                } elseif (is_author()) {
                    echo 'Artikel Penulis';
                } elseif (is_date()) {
                    echo 'Arsip Artikel';
                } else {
                    echo 'Jelajahi Artikel';
                }
                ?>
            </h1>

            <p>
                Temukan cerita, pengalaman, pengetahuan,
                dan inspirasi dari berbagai tulisan.
            </p>

            <div class="archive-search">
                <?php get_search_form(); ?>
            </div>

        </div>
    </section>

    <!-- KONTEN ARTIKEL -->
    <div class="archive-container">

        <section class="archive-main">

            <div class="archive-heading">
                <div>
                    <span class="archive-small-label">
                        KOLEKSI TULISAN
                    </span>

                    <h2>Daftar Artikel</h2>

                    <p>
                        Bacaan menarik untuk menemani harimu.
                    </p>
                </div>

                <span class="article-count">
                    <?php
                    global $wp_query;
                    echo esc_html(
                        number_format_i18n($wp_query->found_posts)
                    );
                    ?>
                    Artikel
                </span>
            </div>

            <?php if (have_posts()) : ?>

                <div class="archive-grid">

                    <?php while (have_posts()) : the_post(); ?>

                        <article <?php post_class('archive-card'); ?>>

                            <a class="archive-image"
                               href="<?php the_permalink(); ?>">

                                <?php if (has_post_thumbnail()) : ?>

                                    <?php
                                    the_post_thumbnail('medium_large', array(
                                        'loading' => 'lazy'
                                    ));
                                    ?>

                                <?php else : ?>

                                    <div class="archive-placeholder">
                                        <span>W</span>
                                        <small>Web Fauzia Family</small>
                                    </div>

                                <?php endif; ?>

                            </a>

                            <div class="archive-card-content">

                                <div class="archive-meta">
                                    <span>
                                        <?php echo esc_html(get_the_date()); ?>
                                    </span>
                                </div>

                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p class="archive-excerpt">
                                    <?php
                                    echo esc_html(
                                        wp_trim_words(
                                            get_the_excerpt(),
                                            20,
                                            '...'
                                        )
                                    );
                                    ?>
                                </p>

                                <a class="archive-read-more"
                                   href="<?php the_permalink(); ?>">
                                    Baca selengkapnya
                                    <span>→</span>
                                </a>

                            </div>

                        </article>

                    <?php endwhile; ?>

                </div>

                <!-- PAGINATION -->
                <nav class="archive-pagination"
                     aria-label="Navigasi halaman artikel">

                    <?php
                    the_posts_pagination(array(
                        'mid_size'  => 1,
                        'prev_text' => '← Sebelumnya',
                        'next_text' => 'Berikutnya →',
                    ));
                    ?>

                </nav>

            <?php else : ?>

                <div class="archive-empty">
                    <div class="archive-empty-icon">✎</div>

                    <h3>Belum Ada Artikel</h3>

                    <p>
                        Artikel belum tersedia di bagian ini.
                        Silakan kembali lagi nanti untuk menemukan
                        tulisan terbaru.
                    </p>

                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Kembali ke Beranda →
                    </a>
                </div>

            <?php endif; ?>

        </section>

        <!-- SIDEBAR -->
        <aside class="archive-sidebar">

            <div class="archive-sidebar-card archive-about">
                <div class="archive-brand-icon">W</div>

                <h3>Tentang Blog</h3>

                <p>
                    Web Fauzia Family adalah ruang untuk
                    berbagi cerita, pengetahuan, pengalaman,
                    dan ide kreatif.
                </p>
            </div>

            <div class="archive-sidebar-card">
                <h3 class="archive-sidebar-title">
                    Jelajahi Blog
                </h3>

                <ul class="archive-menu">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Beranda <span>→</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            Artikel <span>→</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/tentang-saya')); ?>">
                            Tentang Saya <span>→</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/kontak')); ?>">
                            Kontak <span>→</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="archive-sidebar-card archive-inspiration">
                <span class="archive-inspiration-label">
                    INSPIRASI HARI INI
                </span>

                <h3>
                    Satu Tulisan, Banyak Makna
                </h3>

                <p>
                    Terus membaca, belajar, dan menemukan
                    hal-hal baru setiap hari.
                </p>

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Kunjungi Beranda →
                </a>
            </div>

        </aside>

    </div>

</main>

<?php get_footer(); ?>