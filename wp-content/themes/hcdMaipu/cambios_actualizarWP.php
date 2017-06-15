<!Cambios a aplicar en el archivo wp-includes/theme.php - Linea 303-->

<?php
function get_template_directory() {
	$template = "hcdMaipu";
	$theme_root = get_theme_root( $template );
	$template_dir = "$theme_root/$template";

	/**
	 * Filters the current theme directory path.
	 *
	 * @since 1.5.0
	 *
	 * @param string $template_dir The URI of the current theme directory.
	 * @param string $template     Directory name of the current theme.
	 * @param string $theme_root   Absolute path to the themes directory.
	 */
	return apply_filters( 'template_directory', $template_dir, $template, $theme_root );
}

/**
 * Retrieve theme directory URI.
 *
 * @since 1.5.0
 *
 * @return string Template directory URI.
 */
function get_template_directory_uri() {
	$template = "hcdMaipu";
	$theme_root_uri = get_theme_root_uri( $template );
	$template_dir_uri = "$theme_root_uri/$template";

	/**
	 * Filters the current theme directory URI.
	 *
	 * @since 1.5.0
	 *
	 * @param string $template_dir_uri The URI of the current theme directory.
	 * @param string $template         Directory name of the current theme.
	 * @param string $theme_root_uri   The themes root URI.
	 */
	return apply_filters( 'template_directory_uri', $template_dir_uri, $template, $theme_root_uri );
}
?>




<!Cambios a aplicar en el archivo wp-content/themes/hcdMaipu/comments.php - Linea 1-->


<?php if ( post_password_required() ) : ?>
	<p><?php _e( 'This post is password protected. Enter the password to view any comments.', 'enigma' ); ?></p>
	<?php return; endif; ?>
    <?php if ( have_comments() ) : ?>
	<div class="enigma_comment_section">		
	<div class="enigma_comment_title"><h3><i class="fa fa-comments"></i><?php echo comments_number(__('No Comments','enigma'), __('1 Comment','enigma'), '% Comments'); ?></h3></div>
	<?php wp_list_comments( array( 'callback' => 'weblizar_comment' ) ); ?>		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'enigma' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'enigma' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'enigma' ) ); ?></div>
		</nav>
		<?php endif;  ?>
	</div>		
	<?php endif; ?>
<?php if ( comments_open() ) : ?>
	<div class="enigma_comment_form_section">
	<?php $fields=array(
		'author' => '<div class="enigma_form_group"><label for="exampleInputEmail1">'. __( 'Nombre','enigma').'<small>*</small></label><input name="author" id="name" type="text" id="exampleInputEmail1" class="enigma_con_input_control"></div>',
		'email' => '<div class="enigma_form_group"><label for="exampleInputPassword1">'. __( 'Email','enigma').'<small>*</small></label><input  name="email" id="email" type="text" class="enigma_con_input_control"></div>',
	);
	function my_fields($fields) { 
		return $fields;
	}
	add_filter('wl_comment_form_default_fields','my_fields');
		$defaults = array(
		'fields'=> apply_filters( 'wl_comment_form_default_fields', $fields ),
		'comment_field'=> '<div class="enigma_form_group"><label for="message"> Mensaje *</label>
		<textarea id="comment" name="comment" class="enigma_con_textarea_control" rows="5"></textarea></div>',		
		'logged_in_as' => '<p class="logged-in-as">' . __( "Inicio sesión como ",'enigma' ).'<a href="'. admin_url( 'profile.php' ).'">'.$user_identity.'</a>'. '<a href="'. wp_logout_url( get_permalink() ).'" title="Log out of this account">'.__(" Salir?",'enigma').'</a>' . '</p>',
		'title_reply_to' => __( 'Deje un comentario a %s','enigma'),
		'id_submit' => 'enigma_send_button',
		'label_submit'=>__( 'Publicar','enigma'),
		'comment_notes_before'=> '',
		'comment_notes_after'=>'',
		'title_reply'=> '<h2>'.__('Deje un comentario','enigma').'</h2>',		
		'role_form'=> 'form',		
		);
		comment_form($defaults); ?>		
		
</div>
<?php endif; // If registration required and not logged in ?>