<?php
/* 
Template Name: reportgeneration
*/

get_header();

$temphrd = do_shortcode( '[reportsystem_shortcode]' );
echo $temphrd;
get_footer();
 

?>