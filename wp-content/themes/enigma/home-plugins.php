<!-- enigma Callout Section -->
<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_footer_widget_area" >	
	<div class="container">
		<div class="row">
			<?php 
			if ( is_active_sidebar( 'footer-widget-area' ) ){ 
				dynamic_sidebar( 'footer-widget-area' );
			} else 
			{ 
			$args = array(
			'before_widget' => '<div class="col-md-3 col-sm-6 enigma_footer_widget_column">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="enigma_footer_widget_title">',
			'after_title'   => '<div class="enigma-footer-separator"></div></div>' );
			the_widget('WP_Widget_Pages', null, $args);
			} ?>
		</div>		
	</div>	
</div>
<?php if($wl_theme_options['custom_css']) ?>
<style type="text/css">
<?php { echo esc_attr($wl_theme_options['custom_css']); } ?>
</style>
<?php get_template_part('google', 'font'); ?>
<?php wp_footer(); ?>

<div class="enigma_service" style="padding-bottom: 240px;">
<div style="text-align:center;">
	<div class="enigma_heading_title">
			<h3>Contacto</h3>		
	</div>
	<div class="col-md-6 col-sm-6 enigma_footer_widget_column">
		<ul>
			<li>
				<i class="fa fa-envelope" style="color:#31A3DD; margin-right: 8px;font-size: 24px;"></i>hcdmaipu@mail.com
			</li>
		</ul>
		<ul>			
			<li data-original-title="" title="">
				<i class="fa fa-phone" style="color:#31A3DD; margin-right: 8px;font-size: 24px;"></i>0261 481-2396
			</li>				
		</ul>
		<ul>						
			<li data-original-title="" title="">
				<i class="fa fa-map-marker" style="color:#31A3DD; margin-right: 8px;font-size: 24px;"></i>Pablo Pescara 99, 5515 Maipú, Mendoza
			</li>				
		</ul>
	</div>

	<div class="col-md-6 col-sm-6 enigma_footer_widget_column">

	</div>
</div>
</div>