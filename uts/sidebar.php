<aside class="sidebar">

    <!-- Profil Blog -->
    <section class="sidebar-widget profile-widget">
        <div class="profile-icon">👋</div>
        <h2>Tentang Blog</h2>
        <p>
            Selamat datang di Web Fauzia Family!
            Blog pribadi untuk berbagi cerita,
            pengalaman, dan pengetahuan.
        </p>
    </section>

    <!-- Pencarian -->
    <section class="sidebar-widget">
        <h2>Cari Artikel</h2>
        <?php get_search_form(); ?>
    </section>

    <!-- Artikel Terbaru -->
    <section class="sidebar-widget">
        <h2>Artikel Terbaru</h2>
        <ul>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'post_status' => 'publish'
            ));

            foreach ($recent_posts as $recent) :
            ?>
                <li>
                    <a href="<?php echo esc_url(
                        get_permalink($recent['ID'])
                    ); ?>">
                        <?php echo esc_html(
                            $recent['post_title']
                        ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>

    <!-- Kategori -->
    <section class="sidebar-widget">
        <h2>Kategori Artikel</h2>
        <ul>
            <?php
            wp_list_categories(array(
                'title_li' => '',
                'show_count' => true
            ));
            ?>
        </ul>
    </section>

</aside>