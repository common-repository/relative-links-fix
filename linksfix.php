<?php
/*
Plugin Name: Relative Links Fix
Plugin URI: http://khaotica.com/2009/12/relative-links-fix-wordpress.html 
Description: Corrects Firefox behavior in which pasting formatted content converts absolute URLs to relative URLs.
Version: 1.3
Author: Joshua Hill
Author URI: http://khaotica.com
*/

/*  Copyright 2009 Joshua Hill (email: joshua.d.hill@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Set up class to reserve namespace
if (!class_exists("relativeLinksFix")) {
        class relativeLinksFix {
                function relativeLinksFix($content = '') {
                $siteurl = get_option('siteurl');
                $content = str_replace('href=\"../', 'href="http://' . $siteurl . '/', $content);
                $content = str_replace('src=\"../', 'src="http://' . $siteurl . '/', $content);
		return $content;
                }
        }
}

// Insantiate class
if (class_exists("relativeLinksFix")) {
        $relativeLinksFix = new relativeLinksFix();
}

// Actions and Filters
if (isset($relativeLinksFix)) {
        // Grabs post content before saving to database and runs function
        add_filter('content_save_pre', array(&$relativeLinksFix, 'relativeLinksFix'));
}
?>
