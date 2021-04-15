<?php 

//include
require get_template_directory().'/include/setup.php';


//hook

add_action("wp_enqueue_scripts", "bs_theme_styles");
add_action("after_setup_theme", "bs_after_setup");


?>