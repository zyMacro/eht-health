<?php
// include function files for this application
require_once('function_gather.php');
session_start();

// start output html
do_html_header('Health Form');

check_valid_user();
display_add_bm_form();

display_user_menu();
do_html_footer();

?>