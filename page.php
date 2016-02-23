<?php get_header(); ?>	
<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<main class="Page">
	<section class="Page-content">
	<?php include TEMPLATEPATH . '/contact.php' ?>
		<div class="Page-title">
			<h1><?php the_title(); ?></h1>
		</div>
		
		<?php the_content(); ?>
		<?php endwhile; ?>
		<!-- post navigation -->
		<?php else: ?>
		<!-- no posts found -->
		<?php endif; ?>
	</section>
	<aside class="Page-sidebar">
		<?php dynamic_sidebar('page-sidebar-id'); ?>
	</aside>
</main>
<?php get_footer(); ?>