<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php _e('404 Error','enigma'); ?></h1>
				<ul class="breadcrumb">
					<li><a href="<?php echo home_url( '/' ); ?>"><?php _e('Home','enigma'); ?></a></li>
					<li><?php _e('404 Error','enigma'); ?></li>
				
				</ul>
			</div>
		</div>
	</div>	
</div>
<div class="container">
	<div class="row enigma_blog_wrapper">
		<div class="col-md-12 hc_404_error_section">
			<div class="error_404">
				<h2><?php _e('404','enigma'); ?></h2>
				<h4><?php _e('Ups... Página no encontrada !!!','enigma'); ?></h4> 
				<!-- Cambio a castellaño <?php // _e('Whoops... Page Not Found !!!','enigma'); ?>-->
				<p><?php _e('Lo sentimos, pero la página que buscas no existe.','enigma'); ?></p>
				<!-- Cambio a castellaño <?php // _e('We`re sorry, but the page you are looking for doesn`t exist.','enigma');?>-->
				<p><a href="<?php echo home_url( '/' ); ?>"><button class="enigma_send_button" type="submit"><?php _e('Volver a Página Principal','enigma'); ?></button></a></p>
				<!-- Cambio a castellaño <?php //_e('Go To Homepage','enigma'); ?>-->
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>