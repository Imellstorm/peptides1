<?php
get_header();

$hero_image_id = get_option( 'landing_hero_image' );
$hero_url      = $hero_image_id ? wp_get_attachment_image_url( $hero_image_id, 'full' ) : '';
$about_image_id = get_option( 'landing_about_image' );
$about_url      = $about_image_id ? wp_get_attachment_image_url( $about_image_id, 'full' ) : '';
?>

<!-- ============ HERO ============ -->
<section class="hero" <?php if ( $hero_url ) echo 'style="background-image:url(' . esc_url( $hero_url ) . ')"'; ?>>
    <div class="hero-overlay"></div>
    <div class="container hero-content">
        <h1>Lorem Ipsum Dolor Sit Amet Consectetur</h1>
        <h3>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</h3>
    </div>
</section>

<!-- ============ PRODUCTS ============ -->
<?php if ( class_exists( 'WooCommerce' ) ) : ?>
<section class="section products-section" id="products">
    <div class="container">
        <h2 class="section-title">Our Products</h2>
        <?php
        $products = wc_get_products( array(
            'limit'   => 5,
            'status'  => 'publish',
            'orderby' => 'date',
            'order'   => 'ASC',
        ) );

        if ( $products ) : ?>
        <div class="products-grid">
            <?php foreach ( $products as $product ) : ?>
            <div class="product-card">
                <div class="product-image">
                    <?php if ( $product->get_image_id() ) : ?>
                        <img src="<?php echo esc_url( wp_get_attachment_image_url( $product->get_image_id(), 'medium' ) ); ?>"
                             alt="<?php echo esc_attr( $product->get_name() ); ?>">
                    <?php else : ?>
                        <div class="product-placeholder"></div>
                    <?php endif; ?>
                </div>
                <div class="product-info">
                    <h3 class="product-name"><?php echo esc_html( $product->get_name() ); ?></h3>
                    <p class="product-desc"><?php echo esc_html( wp_trim_words( $product->get_description(), 15 ) ); ?></p>
                    <div class="product-price"><?php echo $product->get_price_html(); ?></div>
                    <div class="product-actions">
                        <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>"
                           class="btn btn-add-cart"
                           data-product_id="<?php echo esc_attr( $product->get_id() ); ?>">
                            Add to Cart
                        </a>
                        <a href="<?php echo esc_url( $product->add_to_cart_url() ); ?>&buy_now=1"
                           class="btn btn-buy-now">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>

<!-- ============ ABOUT ============ -->
<section class="section section--alt about-section" id="about">
    <div class="container">
        <?php if ( $about_url ) : ?>
            <div class="about-image">
                <img src="<?php echo esc_url( $about_url ); ?>" alt="About us">
            </div>
        <?php endif; ?>
        <h2 class="about-title">Lorem Ipsum Dolor Sit Amet</h2>
        <ul class="about-points">
            <li>
                <span class="point-number">01</span>
                <div>
                    <strong>Consectetur Adipiscing Elit</strong>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </li>
            <li>
                <span class="point-number">02</span>
                <div>
                    <strong>Ut Enim Ad Minim Veniam</strong>
                    <p>Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit.</p>
                </div>
            </li>
            <li>
                <span class="point-number">03</span>
                <div>
                    <strong>Duis Aute Irure Dolor</strong>
                    <p>In reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
                </div>
            </li>
            <li>
                <span class="point-number">04</span>
                <div>
                    <strong>Excepteur Sint Occaecat</strong>
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                </div>
            </li>
            <li>
                <span class="point-number">05</span>
                <div>
                    <strong>Nemo Enim Ipsam Voluptatem</strong>
                    <p>Quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </li>
        </ul>
    </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section faq-section" id="faq">
    <div class="container">
        <h2 class="section-title">Frequently Asked Questions</h2>
        <div class="faq-list">
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 8l5 5 5-5"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Ut enim ad minim veniam, quis nostrud exercitation?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 8l5 5 5-5"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Duis aute irure dolor in reprehenderit in voluptate?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 8l5 5 5-5"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>Velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Excepteur sint occaecat cupidatat non proident?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 8l5 5 5-5"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                </div>
            </div>
            <div class="faq-item">
                <button class="faq-question" aria-expanded="false">
                    <span>Nemo enim ipsam voluptatem quia voluptas sit aspernatur?</span>
                    <svg class="faq-icon" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 8l5 5 5-5"/>
                    </svg>
                </button>
                <div class="faq-answer">
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
