<?php
/* 
Template Name: queryform
*/

get_header();

$tempquery = do_shortcode( '[my_queryform_shortcode]' );
echo $tempquery;
get_footer();
 

?>



