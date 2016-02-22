<?php get_header() ?>

<?php include TEMPLATEPATH . '/header1.php' ?>

<body class="Products">
	<main class="Products-main">
		<section class="Products-desserts">
			<h1><?php wp_title(''); ?></h1>
			<section class="Products-article">
				<?php rewind_posts() ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<article>
					<h2><?php the_title() ?></h2>
					<figure>
						<?php the_post_thumbnail('thumbnail'); ?>
					</figure>
					<?php the_content(); ?>
					<span><?php the_excerpt(); ?></span>
				</article>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
				<div class="Products-sidebar">
					<?php dynamic_sidebar('unique-sidebar-id'); ?>
				</div>
			</section>
		</section>
	</main>
	<?php get_footer(); ?>
</body>