<?php

/*
Plugin Name: Keyring Pocket Importer
Plugin URI: http://roccotripaldi.com
Description: Imports your data from Pocket ( getpocket.com )
Version: 1.0.0
Author: Rocco Tripaldi
Author URI: http://roccotripaldi.com/
License: GPL2
Depends: Keyring, Keyring Social Importers
*/

require dirname( __FILE__ ) . "/pocket-service.php";

function keyring_pocket_enable_importer( $importers ) {
	$importers[] = plugin_dir_path( __FILE__ ) . 'pocket-importer.php';

	return $importers;
}

add_filter( 'keyring_importers', 'keyring_pocket_enable_importer' );
