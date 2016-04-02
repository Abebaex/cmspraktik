<?php 
 register_nav_menus( array('menu_header'=>'Menu Header') );
 
 //widget sidebar
 function custom_widgets_init() {
	 register_sidebar( array( 'name' => 'Sidebar',
	 							'id' => 'sidebar-1',
								'description'   => 'Tambahhkan widget disini.',
								'before_widget' => '<div class="widget %2$s">',
								'after_widget'  => '</div>',
								'before_title'  => '<h3 class="widget-title">',
								'after_title'   => '</h3>',
					));
 }
add_action( 'widgets_init', 'custom_widgets_init' );
?>