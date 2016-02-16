<div class="Header">
	<div class="Header-top">
	 	<div class="Header-logo">
	        <figure><img src="" alt=""/></figure>
			<h1><?php bloginfo('title' ); ?></h1>
			<span><?php bloginfo('description'); ?></span>
	  	</div>
	  	<div class="Header-menu">
	  		<label class="Header-label" for="menu">
	  			<span class="icon-menu"></span>
	  		</label>
	  		<input type="checkbox" class="check" id="menu">
			<?php include TEMPLATEPATH . '/nav.php' ?>
		</div>
	</div>
	<div class="Header-image">
		<?php include TEMPLATEPATH . '/image.php' ?>
	</div>
</div>
