<?php
/**
 * Plugin Name: Relative Replace
 * Description: Plugin lets users put use a particular string in post content to generate the correct link.
 * Version: 0.1
 * Author: Bryce Campbell
 * Author URI: http://brycecampbell.me
 */

 // function that goes through a post's content and replaces '{{site}}' with the site address.
function filter_post_content_out($content) {

    // allow usage of the word 'site' in braces to be used to get links to work properly on different servers
    $content = str_replace('{{site}}', home_url(), $content);

    // return the content, with replacements made.
    return $content;
}

// add filter
add_filter('the_content', 'filter_post_content_out');