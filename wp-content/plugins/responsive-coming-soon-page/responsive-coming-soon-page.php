<?php/** * Plugin Name:       Responsive Coming Soon Page * Description:       Site is under development then use this plugin to display a coming soon page to your visitors. * Version: 		  1.1.2 * Text Domain: 	  weblizar * Domain Path: 	  /languages * Author: 			  Weblizar * Author URI:        http://weblizar.com/plugins/responsive-coming-soon-page/ * Plugin URI:        http://weblizar.com/plugins/responsive-coming-soon-page/ * License:           GPL-2.0+ * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt * Copyright 2016  Weblizar (email : lizarweb@gmail.com, twitter : @weblizar) *//** * Default Constants */define( 'RCSM_SHORTNAME', 'rcsm_weblizar' ); // Used to reference namespace functions.define( 'RCSM_SLUG', 'responsive-coming-soon-page/responsive-coming-soon-page.php' ); // Used for settings link.define( 'RCSM_TEXT_DOMAIN', 'RCSM_TEXT_DOMAIN' ); // Your text domaindefine( 'RCSM_PLUGIN_NAME', __( 'Responsive Coming Soon Page', 'RCSM_TEXT_DOMAIN' ) ); // Plugin Name shows up on the admin settings screen.define( 'RCSM_VERSION', '1.0.7'); // Plugin Version Numberdefine( 'RCSM_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );define( 'RCSM_PLUGIN_URL', plugin_dir_url( __FILE__ ) ); define( 'RCSM_DBROWNAME', 'weblizar_rcsm_options' );include 'options/option-panel.php';include 'options/default-options.php'; add_action('plugins_loaded', 'rcsm_Language_Translater');function rcsm_Language_Translater() {	load_plugin_textdomain(RCSM_TEXT_DOMAIN, FALSE, dirname( plugin_basename(__FILE__)).'/languages' );}/** * Function to create table for subscriber */function rcsm_callback_plugin_subscriber() {	global $wpdb;	$table_name = $wpdb->prefix . 'rcsm_subscribers';	$charset_collate = $wpdb->get_charset_collate();	$sql = "CREATE TABLE IF NOT EXISTS $table_name (	id int NOT NULL AUTO_INCREMENT,	f_name VARCHAR(255) NOT NULL,	l_name VARCHAR(255) NOT NULL,	email VARCHAR(255) NOT NULL,	date timestamp,	act_code VARCHAR(255) NOT NULL,	extra_detail text,	flag int,	UNIQUE KEY id (id)	) $charset_collate;";	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );	dbDelta( $sql );}register_activation_hook( __FILE__,'rcsm_callback_plugin_subscriber');/** * Function to redirect to maintenance mode page  */function rcsm_maintenance_mode_template_redirect() {	if ( isset( $_GET['act_code'] ) ) {		global $wpdb; // this is how you get access to the database		$code = $_GET['act_code'];		$email = $_GET['email'];		$table_name = $wpdb->prefix . 'rcsm_subscribers';		$update_table = $wpdb->update( $table_name, array( 'flag' => 1 ), array( 'email' => $email ) );		if ( $update_table ) {			wp_redirect( home_url() );			exit;		} else {			wp_redirect( home_url() );			exit;		}	} else {		include_once( 'options/include/redirect.php' );	}}add_action( 'template_redirect','rcsm_maintenance_mode_template_redirect');function weblizar_rcsm_activation(){	$weblizar_rcsm_default_settings = weblizar_rcsm_default_settings();	$weblizar_rcsm_saved_theme_settings = get_option('weblizar_rcsm_options'); // get existing option data 			if($weblizar_rcsm_saved_theme_settings) {		$weblizar_rcsm_saved_theme_settings = array_merge($weblizar_rcsm_default_settings, $weblizar_rcsm_saved_theme_settings);		update_option('weblizar_rcsm_options', $weblizar_rcsm_saved_theme_settings);	// Set existing and new option data				} else {		add_option('weblizar_rcsm_options', $weblizar_rcsm_default_settings);  // set New option data 	}}register_activation_hook( __FILE__,'weblizar_rcsm_activation');// Do redirect when Plugin activatefunction rcsm_nht_plugin_activate() {	add_option('rcsm_nht_plugin_do_activation_redirect', true);}function rcsm_nht_plugin_redirect() {	if (get_option('rcsm_nht_plugin_do_activation_redirect', false)) {		delete_option('rcsm_nht_plugin_do_activation_redirect');		if(!isset($_GET['activate-multi'])) { 			wp_redirect("admin.php?page=rcsm-weblizar");		}	}}register_activation_hook(__FILE__, 'rcsm_nht_plugin_activate');add_action('admin_init', 'rcsm_nht_plugin_redirect');?>