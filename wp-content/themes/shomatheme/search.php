<?php get_header(); ?>

<section class="page-wrap">
	<div class="container">

		<h3>Search Results for '<?php echo get_search_query(); ?>'</h3>

		<?php get_template_part('includes/section', 'searchresults'); ?>

		<?php previous_posts_link(); ?>

		<?php next_posts_link(); ?>

	</div>
</div>

<?php get_footer(); ?>

