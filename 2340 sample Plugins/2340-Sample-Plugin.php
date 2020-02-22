<?php
/*
Plugin Name: 2340 Sample Plugin
Plugin URI: https://faculty.mccneb.edu/grosas/
Description: A sample plugin for INFO 2340.
Version: 1.0
Author: Guillermo J. Rosas
Author URI: https://faculty.mccneb.edu/grosas
License: GPL

Jacobi Williams
assignment10
INFO2340.WW
Prof.Thoendel 
02/22/20
*/

add_shortcode("wittyquote","get_quote");

function get_quote($atts) {
    $quotes = array (
"To infinity and beyond",
"Buzz, You are just a toy!",
"'Neo': I know Karate.. 'Morphis': Show me.. ",
"Hakunah matta ta, what a wonderful phrase",
"It's a simple choice Red pill or blue pill"
    );

return $quotes[array_rand($quotes)];

}

?>