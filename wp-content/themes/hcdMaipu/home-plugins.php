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
			'before_widget' => '<div class="col-md-6 col-sm-6 enigma_footer_widget_column">',
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
<!-- Fin enigma Callout Section -->



<!-- Inicio Seccion Herramientas de Interes -->
<div class="enigma_service" style="padding-bottom: 10px; background-color: #BAC5DB"> 
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="enigma_heading_title">
					<h3>Herramientas de Interés</h3>		
				</div>
			</div>
		</div>
	</div>	
	<div class="container">
		<div class="row isotope" id="isotope-service-container" align="center">		
			<div class=" col-md-3 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible"> 
					<div class="enigma_service_detail media-body">
						<h3><a href="http://localhost/HCDMaipu/download/415/">Constitución</br>Nacional</a></h3>											
					</div>
				</div>
			</div>

			<div class=" col-md-3 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible"> 
					<div class="enigma_service_detail media-body">
						<h3><a href="http://localhost/HCDMaipu/download/418/">Constitución Provincial</a></h3>											
					</div>
				</div>
			</div>

			<div class=" col-md-3 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible">
					<div class="enigma_service_detail media-body">
						<h3><a href="http://localhost/HCDMaipu/download/421/">Ley Orgánica Municipal</a></h3>											
					</div>
				</div>
			</div>

			<div class=" col-md-3 service">
				<div class="enigma_service_area appear-animation bounceIn appear-animation-visible"> 
					<div class="enigma_service_detail media-body">
						<h3><a href="#">Reglamento Interno del HCD Maipú</a></h3>											
					</div>
				</div>
			</div>	
		</div>
	</div>
</div>	
<!-- Fin Seccion Herramientas de Interes -->



<!-- Inicio Seccion Contacto-->
<div class="enigma_service" style="padding-bottom: 20px;">
	<div style="text-align:center;">
		<div class="enigma_heading_title">
				<h3>Contacto</h3>		
		</div>
		<div class="col-md-5 col-sm-5 enigma_footer_widget_column">
			<ul>
				</br>
				</br>
				</br>
					<li>
						<i class="fa fa-envelope" style="color:#5E79AD; margin-right: 8px;font-size: 24px;"></i>informacion@hcdmaipu.gob.ar
					</li>
				</br>
			</ul>
			<ul>			
					<li data-original-title="" title="">
						<i class="fa fa-phone" style="color:#5E79AD; margin-right: 8px;font-size: 24px;"></i>0261 481-2396
					</li>				
			</ul>
				</br>
			<ul>						
					<li data-original-title="" title="">
						<i class="fa fa-map-marker" style="color:#5E79AD; margin-right: 8px;font-size: 24px;"></i>Pablo Pescara 99, 5515 Maipú, Mendoza
					</li>				
			</ul>
		</div>

		<div class="col-md-7 col-sm-7 enigma_footer_widget_column">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.6741423614227!2d-68.78794095782004!3d-32.98540635834195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5925bb94933e04c0!2sHONORABLE+CONSEJO+DELIBERANTE+MAIP%C3%9A+HCD!5e0!3m2!1ses!2ses!4v1495999715008" width="550" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
</div>
<!-- Fin Seccion Contacto-->