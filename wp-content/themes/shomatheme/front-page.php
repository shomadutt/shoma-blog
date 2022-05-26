<?php get_header(); ?>

<section class="page-wrap">

    <?php if(has_post_thumbnail()): ?>

    <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-3 img-thumbnail" alt="<?php the_title(); ?>">

    <?php endif ?>

    <div class="container">

        <div class="row">

            <div class="col-lg-8">

                <?php get_template_part('includes/section', 'content'); ?>

            </div>

            <div class="col-lg-4 d-flex justify-content-center">

                <div class="row">

                    <?php if(is_active_sidebar('home-sidebar')): ?>

                    <?php dynamic_sidebar('home-sidebar') ?>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</section>

<?php get_footer(); ?>