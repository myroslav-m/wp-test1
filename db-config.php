<?php
// phpcs:disable Squiz.PHP.CommentedOutCode.Found
/**
 * See https://github.com/Automattic/HyperDB/blob/trunk/db-config.php for more options
 * HyperDB configuration file
 *
 * This file should be installed at ABSPATH/db-config.php
 *
 * $wpdb is an instance of the hyperdb class which extends the wpdb class.
 *
 * See readme.txt for documentation.
 */

$wpdb->add_database( [
	'host'      => 'wordpress-mariadb-primary',
	'user'      => DB_USER,
	'password'  => DB_PASSWORD,
	'name'      => DB_NAME,
	'write'     => 1,
	'read'      => 1000,
] );

$wpdb->add_database( [
	'host'     => 'wordpress-mariadb-secondary',
	'user'     => DB_USER,
	'password' => DB_PASSWORD,
	'name'     => DB_NAME,
	'write'    => 0,
	'read'     => 1,
] );
