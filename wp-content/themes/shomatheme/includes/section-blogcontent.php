<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


	<!-- Date -->
	<p><?php echo get_the_date('d/m/Y') ?></p>

	<?php the_content(); ?>


	<!-- Author -->
	<?php 

	$fname = get_the_author_meta('first_name');
	$lname = get_the_author_meta('last_name');

	?>

	<p>Posted by <?php echo $fname ?> <?php echo $lname ?></p>


	<!-- Tags -->
	<?php 

	$tags = get_the_tags();
	foreach($tags as $tag):?>

		<a href="<?php get_tag_link($tag->term_id); ?>" class="badge bg-success">
			<?php echo $tag->name; ?>
		</a>

	<?php endforeach; ?>


<!-- Categories -->
	<?php 

	$categories = get_the_category();

	foreach($categories as $cat):?>

		<a href="<?php get_category_link($cat->term_id); ?>">
			<?php echo $cat->name; ?>
		</a>

	<?php endforeach; ?>


	<!-- Comments -->
	<?php comments_template(); ?>

	<?php endwhile; else: endif; ?>

