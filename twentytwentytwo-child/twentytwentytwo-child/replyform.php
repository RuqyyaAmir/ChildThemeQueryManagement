<?php
/* 
Template Name: replyform
*/
?>
<?php
get_header();

$tempreply = do_shortcode( '[replyform_shortcode]' );
echo $tempreply;

get_footer();
 
?>