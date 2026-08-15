<?php get_header(); ?>

<main class="site-main">

    <section class="projects-archive">
        <div class="projects-container">

            <div class="section-heading">
                <p class="section-label">Our Work</p>
                <h1>Projects</h1>
            </div>

            <div class="projects-grid">

                <?php if ( have_posts() ) : ?>

                    <?php while ( have_posts() ) : the_post(); ?>

                        <article class="project-card">

                            <div class="project-image">
                                <?php
                                if ( has_post_thumbnail() ) {
                                    the_post_thumbnail('large');
                                }
                                ?>
                            </div>

                            <div class="project-content">

                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <?php the_excerpt(); ?>

                            </div>

                        </article>

                    <?php endwhile; ?>

                <?php endif; ?>

            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>