<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-content">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
            <a href="#booking" class="button">ご予約はこちら</a>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <h2 class="section-title">サービス</h2>
            <div class="services-grid">
                <div class="service-item">
                    <h3>ジェルネイル</h3>
                    <p>豊富なカラーとデザインで、あなただけの指先を演出します。</p>
                </div>
                <div class="service-item">
                    <h3>スカルプチュア</h3>
                    <p>長さ出しや強度アップに。美しいフォルムを追求します。</p>
                </div>
                <div class="service-item">
                    <h3>ネイルケア</h3>
                    <p>爪の健康を第一に考えた丁寧なケアで、美しい自爪へ。</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section id="gallery" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">デザインギャラリー</h2>
            <div class="gallery-grid">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+1" alt="Nail Art 1">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+2" alt="Nail Art 2">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+3" alt="Nail Art 3">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+4" alt="Nail Art 4">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+5" alt="Nail Art 5">
                <img src="https://via.placeholder.com/300x200?text=Nail+Art+6" alt="Nail Art 6">
            </div>
        </div>
    </section>

    <!-- Blog/News Section (using WordPress posts) -->
    <section id="blog" class="section-padding">
        <div class="container">
            <h2 class="section-title">最新情報</h2>
            <div class="posts-list">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                        ?>
                        <article class="post-item">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="post-meta">
                                Posted on <?php the_time( 'F j, Y' ); ?> by <?php the_author(); ?>
                            </div>
                            <?php the_excerpt(); ?>
                        </article>
                        <?php
                    endwhile;
                else :
                    echo '<p>まだ投稿がありません。</p>';
                endif;
                ?>
            </div>
        </div>
    </section>

    <!-- Info Section -->
    <section id="info" class="section-padding bg-light">
        <div class="container">
            <h2 class="section-title">店舗情報</h2>
            <div class="info-content">
                <p><strong>サロン名:</strong> [あなたのサロン名]</p>
                <p><strong>住所:</strong> [あなたのサロンの住所]</p>
                <p><strong>電話番号:</strong> [あなたのサロンの電話番号]</p>
                <p><strong>営業時間:</strong> [あなたのサロンの営業時間]</p>
                <p><strong>アクセス:</strong> [最寄りの駅からのアクセスなど]</p>
                <!-- Google Maps Embed (Optional) -->
                <!-- <div class="map-embed">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.828030410799!2d139.7671248152582!3d35.6812361801943!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b8594769d81%3A0x3f5f5f5f5f5f5f5f!2sTokyo%20Station!5e0!3m2!1sen!2sjp!4v1678912345678!5m2!1sen!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div> -->
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="booking" class="section-padding">
        <div class="container text-center">
            <h2 class="section-title">ご予約</h2>
            <p>お電話またはオンラインでご予約いただけます。</p>
            <a href="[予約ページのURL]" class="button primary-button">オンライン予約はこちら</a>
            <p>お電話でのご予約: [あなたのサロンの電話番号]</p>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>