<?php 
/*
Template Name: Página gustos
*/ ?>

<?php get_header() ?>

<?php include TEMPLATEPATH . '/header1.php' ?>
<?php include TEMPLATEPATH . '/contact.php' ?>

<body class="Gustos">
	<main class="Gustos-main">
		<div class="Gustos-article">
			<article class="Gustos-crema">
				<h3 class="Gustos-crema-h3">Cremas</h3>		
				<?php rewind_posts() ?>
				<?php query_posts('cat=8') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<div class="Gustos-crema-list">				
					<h4><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					<span><?php the_excerpt(); ?></span>
				</div>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
			</article>

			<article class="Gustos-chocolates">
				<h3 class="Gustos-chocolates-h3">Chocolates</h3>		
				<?php rewind_posts() ?>
				<?php query_posts('cat=6') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<div class="Gustos-chocolates-list">
					<h4><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					<span><?php the_excerpt(); ?></span>
				</div>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
			</article>


			<article class="Gustos-dleche">
				<h3 class="Gustos-dleche-h3">Dulce de leche</h3>		
				<?php rewind_posts() ?>
				<?php query_posts('cat=7') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<div class="Gustos-dleche-list">
					<h4><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					<span><?php the_excerpt(); ?></span>
				</div>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
			</article>



			<article class="Gustos-agua">
				<h3 class="Gustos-agua-h3">Agua</h3>		
				<?php rewind_posts() ?>
				<?php query_posts('cat=9') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<div class="Gustos-agua-list">
					<h4><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					<span><?php the_excerpt(); ?></span>
				</div>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
			</article>



			<article class="Gustos-all">
				<h3 class="Gustos-all-h3 is-disabled">Todos los gustos</h3>		
				<?php rewind_posts() ?>
				<?php query_posts('cat=5') ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>
				<div class="Gustos-all-list">
					<h4><?php the_title() ?></h4>
					<p><?php the_content(); ?></p>
					<span><?php the_excerpt(); ?></span>
				</div>
				<!-- post -->
				<?php endwhile ?>
				<!-- post navigation -->
				<?php else: ?>
				<!-- no posts found -->
				<?php endif ?>
			</article>
		</div>
	</main>
	<div class="Gustos-footer">
		<?php get_footer(); ?>
	</div>
</body>
<script>

function closeAll () {    
	    $('.Gustos-all-list').slideToggle(1)
	    $('.Gustos-all-h3').toggleClass("is-disabled")
	}

	function openCream () {    
	    $('.Gustos-crema-list').slideToggle(1)
	    $('.Gustos-crema-h3').toggleClass("is-disabled")
	}
	function openChoc () {    
	    $('.Gustos-chocolates-list').slideToggle(1)
	    $('.Gustos-chocolates-h3').toggleClass("is-disabled")
	}
	function openDlech () {    
	    $('.Gustos-dleche-list').slideToggle(1)
	    $('.Gustos-dleche-h3').toggleClass("is-disabled")
	}
	function openAgua () {    
	    $('.Gustos-agua-list').slideToggle(1)
	    $('.Gustos-agua-h3').toggleClass("is-disabled")
	}

	$(".Gustos-all-h3").click( closeAll )
	$(".Gustos-crema-h3").click( openCream )
	$(".Gustos-chocolates-h3").click( openChoc )
	$(".Gustos-dleche-h3").click( openDlech )
	$(".Gustos-agua-h3").click( openAgua )


// $( "h3" ).click(function() {
//   $( "p" ).slideToggle( "slow" );
// });














</script>

