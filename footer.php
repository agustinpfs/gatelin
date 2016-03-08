<div class="Footer">
  <div class="Footer-left">
    <div class="Footer-title">
      <img src="http://localhost/wp-content/uploads/2016/02/logo.png" alt=""/></span><h1><?php bloginfo('title' ); ?></h1>
    </div>
    <div class="Footer-copy"><small>© 2016 GatelinSRL</small><small>Diseño por <a href="http://pandawebs.net/" target="blank">Pandawebs</a></small></div>
  </div>
  <div class="Footer-center">
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
  <div class="Footer-right">
    <div class="Footer-social">
<!--       <h3>Social</h3>
 -->      <ul>
        <li><a href="#" class="icon-google-plus2"></a></li>
        <li><a href="#" class="icon-facebook2"></a></li>
        <li><a href="#" class="icon-twitter"></a></li>
      </ul>
    </div>
    <!-- <div class="Footer-leyend"><em>
        <p>"Mi consejo es que no te preguntes por qué o de dónde, sino que disfrutes de tu helado mientras está en el plato. Esta es mi filosofía.” 
         </p> <p>― Thornton Wilder
</p></em></div> -->
  </div>
</div>

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