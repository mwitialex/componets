<?php
/**
 *    OpenSource-SocialNetwork
 * 
 * @author    alex
 * @copyright 2015
 * @license   General Public Licence http://opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
 
require_once(ossn_route()->com . 'serverload/classes/serverload.php');

function severload_init() {
	ossn_register_page('severload', 'severpages');
	  if (ossn_isLoggedin()) {       
		
    	$icon = ossn_site_url('components/OssnPhotos/images/photos-ossn.png');
    	ossn_register_sections_menu('newsfeed', array(
        	'text' => ossn_print('com:ossn:severload'),
        	'url' => ossn_site_url('severload'),
        	 'icon' => $icon,
		 'section' => 'links'
	    	));		
    }
}

//page handler for serverpages component
function severpages($pages) {
  if (!ossn_isLoggedin()) {
            ossn_error_page();
   }
   $title = ossn_print('com:ossn:severload');
   //give a exact path to file <components/serverpages/pages/serverload>
   $contents['content'] = ossn_view('components/serverpages/pages/severload');
   $content = ossn_set_page_layout('contents', $contents);
   echo ossn_view_page($title, $content);
}
//initilize serverload component
ossn_register_callback('ossn', 'init', 'severload_init');
