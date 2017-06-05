<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_callout_area" style="background-color: #005591;">
	<div class="container">
		<div class="row">
		<?php if($wl_theme_options['fc_title'] !='') { ?>
			<div class="col-md-9">
			<p><?php if($wl_theme_options['fc_icon'] !='') { ?><i class="<?php echo esc_attr($wl_theme_options['fc_icon']);?>"></i><?php } ?><?php echo esc_attr($wl_theme_options['fc_title']);?></p>
			</div>
			<?php } ?>
			<?php if($wl_theme_options['fc_btn_txt'] !='') { ?>
			<div class="col-md-2">
			<a href="<?php echo esc_url($wl_theme_options['fc_btn_link']); ?>" class="enigma_callout_btn" style="background-image: linear-gradient(to bottom, transparent 50%, #31A3DD 50%); border:4px solid #31A3DD;"><?php echo esc_attr($wl_theme_options['fc_btn_txt']); ?></a>
			</div>
			<?php } ?>
		</div>
		
	</div>
	<!-- <div class="enigma_callout_shadow"></div> -->
</div>
<!-- <div style="border-style: solid; border-color:#FFF;" ></div> -->