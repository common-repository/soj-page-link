<?php
/*
Plugin Name: SoJ Page Link
Description: Link a page to an external site
Version: 1.0
Author: Jeff Johnson
Author URI: http://journalism.indiana.edu/about-us/faculty-staff/bio/?person=84
*/

/**
 * Allow pages to redirect
 *
 * @param {string} $link The WP generated link
 * @param {number} $id The page ID
 */
function soj_filter_page_link($link='', $id=FALSE)
{
	if($tmp=get_post_meta($id, 'link to', TRUE))
			return $tmp;
	return $link;
}
if(function_exists('add_filter'))
	add_filter('page_link','soj_filter_page_link',10,2);
?>