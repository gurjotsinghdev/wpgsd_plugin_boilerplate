<?php

add_shortcode( 'wpgsd-hello-world-show-time', 'wpgsd_plugin_name_show_time' );

function wpgsd_plugin_name_show_time () {
	return "Hello World!";
}