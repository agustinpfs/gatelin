<?php 
/*
Template Name: Página index
*/ ?>
<?php get_header(); ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>
<div class="Index-image">
	<?php include TEMPLATEPATH . '/image.php' ?>
</div>

<div class="Index">
	<?php rewind_posts(); ?>
<!-- 		// <?php query_posts('cat=2'); ?>
-->		
	<?php query_posts('posts_per_page=7&order=Asc'); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article class="Index-article">
		<a href="<?php the_permalink(); ?>">
			<figure>
				<?php the_post_thumbnail(large); ?>
			</figure>
			<div class="Index-title">				
				<?php the_title(); ?>				
			</div>
			<div class="Index-excerpt">
				<?php the_excerpt(); ?>
				<span class="icon-one-finger-click"></span>
			</div>
		</a>
	</article>	
		
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
		<h3>No se encontraron entradas</h3>
	<!-- no posts found -->
	<?php endif; ?>
</div>
<?php get_footer(); ?>
<div class="pedido">
	<h2>Hacé tu pedido ya!</h2>
	<span>473-6183</span>
</div>

<script>

	$( ".Index-article" ).hover(
	  function() {
	    $( this ).find( ".Index-excerpt" ).delay(200).slideToggle(400)
	  }
	);


	// $( ".Index-article" ).mouseout(
	//   function() {
	//     $( this ).find( ".Index-excerpt" ).hide()
	//   }
	// );

	// function showExcerpt() {
	// $( ".Index-excerpt" ).slideToggle(500)



	// }
	// $( ".Index-article" ).hover( showExcerpt )

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

</script>