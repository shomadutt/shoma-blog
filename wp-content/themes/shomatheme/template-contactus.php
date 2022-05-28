<?php

/*
Template Name: Contact Us
*/

?>

<?php get_header(); ?>

<section class="page-wrap">
    <div class="container">

        <section class="row">

            <div class="col-lg-3">

                <?php if(is_active_sidebar('page-sidebar')): ?>

                <?php dynamic_sidebar('page-sidebar') ?>

                <?php endif ?>

            </div>

            <div class="col-lg-9">

                <h3>
                    <?php the_title(); ?>
                </h3>

				<br>

                <?php get_template_part('includes/form', 'enquiry'); ?>

            </div>

        </section>

    </div>
    </div>

</section>

<?php get_footer(); ?>