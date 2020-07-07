<?php


function gutenbergtheme_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'gutenbergtheme_custom_header_args', array(
		'default-image'         => get_parent_theme_file_uri( 'img/header.jpg' ),
		'default-text-color'    => '000000',
		'width'                 => 1000,
		'height'                => 240,
		'flex-height'           => true,
		'flex-width'    				=> true,
		'wp-head-callback'      => 'gutenbergtheme_header_style',
		'uploads'                => true,
		'random-default'         => false,
		'header-text'            => true,
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	) ) );
}
add_action( 'after_setup_theme', 'gutenbergtheme_custom_header_setup' );

if ( ! function_exists( 'gutenbergtheme_header_style' ) ) :

	function gutenbergtheme_header_style() {
		$header_text_color = get_header_textcolor();
		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) {
			return;
		}

		// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">
		<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
		?>
		.site-branding {
			display: none;
		}
}
		<?php
			// If the user has set a custom color for the text use that.
			else :
		?>
			.site-title a,
			.site-description {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}
		<?php endif; ?>
		</style>
		<?php
	}
endif;
