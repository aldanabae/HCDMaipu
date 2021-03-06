<!DOCTYPE html>
<!--[if lt IE 7]>
    <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>
    <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>
    <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>><!--<![endif]-->
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <meta charset="<?php bloginfo('charset'); ?>" />	
	<?php $wl_theme_options = weblizar_get_options(); ?>
	<?php if($wl_theme_options['upload_image_favicon']!=''){ ?>
	<link rel="shortcut icon" href="<?php  echo esc_url($wl_theme_options['upload_image_favicon']); ?>" width="32px" height="32px"/> 
	<?php } ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<?php wp_head(); ?>
</head>
<body <?php body_class('boxed'); ?>>
<div id="wrapper">
	<!-- Header Section -->
	<div class="header_section" >
		<div class="container" >
			<!-- Logo & Contact Info -->
			<div class="row ">
				<div class="col-md-6 col-sm-12 wl_rtl" >					
					<div claSS="logo">						
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php if($wl_theme_options['upload_image_logo']){ ?>
						<img class="img-responsive" src="<?php echo $wl_theme_options['upload_image_logo']; ?>" style="height:<?php if($wl_theme_options['height']!='') { echo $wl_theme_options['height']; }  else { "80"; } ?>px; width:<?php if($wl_theme_options['width']!='') { echo $wl_theme_options['width']; }  else { "200"; } ?>px;" />
						<?php } else {
							echo get_bloginfo('name');
						} ?>
					</a>
					<p><?php //echo "Sitio Oficial del Honorable Consejo Deliberante de Maipú"; ?></p>
					</div>
				</div>
				<?php if($wl_theme_options['header_social_media_in_enabled']=='1') { ?>
				<div class="col-md-6 col-sm-12">
				<?php if($wl_theme_options['email_id'] || $wl_theme_options['phone_no'] !='') { ?>
					<ul class="head-contact-info">
						<?php if($wl_theme_options['email_id'] !='') { ?><li><i class="fa fa-envelope" style="color:#FFF;"></i><a href="mailto:<?php echo $wl_theme_options['email_id']; ?>"><?php echo esc_attr($wl_theme_options['email_id']); ?></a></li><?php } ?>
						<?php if($wl_theme_options['phone_no'] !='') { ?><li><i class="fa fa-phone" style="color:#FFF;"></i><a href="tel:<?php echo $wl_theme_options['phone_no']; ?>"><?php echo esc_attr($wl_theme_options['phone_no']); ?></a></li><?php } ?>
					</ul>
					<?php } ?>
					<ul class="social">	
						<h4 style="color:#FFF;">Seguinos en:</h4>	
						<li class="facebook" data-toggle="tooltip" data-placement="bottom" title="Facebook"><a href="https://www.facebook.com/hcd.maipu.5"><i class="fa fa-facebook"></i></a></li>						
						<li class="twitter" data-toggle="tooltip" data-placement="bottom" title="Twitter"><a href="https://twitter.com/HCDMaipuMza"><i class="fa fa-twitter"></i></a></li>
						<li class="youtube" data-toggle="tooltip" data-placement="bottom" title="YouTube"><a href="https://www.youtube.com/channel/UCzalXbrGQJRroluAMhjfUDw"><i class="fa fa-youtube"></i></a></li>		                
						<li class="dribbble" data-toggle="tooltip" data-placement="bottom" title="Instagram"><a href="https://www.instagram.com/hcdmaipu/"><i class="fa fa-instagram"></i></a></li>         
					</ul>	
				</div>
				<?php } ?>
			</div>
			<!-- /Logo & Contact Info -->
		</div>	
	</div>	
	<!-- /Header Section -->


<!-- Navigation  menus -->
<div class="navigation_menu"  data-spy="affix" data-offset-top="95" id="enigma_nav_top">
	<span id="header_shadow"></span>
	<div class="container navbar-container" >
		<nav class="navbar navbar-default " role="navigation">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
					<span class="sr-only">Toggle navigation</span>
				  	<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
				  	<span class="icon-bar"></span>
				</button>
			</div>
			<div id="menu" class="collapse navbar-collapse">	
				<div class="menu-main-container">
					<ul id="menu-main" class="nav navbar-nav">
						<li id="menu-item-2270" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2270 dropdown" data-original-title="" title="">
							<a href="#">Institucional <i class="fa fa-angle-double-down menu-carot"></i></a>
							<ul class="dropdown-menu">
								<li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858" data-original-title="" title="">
									<a href="<?php echo DB_HOST.'HCDMaipu/informacion-general'; ?>">Información General</a>
								</li>
								<li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858" data-original-title="" title="">
									<a href="<?php echo DB_HOST.'HCDMaipu/vision-mision'; ?>">Visión y Misión</a>
								</li>
						        <li id="menu-item-1737" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1737" data-original-title="" title="">
						        	<a href="<?php echo DB_HOST.'HCDMaipu/valores' ;?>">Nuestros Valores</a>
						        </li>
						        <li "menu-item-2282" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2282" data-original-title="" title="">
						        	<a href="<?php echo DB_HOST.'HCDMaipu/politica'; ?>">Nuestra Política</a>
						        </li>
						    </ul>
						</li>

						<li id="menu-item-2270" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2270 dropdown" data-original-title="" title="">
							<a href="#">El Concejo <i class="fa fa-angle-double-down menu-carot"></i></a>
							<ul class="dropdown-menu">
								<li id="menu-item-1858" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1858" data-original-title="" title="">
									<a href="<?php echo DB_HOST.'HCDMaipu/autoridades/'; ?>">Autoridades</a>
								</li>
						        <li id="menu-item-1737" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1737" data-original-title="" title="">
						        	<a href="<?php echo DB_HOST.'HCDMaipu/bancas-y-bloques'; ?>">Bloques</a>
						        </li>
						        <li id="menu-item-1737" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1737" data-original-title="" title="">
						        	<a href="<?php echo DB_HOST.'HCDMaipu/comisiones'; ?>">Comisiones</a>
						        </li>
						        <li id="menu-item-1737" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1737" data-original-title="" title="">
						        	<a href="<?php echo DB_HOST.'HCDMaipu/administracion-hcd'; ?>">Administración</a>
						        </li>
						    </ul>
						</li>

						<li id="menu-item-290" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-290">
							<a href="<?php echo DB_HOST.'HCDMaipu/noticias'; ?>">Noticias</a>
						</li>

						<li id="menu-item-291" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-291">
							<a href="<?php echo DB_HOST.'HCDMaipu/galeria'; ?>">Galeria</a>
						</li>

						<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292">
							<a href="<?php echo DB_HOST.'HCDMaipu/digesto'; ?>">Digesto</a>
						</li>

						<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292">
							<a href="<?php echo DB_HOST.'HCDMaipu/contacto'; ?>">Contáctenos</a>
						</li>

						<li id="menu-item-292" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-292">
							<a href="http://www.hcdmaipu.gob.ar/webmail">WebMail HCD</a>
						</li>
					</ul>
				</div>				
			</div>	
		</nav>
	</div>
</div>


