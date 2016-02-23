<?php 
/*
Template Name: Página creams
*/ ?>

<?php get_header() ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>


<body class="Products">
	<main class="Products-main">
		<section class="Products-desserts">
			<h1><?php wp_title(''); ?></h1>
			<section class="Products-article">
				<?php rewind_posts() ?>
				<?php query_posts('cat=17&order=Asc') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<article class="Products-cream">
					<h2><?php the_title() ?></h2>
					<div class="Products-meta">
						<?php the_meta(); ?>
					</div>
					<figure>
						<?php the_content(); ?>
						<?php the_post_thumbnail('thumbnail'); ?>
					</figure>				
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