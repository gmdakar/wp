<?php
/**
 * Powerclub Lite About Theme
 *
 * @package Powerclub Lite
 */

//about theme info
add_action( 'admin_menu', 'powerclub_lite_abouttheme' );
function powerclub_lite_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'powerclub-lite'), __('About Theme Info', 'powerclub-lite'), 'edit_theme_options', 'powerclub_lite_guide', 'powerclub_lite_mostrar_guide');   
} 

//guidline for about theme
function powerclub_lite_mostrar_guide() { 	
?>

<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <h3><?php esc_html_e('About Theme Info', 'powerclub-lite'); ?></h3>
		   </div>
          <p><?php esc_html_e('Powerclub Lite is a Free Fitness WordPress theme it is clean codes and modern fitness WordPress theme. this theme use for Gym, Yoga, Fitness,hospita, clinic,restaurants,cafe, physiotherapy, portfolio, photography and more business. this Theme  build in customizer it is very easy to use and user friendly. also theme is translation ready.','powerclub-lite'); ?></p>
<div class="heading-gt"> <?php esc_html_e('Theme Features', 'powerclub-lite'); ?></div>
 

<div class="col-2">
  <h4><?php esc_html_e('Theme Customizer', 'powerclub-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'powerclub-lite'); ?></div>
</div>

<div class="col-2">
  <h4><?php esc_html_e('Responsive Ready', 'powerclub-lite'); ?></h4>
  <div class="description"><?php esc_html_e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'powerclub-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('Cross Browser Compatible', 'powerclub-lite'); ?></h4>
<div class="description"><?php esc_html_e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE8 and above.', 'powerclub-lite'); ?></div>
</div>

<div class="col-2">
<h4><?php esc_html_e('E-commerce', 'powerclub-lite'); ?></h4>
<div class="description"><?php esc_html_e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'powerclub-lite'); ?></div>
</div>

</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div style="font-weight:bold;">				
				<a href="<?php echo esc_url( POWERCLUB_LITE_LIVEDEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'powerclub-lite'); ?></a> | 				
				<a href="<?php echo esc_url( POWERCLUB_LITE_THEMEDOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'powerclub-lite'); ?></a>				
                <ul>
                 <li><?php esc_html_e('Theme Customizer', 'powerclub-lite'); ?></li>
                 <li><?php esc_html_e('Responsive Ready', 'powerclub-lite'); ?></li>
                 <li><?php esc_html_e('Cross Browser Compatible', 'powerclub-lite'); ?></li>
                 <li><?php esc_html_e('E-commerce', 'powerclub-lite'); ?></li>
                 <li><?php esc_html_e('Contact Form 7 Plugin Compatible', 'powerclub-lite'); ?></li>  
                 <li><?php esc_html_e('User Friendly', 'powerclub-lite'); ?></li> 
                 <li><?php esc_html_e('Translation Ready', 'powerclub-lite'); ?></li>
                 <li><?php esc_html_e('Many Other Plugins  Compatible', 'powerclub-lite'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>