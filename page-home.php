<?php
//template Name: Home
get_header(); ?>

<!-- HERO -->
<section class="hero">
    <figure class="hero__image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hero.jpg" alt="Bild av en iBearWatch" />
    </figure>
</section>

<!-- SITE INGRESS -->
<section class="site-ingress">
    <p>
        <strong>iBearWatch</strong> – where bold design meets smart
        innovation, keeping you connected, active, and ahead of time.
    </p>
</section>

<!-- GALLERI -->
<section class="gallery">
    <!-- Gallery item #1 -->
    <div class="gallery__item">
        <button class="gallery__like">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.1 16.05L10 16.15L9.89 16.05C5.14 11.74 2 8.89 2 6C2 4 3.5 2.5 5.5 2.5C7.04 2.5 8.54 3.5 9.07 4.86H10.93C11.46 3.5 12.96 2.5 14.5 2.5C16.5 2.5 18 4 18 6C18 8.89 14.86 11.74 10.1 16.05ZM14.5 0.5C12.76 0.5 11.09 1.31 10 2.58C8.91 1.31 7.24 0.5 5.5 0.5C2.42 0.5 0 2.91 0 6C0 9.77 3.4 12.86 8.55 17.53L10 18.85L11.45 17.53C16.6 12.86 20 9.77 20 6C20 2.91 17.58 0.5 14.5 0.5Z"
                    fill="currentColor" />
            </svg>
        </button>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-1.png" alt="iBearWatch färg svart" class="gallery__image" />
    </div>

    <!-- Gallery item #2 -->
    <div class="gallery__item">
        <button class="gallery__like">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.1 16.05L10 16.15L9.89 16.05C5.14 11.74 2 8.89 2 6C2 4 3.5 2.5 5.5 2.5C7.04 2.5 8.54 3.5 9.07 4.86H10.93C11.46 3.5 12.96 2.5 14.5 2.5C16.5 2.5 18 4 18 6C18 8.89 14.86 11.74 10.1 16.05ZM14.5 0.5C12.76 0.5 11.09 1.31 10 2.58C8.91 1.31 7.24 0.5 5.5 0.5C2.42 0.5 0 2.91 0 6C0 9.77 3.4 12.86 8.55 17.53L10 18.85L11.45 17.53C16.6 12.86 20 9.77 20 6C20 2.91 17.58 0.5 14.5 0.5Z"
                    fill="currentColor" />
            </svg>
        </button>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-2.png" alt="iBearWatch rosa" class="gallery__image" />
    </div>

    <!-- Gallery item #3 -->
    <div class="gallery__item">
        <button class="gallery__like">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.1 16.05L10 16.15L9.89 16.05C5.14 11.74 2 8.89 2 6C2 4 3.5 2.5 5.5 2.5C7.04 2.5 8.54 3.5 9.07 4.86H10.93C11.46 3.5 12.96 2.5 14.5 2.5C16.5 2.5 18 4 18 6C18 8.89 14.86 11.74 10.1 16.05ZM14.5 0.5C12.76 0.5 11.09 1.31 10 2.58C8.91 1.31 7.24 0.5 5.5 0.5C2.42 0.5 0 2.91 0 6C0 9.77 3.4 12.86 8.55 17.53L10 18.85L11.45 17.53C16.6 12.86 20 9.77 20 6C20 2.91 17.58 0.5 14.5 0.5Z"
                    fill="currentColor" />
            </svg>
        </button>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-3.png" alt="iBearWatch grå" class="gallery__image" />
    </div>

    <!-- Gallery item #4 -->
    <div class="gallery__item">
        <button class="gallery__like">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M10.1 16.05L10 16.15L9.89 16.05C5.14 11.74 2 8.89 2 6C2 4 3.5 2.5 5.5 2.5C7.04 2.5 8.54 3.5 9.07 4.86H10.93C11.46 3.5 12.96 2.5 14.5 2.5C16.5 2.5 18 4 18 6C18 8.89 14.86 11.74 10.1 16.05ZM14.5 0.5C12.76 0.5 11.09 1.31 10 2.58C8.91 1.31 7.24 0.5 5.5 0.5C2.42 0.5 0 2.91 0 6C0 9.77 3.4 12.86 8.55 17.53L10 18.85L11.45 17.53C16.6 12.86 20 9.77 20 6C20 2.91 17.58 0.5 14.5 0.5Z"
                    fill="currentColor" />
            </svg>
        </button>

        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/product-4.png" alt="iBearWatch grön" class="gallery__image" />
    </div>

    <!-- Gallery item #5 -->
    <div class="gallery__item">
        <div class="gallery__cta">
            <span class="gallery__text"><em>Where</em> is my <strong>favorite color</strong> ?</span>
            <a href="" class="button button--big">Customize</a>
        </div>
    </div>
</section>

<!-- Kampanjerbjudanderuta -->
<section class="promotion">
    <div class="promotion__content">
        <h2 class="promotion__title">
            Save 50% on selected iBearWatch colors!
        </h2>
        <p class="promotion__text">
            Upgrade your style and stay connected with smart technology at half
            the price. Limited time only – pick your shade before it’s gone!
        </p>
        <a href="" class="button button--inverted button--big">Buy now!</a>
    </div>
</section>
</div>

<!-- Blog -->

<section class="blog">

    <?php

    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>

            <!-- Kort 1 -->
            <article class="card">
                <figure class="card__image">
                    <?php the_post_thumbnail('large'); ?>

                </figure>

                <div class="card__content">

                    <h3 class="card__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <p class="card__excerpt">
                        <?php the_excerpt(); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="button">Read more</a>


                </div>

            </article>

    <?php endwhile;
        wp_reset_postdata();
    endif; ?>





</section>


<?php get_footer(); ?>