<?php get_header(); ?>

<main class="single-project-page">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <article class="single-project">

                <h1><?php the_title(); ?></h1>

                <?php if ( has_post_thumbnail() ) : ?>

                    <div class="single-project-image">
                        <?php the_post_thumbnail('large'); ?>
                    </div>

                <?php endif; ?>

                <div class="single-project-content">
                    <?php the_content(); ?>
                </div>

            </article>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>