<footer class="Footer">
	<div class="Footer-top">
		<aside class="Footer-social">
			<ul>
				<li class="Footer-google"><a href=""><span class="icon-google-plus2"></span></a></li>
				<li class="Footer-facebook"><a href=""><span class="icon-facebook2"></span></a></li>
				<li class="Footer-twitter"><a href=""><span class="icon-twitter"></span></a></li>
				<li class="Footer-instagram"><a href=""><span class="icon-instagram"></span></a></li>
				<li class="Footer-youtube"><a href=""><span class="icon-phone"></span></a></li>
			</ul>
		</aside>
		<aside class="Footer-subscribe">
			<div class="Footer-form">
				<input type="text" placeholder="e-mail">
				<input type="submit" value="subscribe">
			</div>

		</aside>
		<aside class="Footer-menu">
				<?php
			    wp_nav_menu(
			        array(
			            'theme_location' => 'menu-footer',
			            'container'       => 'nav',
			            'container_class' => 'Footer-nav',
			            'menu_class'      => 'Footer-list'
			            )
			        );
			 ?>
		</aside>
	</div>
	<div class="Footer-bottom">
		<small><i>© 2016 Fina Theme - Agustín Palmieri. </i></small>
	</div>
</footer>