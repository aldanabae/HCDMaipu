<section class="focus" id="nuevaseccion">
<div class="container">
    <!-- SECTION HEADER -->
    <div class="section-header">
        <!-- SECTION TITLE -->
        <?php
          global $wp_customize; 
          $zerif_newsection_title = get_theme_mod('zerif_newsection_title',__('NUEVA SECCIÓN','zerif-lite')); 
          if( !empty($zerif_newsection_title) ): 
          echo '<h2 class="dark-text">'.wp_kses_post( $zerif_newsection_title ).'</h2>'; 
          elseif ( isset( $wp_customize ) ):
          echo '<h2 class="dark-text zerif_hidden_if_not_customizer"></h2>';
          endif;
          $zerif_newsection_subtitle = get_theme_mod('zerif_newsection_subtitle',__('Subtítulo de la nueva sección.','zerif-lite'));
          if( !empty($zerif_newsection_subtitle) ):
          echo '<div class="section-legend">'.wp_kses_post( $zerif_newsection_subtitle ).'</div>';
          elseif ( isset( $wp_customize ) ): 
          echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
          endif;
        ?>
    </div>
    <div class="row">
            <?php
            if ( is_active_sidebar( 'new-section-sidebar' ) ) :
                dynamic_sidebar( 'new-section-sidebar' );
            else:
            echo 'Añada algunos widgets aquí.';
            endif;
            ?>
    </div>
</div> <!-- / END CONTAINER -->
</section>  <!-- / END NUEVA SECCION -->