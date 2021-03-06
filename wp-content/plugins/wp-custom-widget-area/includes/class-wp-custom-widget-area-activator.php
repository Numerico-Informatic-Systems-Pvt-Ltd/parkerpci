<?php

/**
 * Fired during plugin activation
 *
 * @link       http://example.com
 * @since      1.0.2
 *
 * @package    Custom_Widget_Area
 * @subpackage Custom_Widget_Area/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.2
 * @package    Custom_Widget_Area
 * @subpackage Custom_Widget_Area/includes
 * @author     Your Name <email@example.com>
 */
class Custom_Widget_Area_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.2
	 */
	public static function activate() {

		self::install_db();

	}

	private function install_db(){
		global $wpdb;
		$kz_db_version = '1.0';
		$table_name = $wpdb->prefix . 'cwa';
		$charset_collate = '';

		if ( ! empty( $wpdb->charset ) ) {
		  $charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset}";
		}

		if ( ! empty( $wpdb->collate ) ) {
		  $charset_collate .= " COLLATE {$wpdb->collate}";
		}

		$sql = "CREATE TABLE $table_name (
			id mediumint(9) NOT NULL AUTO_INCREMENT,
			cwa_name tinytext NOT NULL,
			cwa_description text NOT NULL,
			cwa_id varchar(100) NOT NULL ,
			cwa_widget_class text ,
			cwa_widget_wrapper varchar(25),
			cwa_widget_header_class text,
			cwa_widget_header_wrapper varchar(25),
			last_updated date NOT NULL,
			UNIQUE KEY id (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		dbDelta( $sql );

		add_option( 'kz_db_version', $kz_db_version );
	}

}
