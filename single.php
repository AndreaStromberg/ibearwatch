<?php get_header(); ?>


<main class="site-content">

    <section class="single">

        <header class="single__header">
            <h1 class="single__title"><?php the_title(); ?></h1>
        </header>

        <?php if (has_post_thumbnail()) : ?>
            <figure class="single__image">
                <?php the_post_thumbnail(); ?>
            </figure>
        <?php endif; ?>


        <div class="single__content">
            <?php the_content(); ?>
        </div>



    </section>


</main>

<?php get_footer(); ?>