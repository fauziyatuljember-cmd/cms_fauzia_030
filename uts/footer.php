<footer class="site-footer">
    <div class="footer-container">

        <!-- Identitas Blog -->
        <div class="footer-brand">
            <a class="footer-logo"
               href="<?php echo esc_url(home_url('/')); ?>">

                <span class="footer-logo-icon">W</span>
                <span>Web Fauzia Family</span>
            </a>

            <p>
                Berbagi cerita, pengalaman, dan inspirasi.
                Menemukan hal baru melalui setiap tulisan
                yang penuh makna.
            </p>

            <!-- Ikon Sosial dan Navigasi -->
            <div class="footer-social">
                <a href="<?php echo esc_url(home_url('/')); ?>"
                   aria-label="Beranda">⌂</a>

                <a href="<?php echo esc_url(home_url('/?s=')); ?>"
                   aria-label="Cari artikel">⌕</a>

                <a href="<?php echo esc_url(home_url('/kontak/')); ?>"
                   aria-label="Kontak">✉</a>
            </div>
        </div>

        <!-- Navigasi Footer -->
        <div class="footer-column">
            <h3>Jelajahi</h3>

            <ul>
                <li>
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        Beranda
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>">
                        Blog
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/tentang-saya/')); ?>">
                        Tentang Saya
                    </a>
                </li>

                <li>
                    <a href="<?php echo esc_url(home_url('/kontak/')); ?>">
                        Kontak
                    </a>
                </li>
            </ul>
        </div>

        <!-- Informasi Blog -->
        <div class="footer-column footer-info">
            <h3>Tentang Blog</h3>

            <p>
                Blog pribadi sebagai ruang untuk berbagi
                pengetahuan, pengalaman, dan ide kreatif.
            </p>

            <a class="footer-button"
               href="<?php echo esc_url(home_url('/blog/')); ?>">
                Jelajahi Blog <span>→</span>
            </a>
        </div>

    </div>

    <!-- Hak Cipta -->
    <div class="footer-bottom">
        <p>
            &copy; <?php echo esc_html(wp_date('Y')); ?>
            <?php bloginfo('name'); ?>.
            Dibuat dengan sepenuh hati.
        </p>

        <a href="<?php echo esc_url(home_url('/')); ?>">
            Kembali ke Beranda ↑
        </a>
    </div>
</footer>

<!-- JavaScript Sidebar -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    const sidebar = document.getElementById('siteSidebar');
    const toggle = document.getElementById('sidebarToggle');
    const close = document.getElementById('sidebarClose');
    const overlay = document.getElementById('sidebarOverlay');

    // Pastikan elemen sidebar tersedia
    if (!sidebar || !toggle || !close || !overlay) {
        return;
    }

    function openSidebar() {
        sidebar.classList.add('active');
        overlay.classList.add('active');
        toggle.setAttribute('aria-expanded', 'true');
    }

    function closeSidebar() {
        sidebar.classList.remove('active');
        overlay.classList.remove('active');
        toggle.setAttribute('aria-expanded', 'false');
    }

    // Buka sidebar
    toggle.addEventListener('click', openSidebar);

    // Tutup sidebar dengan tombol X
    close.addEventListener('click', closeSidebar);

    // Tutup sidebar dengan mengeklik area luar
    overlay.addEventListener('click', closeSidebar);

    // Tutup sidebar menggunakan tombol Escape
    document.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
            closeSidebar();
        }
    });
});
</script>

<?php wp_footer(); ?>
</body>
</html>