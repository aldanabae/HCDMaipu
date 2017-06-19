<?php $wl_theme_options = weblizar_get_options(); ?>
<div class="enigma_callout_area" style="background-color: #1A408A;">
	<div class="container">
		<div class="row">
		<?php if($wl_theme_options['fc_title'] !='') { ?>
			<div class="col-md-9">
			<p><?php if($wl_theme_options['fc_icon'] !='') { ?><i class="<?php echo esc_attr($wl_theme_options['fc_icon']);?>"></i><?php } ?><?php echo esc_attr($wl_theme_options['fc_title']);?></p>
			</div>
			<?php } ?>
			<?php if($wl_theme_options['fc_btn_txt'] !='') { ?>
			<div class="col-md-2">
			<a href="<?php echo esc_url($wl_theme_options['fc_btn_link']); ?>" class="enigma_callout_btn" style="background-image: linear-gradient(to bottom, transparent 50%, #0F2652 50%); border:4px solid #5E79AD;"><?php echo esc_attr($wl_theme_options['fc_btn_txt']); ?></a>
			</div>
			<?php } ?>
		</div>		
	</div>
	<!-- <div class="enigma_callout_shadow"></div> -->
</div>
<!-- <div style="border-style: solid; border-color:#FFF;" ></div> -->