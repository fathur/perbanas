<?php

/**
 * Get Meta ID from Meta Key
 * */
function perbanas_get_metaid_by_key( $post_id, $meta_key ) {
	global $wpdb;
	$mid = $wpdb->get_var( $wpdb->prepare("SELECT meta_id FROM $wpdb->postmeta WHERE post_id = %d AND meta_key = %s", $post_id, $meta_key) );
	if( $mid != '' )
		return intval($mid);

	return FALSE;
}
function perbanas_get_metaval_by_id( $meta_id ) {
	global $wpdb;
	$mval = $wpdb->get_row( "SELECT meta_value FROM $wpdb->postmeta WHERE meta_id = $meta_id" );
	if( $mval != '' )
		return $mval->meta_value;

	return false;
}
function perbanas_get_metaval_by_key( $meta_key ) {
	global $wpdb;
	$mid = $wpdb->get_col( $wpdb->prepare("SELECT DISTINCT(meta_value) AS tahun FROM $wpdb->postmeta WHERE meta_key = %s ORDER BY tahun ASC", $meta_key) );
	if( $mid != '' )
		return $mid;

	return FALSE;
}

/**
 * Fungsi ini hanya untuk post meta saja tidak yang lainnya
 * @param unknown $id
 */
function perbanas_get_postmeta_extension( $id ) {

	$fileloc 	= perbanas_get_metaval_by_id( $id );
	$ext 		= pathinfo($fileloc, PATHINFO_EXTENSION);
	return '.'.$ext;
}

function perbanas_get_postmeta_size( $id ) {
	$bytes = filesize(str_replace( get_option('siteurl').'/', ABSPATH, perbanas_get_metaval_by_id($id)));
	//$bytes = 10000;
	$precision = 2;

	$units = array('B', 'KB', 'MB', 'GB', 'TB');

	$bytes = max($bytes, 0);
	$pow = floor(($bytes ? log($bytes) : 0) / log(1024));
	$pow = min($pow, count($units) - 1);

	// Uncomment one of the following alternatives
	$bytes /= pow(1024, $pow);
	// $bytes /= (1 << (10 * $pow));

	return round($bytes, $precision) . ' ' . $units[$pow];
}