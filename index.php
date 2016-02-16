<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title><?php bloginfo('description'); ?></title>
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="<?php bloginfo(stylesheet_url ); ?>">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
	</head>

<body>
	<header class="Header">
		<div class="Header-content">
			<div class="Header-icon">
				<span class="icon-menu2"></span>
			</div>
			<!-- <div class="Header-title">
				<a href="<?php echo get_option('home'); ?>/">
					<figure>
						<h1 class="Header-h1">F</h1>
					</figure>
					<h2><?php bloginfo('description' ); ?></h2>
				</a>
			</div> -->
			
			<?php include TEMPLATEPATH . '/logo.php' ?>
				
		</div>
		
	<div class="Header-contentNav">
		<?php include TEMPLATEPATH . '/nav.php' ?>
	</div>
	</header>

<script>
	function showMenu() {
	$( ".Header-nav" ).slideToggle(500)


	}
	$( ".Header-icon" ).on( "click", showMenu )

	// $( ".Header-icon" ).click(function() {
	//   $( ".Header-nav" ).slideToggle( "slow" );
	// });

</script>
