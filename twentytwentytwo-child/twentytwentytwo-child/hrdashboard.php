<?php
/* 
Template Name: hrdashboard
*/

get_header();

$temphrd = do_shortcode( '[hrdashboard_shortcode]' );
echo $temphrd;
get_footer();
 

?>