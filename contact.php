<section class="Contact">
	<form action="<?php bloginfo('template_url'); ?>/cont.php" method="post" class="Contact-form">

		 	<input id="nombre"  class="form-input" type="text" name="nombre" required="" placeholder="nombre"  />
		 	<br>
			<input id="email" class="form-input" type="email" name="email" required="" placeholder="e-mail"/>
			<br>
			<textarea id="mensaje" class="form-textarea" name="mensaje" required="" placeholder="mensaje"></textarea>
			<br>
			<div class="g-recaptcha" data-sitekey="6Ld9JRoTAAAAAFCQutZimI7Y3LddyPuqsM7cuzn2" data-callback="enableBtn" data-theme="dark"></div>
			<input id="submit" class="form-input Contact-submit" type="submit" name="submit" value="Enviar" />
			<span class="icon-phone">4736183</span>
			<span class="icon-phone">

<script type="text/javascript">
  	document.write("<a href=\"mail" + "to:" + new Array("gat","gat.com").join("@") + "\">" + new Array("gat","gat.com").join("@") + "</" + "a>");
</script>

			</span>
			<br>
			<br>
	<!-- 	<script type="text/javascript">
		var RecaptchaOptions = {
		   theme : 'blackglass'
		};
		</script> -->
		

		</form>
		<button class="icon-close Contact-close"></button>
	<!-- <form action="" class="contact-form">	 -->
	<!-- </form>	 -->
</section>
<script>
document.getElementById("submit").disabled = true;
function enableBtn(){
   document.getElementById("submit").disabled = false;

  }

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