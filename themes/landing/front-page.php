<?php get_header(); ?>

<section class="hero">
    <div class="container">
        <h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
        <p><?php echo esc_html( get_bloginfo( 'description' ) ); ?></p>
        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn">Shop Now</a>
        <?php endif; ?>
    </div>
</section>

<section class="section section--alt" id="features">
    <div class="container">
        <h2 class="section-title">Why Choose Us</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="icon">&#9889;</div>
                <h3>Fast Delivery</h3>
                <p>Quick and reliable shipping to your doorstep.</p>
            </div>
            <div class="feature-card">
                <div class="icon">&#9733;</div>
                <h3>Premium Quality</h3>
                <p>Only the best products, carefully curated for you.</p>
            </div>
            <div class="feature-card">
                <div class="icon">&#128274;</div>
                <h3>Secure Payments</h3>
                <p>Your transactions are safe and encrypted.</p>
            </div>
        </div>
    </div>
</section>

<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<section class="section" id="products">
    <div class="container">
        <h2 class="section-title">Featured Products</h2>
        <?php echo do_shortcode( '[products limit="4" columns="4" orderby="popularity"]' ); ?>
    </div>
</section>
<?php endif; ?>

<section class="cta">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Browse our collection and find exactly what you need.</p>
        <?php if ( class_exists( 'WooCommerce' ) ) : ?>
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="btn">Browse Products</a>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
