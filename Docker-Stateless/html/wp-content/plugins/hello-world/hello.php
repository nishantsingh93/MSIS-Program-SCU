<?php
/*
Plugin Name: Hello-World
Plugin URI: http://yourdomain.com/
Description: A simple hello world wordpress plugin
Version: 1.0
Author: Nandini
Author URI: http://www.nrajeswaran.com
License: GPL
*/
/*This calls hello_world() function when Wordpress initializes*/
add_action('init','hello_world');
function hello_world()
{
 echo "Hello World!";
}
?>