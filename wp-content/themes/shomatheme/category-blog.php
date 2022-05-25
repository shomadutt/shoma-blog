<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">

		<?php echo single_cat_title(); ?>
		
		<?php get_template_part('includes/section', 'archive'); ?>

		<?php previous_posts_link(); ?>
		<?php next_posts_link(); ?>

	</div>
</div>

<?php get_footer(); ?>







