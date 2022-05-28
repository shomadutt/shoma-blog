

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

				<?php if(has_post_thumbnail()): ?>

					<img src="<?php the_post_thumbnail_url('blog-large'); ?>" class="img-fluid mb-3 img-thumbnail" alt="<?php the_title(); ?>">

				<?php endif ?>

				<?php get_template_part('includes/section', 'content'); ?>

			</div>

		</section>

	</div>
</div>

</section>

<?php get_footer(); ?>
