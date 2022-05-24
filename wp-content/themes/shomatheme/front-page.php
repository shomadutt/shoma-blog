<?php get_header(); ?>


<section class="page-wrap">

    <div class="container">

        <?php if(has_post_thumbnail()): ?>

        <img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid mb-3 img-thumbnail" alt="<?php the_title(); ?>">

        <?php endif ?>


        <?php get_template_part('includes/section', 'content'); ?>


    </div>

</section>


<?php get_footer(); ?>