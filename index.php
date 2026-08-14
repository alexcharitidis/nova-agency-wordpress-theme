<?php get_header(); ?>

<main class="site-main">

    <section class="hero">
        <div class="hero-container">

            <div class="hero-content">
                    <h1><?php the_field('hero_title'); ?></h1>

                    <p>
                        <?php the_field('hero_description'); ?>
                    </p>

                    <a href="<?php the_field('hero_button_link'); ?>" class="hero-button">
                        <?php the_field('hero_button_text'); ?>
                    </a>
            </div>

        </div>
    </section>

    <section class="services">
    <div class="services-container">

        <div class="section-heading">
            <p><?php the_field('services_label'); ?></p>
            <h2><?php the_field('services_title'); ?></h2>
        </div>

        <div class="services-grid">

            <article class="service-card">
                <h3><?php the_field('service_1_title'); ?></h3>
                <p><?php the_field('service_1_description'); ?></p>
            </article>

            <article class="service-card">
                <h3><?php the_field('service_2_title'); ?></h3>
                <p><?php the_field('service_2_description'); ?></p>
            </article>

            <article class="service-card">
                <h3><?php the_field('service_3_title'); ?></h3>
                <p><?php the_field('service_3_description'); ?></p>
            </article>

        </div>

    </div>
</section>



        <section class="about-section">
    <div class="about-container">

        <div class="about-content">

            <p class="section-label">
                <?php the_field('about_label'); ?>
            </p>

            <h2><?php the_field('about_title'); ?></h2>

            <p>
                <?php the_field('about_description'); ?>
            </p>

            <a href="<?php the_field('about_button_link'); ?>" class="about-link">
                <?php the_field('about_button_text'); ?>
            </a>

        </div>

        <div class="about-stats">

            <div class="stat">
                <strong><?php the_field('stat_1_number'); ?></strong>
                <span><?php the_field('stat_1_label'); ?></span>
            </div>

            <div class="stat">
                <strong><?php the_field('stat_2_number'); ?></strong>
                <span><?php the_field('stat_2_label'); ?></span>
            </div>

            <div class="stat">
                <strong><?php the_field('stat_3_number'); ?></strong>
                <span><?php the_field('stat_3_label'); ?></span>
            </div>

        </div>

    </div>
</section>

    

<section class="projects-section">
    <div class="projects-container">

        <div class="section-heading">
            <p class="section-label">Our Work</p>
            <h2>Featured Projects</h2>
        </div>

        <div class="projects-grid">

            <article class="project-card">
                <div class="project-image"></div>

                <div class="project-content">
                    <h3>Business Website</h3>
                    <p>Web Development</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>

                <div class="project-content">
                    <h3>E-commerce Platform</h3>
                    <p>Web Development & SEO</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>

                <div class="project-content">
                    <h3>Digital Campaign</h3>
                    <p>Digital Strategy</p>
                </div>
            </article>

        </div>

    </div>
</section>

<section class="cta-section">
    <div class="cta-container">

        <h2><?php the_field('cta_title'); ?></h2>

        <p>
            <?php the_field('cta_description'); ?>
        </p>

        <a href="<?php the_field('cta_button_link'); ?>" class="cta-button">
            <?php the_field('cta_button_text'); ?>
        </a>

    </div>
</section>

</main>

<?php get_footer(); ?>