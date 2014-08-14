<?php
// 加载主题的各种外置文件 css  js
function cimy_uef_register_init_css() {
if ( !is_admin()) {
	
	   wp_deregister_script('jquery');
	   wp_register_script( 'jquery', get_template_directory_uri() ."/js/jquery.min.js", false);
	   wp_enqueue_script('jquery');
	   
	  
      
	   wp_deregister_script('script');
	   wp_register_script( 'script',get_template_directory_uri() . '/js/Pageaction.js',false, '', true );
	   wp_enqueue_script('script');
	    // 加载  lazyload
	   wp_deregister_script('lazyload');
	   wp_register_script( 'lazyload', get_template_directory_uri() ."/js/jquery.lazyload.js");
	   wp_enqueue_script('lazyload');
	   // 加载  lazyload
	   if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 6.0")){
	   wp_deregister_script('png');
	   wp_register_script( 'png', get_template_directory_uri() ."/png/pngtm.js");
	   wp_enqueue_script('png');
	   }else if(strpos($_SERVER["HTTP_USER_AGENT"],"MSIE 7.0")){
	   wp_deregister_script('png');
	   wp_register_script( 'png', get_template_directory_uri() ."/png/pngtm.js");
	   wp_enqueue_script('png');
          }
	    // 判断如果是ie6或者ie7 加载 png修复
	   wp_deregister_style('pages');
	   wp_register_style( 'pages', get_template_directory_uri() ."/css/ie.css");
	   wp_enqueue_style('pages');
	    // 加载 pages.css
	    wp_deregister_style('stylesheet');
	   wp_register_style( 'stylesheet', get_template_directory_uri() ."/style.css");
	   wp_enqueue_style('stylesheet');
	    // 加载style.css
		 
     
	
	   

	}	

	
	}

add_action('wp_print_styles', 'cimy_uef_register_init_css');




	?>