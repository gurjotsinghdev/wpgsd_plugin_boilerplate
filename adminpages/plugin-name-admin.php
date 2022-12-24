<?php

function wpgsd_plugin_name_admin_menu() {
add_menu_page(
'plugin_name',
'Plugin_Name',
'manage_options',
'wpgsd_plugin_name_reports',
'wpgsd_plugin_name_reports_page'
);
}
add_action( 'admin_menu', 'wpgsd_plugin_name_admin_menu' );
// function to load admin page
function wpgsd_plugin_name_reports_page() {
    ?>
        <p class="title">Heyyy</p>
    <?php
}