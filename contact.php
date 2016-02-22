<section class="Contact">
	<form action="<?php bloginfo('template_url'); ?>/cont.php" method="post" class="Contact-form">

		 	<input id="nombre"  class="form-input" type="text" name="nombre" required="" placeholder="nombre"  />
		 	<br>
			<input id="email" class="form-input" type="email" name="email" required="" placeholder="e-mail"/>
			<br>
			<textarea id="mensaje" class="form-textarea" name="mensaje" required="" placeholder="mensaje"></textarea>
			<br>
			<input id="submit" class="form-input Contact-submit" type="submit" name="submit" value="Enviar" />
			<span class="icon-phone">4736183</span>
			<span class="icon-phone">

<script type="text/javascript">
  	document.write("<a href=\"mail" + "to:" + new Array("gat","gat.com").join("@") + "\">" + new Array("gat","gat.com").join("@") + "</" + "a>");
</script>

			</span>
		</form>
		<button class="icon-close Contact-close"></button>
	<!-- <form action="" class="contact-form">	 -->
	<!-- </form>	 -->
</section>
<script>
	function openContact () {    
	    $('.Contact').fadeIn(1000);
	    event.preventDefault();
	};

	function closeContact () {    
	    $('.Contact').fadeOut(1000);
	};

	$('.Header-contact, .Footer-contact').click( openContact );

	$('.Contact-close').click( closeContact );
</script>