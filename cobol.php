<?php
/* 
Plugin Name: Cobol Press Disable Admin Bar
Plugin URI: http://cobolpress.com/plugins/cobol-press-admin-bar/
Description: A Cobol Press Plugin for Disabling the Admin Bar
Author: Cobol Press
Version: 1.2 
Author URI: http://cobolpress.com 
*/ 

/*
    Copyright 2012  Cobol Press  (email : support@cobolpress.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/  
function admin_bar_admin_styles(){
    wp_register_style('cobol_remove_admin_bar', plugins_url() . '/cobol-press-disable-admin-bar/' . 'cobol.css');
    wp_enqueue_style('cobol_remove_admin_bar');
}    
remove_action('init', '_wp_admin_bar_init');
// Fallback for the frontend, also removes the padding/margin on the frontend
show_admin_bar(false);
add_filter('admin_head', 'admin_bar_admin_styles');
