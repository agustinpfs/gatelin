<div class="Header">
	<div class="Header-top">
	 	<div class="Header-logo">
	        <figure><img src="http://localhost/wp-content/uploads/2016/02/logo.png" alt=""/></figure>
			<h1><?php bloginfo('title' ); ?></h1>
			<!-- <span><?php bloginfo('description'); ?></span> -->
	  	</div>
	  	<div class="Header-menu">
	  		<div class="Header-menu_desktop">
	  			<?php include TEMPLATEPATH . '/nav.php' ?>
	  		</div>
	  		<label class="Header-label" for="menu">
	  			<span class="icon-menu"></span>
	  		</label>
	  		<input type="checkbox" class="check" id="menu">
	  		<div class="Header-navResponse">
				<?php include TEMPLATEPATH . '/nav.php' ?>
			</div>
		</div>
	</div>
	<div class="Header-image">
		<?php include TEMPLATEPATH . '/image.php' ?>
	</div>
</div>