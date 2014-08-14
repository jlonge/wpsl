<?php 
$new_meta_boxes =
array(
    "价格" => array(
        "name" => "价格",
        "std" => "",
        "title" => "价格:"),
		
		
  
    "促销" => array(
        "name" => "促销",
        "std" => "",
        "title" => "促销"),
		
    "购买地址" => array(
        "name" => "购买地址",
        "std" => "",
        "title" => "购买地址"),
		
		 "小编推荐" => array(
        "name" => "小编推荐",
        "std" => "",
        "title" => "小编推荐"),
		
		
		
		
);



function new_meta_boxes() {
    global $post, $new_meta_boxes;
  
    foreach($new_meta_boxes as $meta_box) {
        $meta_box_value = get_post_meta($post->ID, $meta_box['name'], true);
  
        if($meta_box_value == "")
            $meta_box_value = $meta_box['std'];
  
        echo'<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
  
        // 自定义字段标题
        echo'<h4>'.$meta_box['title'].'</h4>';
  
        // 自定义字段输入框
        echo '<textarea cols="100" rows="2" name="'.$meta_box['name'].'">'.$meta_box_value.'</textarea><br />';
    }
}

function create_meta_box() {
    global $theme_name;
  
    if ( function_exists('add_meta_box') ) {
        add_meta_box( 'new-meta-boxes', '自定义模块', 'new_meta_boxes', 'post', 'normal', 'high' );
    }
}

function save_postdata( $post_id ) {
    global $post, $new_meta_boxes;
  
    foreach($new_meta_boxes as $meta_box) {
        if ( !wp_verify_nonce( $_POST[$meta_box['name'].'_noncename'], plugin_basename(__FILE__) ))  {
            return $post_id;
        }
  
        if ( 'page' == $_POST['post_type'] ) {
            if ( !current_user_can( 'edit_page', $post_id ))
                return $post_id;
        }
        else {
            if ( !current_user_can( 'edit_post', $post_id ))
                return $post_id;
        }
  
        $data = $_POST[$meta_box['name']];
  
        if(get_post_meta($post_id, $meta_box['name']) == "")
            add_post_meta($post_id, $meta_box['name'], $data, true);
        elseif($data != get_post_meta($post_id, $meta_box['name'], true))
            update_post_meta($post_id, $meta_box['name'], $data);
        elseif($data == "")
            delete_post_meta($post_id, $meta_box['name'], get_post_meta($post_id, $meta_box['name'], true));
    }
}
add_action('admin_menu', 'create_meta_box');
add_action('save_post', 'save_postdata');

?>
