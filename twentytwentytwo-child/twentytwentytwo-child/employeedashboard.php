<?php
/* 
Template Name: employeedashboard
*/

get_header();

$tempemployee = do_shortcode( '[employee_shortcode]' );
echo $tempemployee;
get_footer();
 

?>