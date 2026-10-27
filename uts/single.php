<?php get_header(); ?>

<main class="single-page">
    <div class="single-container">

        <!-- SIDEBAR KIRI -->
        <aside class="single-sidebar">

            <div class="sidebar-card">
                <h3>Tentang Blog</h3>
                <p>
                    Web Fauzia Family berbagi cerita, informasi,
                    dan inspirasi yang menarik untuk dibaca.
                </p>
            </div>

            <div class="sidebar-card">
                <h3>Artikel Terbaru</h3>

                <ul class="recent-posts">
                    <?php
                    $recent_posts = new WP_Query(array(
                        'post_type'      => 'post',
                        'posts_per_page' => 5,
                        'post_status'    => 'publish'
                    ));

                    while ($recent_posts->have_posts()) :
                        $recent_posts->the_post();
                    ?>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </li>
                    <?php endwhile; ?>

                    <?php wp_reset_postdata(); ?>
                </ul>
            </div>

            <div class="sidebar-card">
                <h3>Navigasi</h3>
                <ul class="recent-posts">
                    <li>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            Beranda
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url(home_url('/blog')); ?>">
                            Semua Blog
                        </a>
                    </li>
                </ul>
            </div>

        </aside>

        <!-- DETAIL ARTIKEL KANAN -->
        <section class="single-main-content">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <article <?php post_class('single-article'); ?>>

                        <div class="single-breadcrumb">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                Beranda
                            </a>
                            <span> / </span>
                            <a href="<?php echo esc_url(home_url('/blog')); ?>">
                                Blog
                            </a>
                            <span> / Detail Artikel</span>
                        </div>

                        <header class="single-header">

                            <div class="single-category">
                                <?php
                                $categories = get_the_category();

                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                } else {
                                    echo 'Artikel';
                                }
                                ?>
                            </div>

                            <h1><?php the_title(); ?></h1>

                            <div class="single-meta">
                                <span>Oleh <?php the_author(); ?></span>
                                <span>•</span>
                                <time datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                                    <?php echo esc_html(get_the_date('j F Y')); ?>
                                </time>
                            </div>

                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="single-featured-image">
                                <?php the_post_thumbnail('large'); ?>
                            </div>
                        <?php endif; ?>

                        <div class="single-content">
                            <?php the_content(); ?>
                        </div>

                        <div class="single-tags">
                            <?php the_tags('<strong>Tag:</strong> ', ', '); ?>
                        </div>

                        <div class="single-back">
                            <a href="<?php echo esc_url(home_url('/blog')); ?>">
                                ← Kembali ke Blog
                            </a>
                        </div>

                    </article>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Artikel tidak ditemukan.</p>

            <?php endif; ?>

        </section>

    </div>
</main>

<?php get_footer(); ?>