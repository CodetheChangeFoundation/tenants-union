<?php
/**
 * Plugin Name: My First Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.0
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */

add_action( 'create_db_hook', 'my_plugin_create_db' );

do_action( 'insert_data_hook', '1838 Williams Rd',  );

function my_plugin_create_db() {

    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'eviction_notices';

    $sql = "CREATE TABLE $table_name (
    id mediumint(9) NOT NULL AUTO_INCREMENT,
    address varchar(50) NOT NULL,
    city varchar(30) NOT NULL,
    eviction_date DATE NOT NULL,
    submission_date DATE NOT NULL,
    reliability INT,
    flagged varchar(3), NOT NULL,
    PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}

function insert_data_db($address, $city, $eviction_date, $submission_date,
$reliability, $flagged) {

    global $wpdb;
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix . 'eviction_notices';
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

    $wpdb->insert( 
        $table_name, 
        array( 
            'address' => $address, 
            'city' => $city, 
            'eviction_date' => $eviction_data,
            'submission_date' => $submission_data,
            'reliability' => $reliability,
            'flagged' => $flagged
        )
    );
}