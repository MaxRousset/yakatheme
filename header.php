
<body id='custom-background' class='custom-background'>

	<!-- Menu top if present -->
  <?php if ( has_nav_menu( 'primary' ) ) : ?>
    <nav class="navbar-expand-lg">

      <!-- Add custom_logo if present -->
      <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
      if ( has_custom_logo() ) {
              echo '<img alt="logo" src="'. esc_url( $logo[0] ) .'" id="custom-logo">';
      }
      ?>

      <!-- Mobile menu button -->
      <button aria-label="Menu" class="navbar-toggler" type="button" onclick="toggleMenu()" >
        <span class="navbar-toggler-icon" ></span>
      </button>

      <!-- Menu top -->
  		<?php
  		wp_nav_menu ( array (
  			'menu'            => '',
        'menu_class'      => 'navbar-nav',
  			'container'       => 'div',
  			'container_class' => 'collapse navbar-collapse',
  			'container_id'    => 'navbarSupportedContent',
  			'echo'            => true,
  			'fallback_cb'     => '__return_false',
  			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
  			'item_spacing'    => 'preserve',
  			'depth'           => 0,
  		) ); ?>
  	</nav>
  <?php endif; ?>


	<!-- Header image-->
	<header id="masthead" class="site-header" style="background-image: url(<?php header_image(); ?>)">
    <!-- Site branding -->
		<div class="site-branding" >
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<p class="site-description"><?php echo get_bloginfo( 'description', 'display' );?></p>
		</div>
	</header>


	<script>

  	function toggleMenu() {
      var element = document.getElementById("navbarSupportedContent");
      element.classList.toggle("show");
    }

    function logoMargin() {
      var menu = document.getElementById("navbarSupportedContent");
      var logo = document.getElementById("custom-logo");
         if(logo && window.matchMedia( "(min-width: 992px)" ).matches ){
             menu.style.marginRight = "100px";
         }
         else{
           menu.style.marginRight = "0";
         }
    }

    logoMargin()

    window.addEventListener('resize', logoMargin, false);
  </script>
