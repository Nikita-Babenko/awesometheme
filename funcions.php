<?php
function awesome_script_enqueue() {
    wp_enqueue_style('customstyle-css',get_templte_directory_uri().'/css/awesome.css',array(),'1.0.0','all' );
    wp_enqueue_script('customjs',get_templte_directory_uri().'/js/awesome.css',array(),'1.0.0',true);
}
add_action('wp_enqueue_scrirs','awesome_script_enqueue');