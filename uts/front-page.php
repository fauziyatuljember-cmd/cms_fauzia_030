<?php get_header(); ?>

<main class="homepage">

    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="hero-content">
            <span class="hero-label">
                SELAMAT DATANG DI BLOG KAMI
            </span>

            <h1>Web Fauzia Family</h1>

            <p>
                Sebuah ruang untuk berbagi cerita, pengalaman,
                pengetahuan, dan inspirasi melalui tulisan
                yang bermanfaat.
            </p>

            <a href="#artikel-terbaru" class="hero-button">
                Jelajahi Artikel
                <span>→</span>
            </a>
        </div>
    </section>

    <!-- KONTEN HALAMAN -->
    <div class="homepage-container">

        <!-- DAFTAR ARTIKEL -->
        <section class="articles-section" id="artikel-terbaru">

            <div class="section-heading">
                <div>
                    <span class="section-label">JELAJAHI TULISAN</span>
                    <h2>Artikel Terbaru</h2>
                    <p>
                        Temukan informasi dan inspirasi
                        dari setiap tulisan.
                    </p>
                </div>

                <a class="view-all"
                   href="<?php echo esc_url(home_url('/blog')); ?>">
                    Semua Artikel →
                </a>
            </div>

            <div class="article-grid">

                <?php
                $homepage_posts = new WP_Query(array(
                    'post_type'      => 'post',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish'
                ));

                if ($homepage_posts->have_posts()) :
                    while ($homepage_posts->have_posts()) :
                        $homepage_posts->the_post();
                ?>

                    <article class="article-card">

                        <a class="article-image"
                           href="<?php the_permalink(); ?>">

                            <?php if (has_post_thumbnail()) : ?>

                                <?php
                                the_post_thumbnail('medium_large', array(
                                    'loading' => 'lazy'
                                ));
                                ?>

                            <?php else : ?>

                                <div class="article-placeholder">
                                    <span>W</span>
                                    <small>Web Fauzia Family</small>
                                </div>

                            <?php endif; ?>

                        </a>

                        <div class="article-content">

                            <span class="article-date">
                                <span>●</span>
                                <?php echo esc_html(get_the_date()); ?>
                            </span>

                            <h3>
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <p class="article-excerpt">
                                <?php
                                echo esc_html(
                                    wp_trim_words(
                                        get_the_excerpt(),
                                        18,
                                        '...'
                                    )
                                );
                                ?>
                            </p>

                            <a class="read-more"
                               href="<?php the_permalink(); ?>">
                                Baca selengkapnya
                                <span>→</span>
                            </a>

                        </div>
                    </article>

                <?php
                    endwhile;
                else :
                ?>

                    <div class="empty-articles">
                        <div class="empty-icon">✎</div>
                        <h3>Belum Ada Artikel</h3>
                        <p>
                            Tulisan yang kamu publikasikan akan
                            muncul di sini. Tambahkan artikel
                            melalui menu Pos di dashboard WordPress.
                        </p>
                    </div>

                <?php
                endif;

                wp_reset_postdata();
                ?>

            </div>
        </section>

        <!-- SIDEBAR -->
        <aside class="homepage-sidebar">

            <!-- PROFIL BLOG -->
            <div class="sidebar-card about-card">
                <div class="sidebar-icon">W</div>

                <h3>Tentang Blog</h3>

                <p>
                    Web Fauzia Family adalah blog pribadi
                    untuk berbagi pengetahuan, pengalaman,
                    cerita, dan ide kreatif.
                </p>
            </div>

            <!-- MENU NAVIGASI -->
            <div class="sidebar-card">
                <h3 class="sidebar-title">Jelajahi Blog</h3>

                <ul class="sidebar-menu">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <span>⌂</span> Beranda
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            <span>▤</span> Artikel
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/tentang-saya')); ?>">
                            <span>♡</span> Tentang Saya
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/kontak')); ?>">
                            <span>✉</span> Kontak
                        </a>
                    </li>
                </ul>
            </div>

            <!-- AJAKAN MEMBACA -->
            <div class="sidebar-card reading-card">
                <span class="reading-label">TEMUKAN INSPIRASI</span>

                <h3>Setiap Tulisan Punya Cerita</h3>

                <p>
                    Luangkan waktu untuk membaca,
                    belajar, dan menemukan hal baru.
                </p>

                <a href="#artikel-terbaru">
                    Mulai membaca →
                </a>
            </div>

        </aside>

    </div>

</main>

<?php get_footer(); ?>