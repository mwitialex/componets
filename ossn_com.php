<?php
/**
 *    OpenSource-SocialNetwork
 *
 * 
 * @author    alex
 * @copyright 2015
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */




function ossn_tv_init() {
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


function ossn_tv_pages($pages) {

 if (!ossn_isLoggedin()) {
            ossn_error_page();
   }
$title = ossn_print('com:ossn:severload');
   $contents['content'] = ossn_view('components/tv/pages/severload');
   $content = ossn_set_page_layout('contents', $contents);
   echo ossn_view_page($title, $content);
}

ossn_register_callback('ossn', 'init', 'severload');
