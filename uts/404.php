<?php get_header(); ?>

<main class="container">
    <section class="post-content">
        <h1>Oops! Halaman tidak ditemukan.</h1>
        <p>Halaman yang kamu cari mungkin sudah dipindahkan atau tidak tersedia.</p>

        <p>
            <a class="hero-button" href="<?php echo esc_url(home_url('/')); ?>">
                Kembali ke Beranda
            </a>
        </p>
    </section>
</main>

<?php get_footer(); ?>