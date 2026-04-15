<?php get_header(); ?>

<main class="site-content">

    <section class="page page--archive">

        <?php if (have_posts()) : while (have_posts()) : the_post();  ?>

                <div class="post">

                    <header class="post__header">

                        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span class="post__type">

                            <?php

                            echo get_post_type();

                            ?>




                        </span>

                    </header>

                    <div class="post__exerpt"><?php the_excerpt(); ?></div>
                </div>



        <?php endwhile;
        endif; ?>


    </section>


</main>

<?php get_footer(); ?>