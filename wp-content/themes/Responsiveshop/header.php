<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	 <meta name="keywords" content="
    <?php
    // 如果是首页和文章列表页面
	
	if(is_front_page() || is_home()) { 
	echo get_option('mytheme_keywords');
 
	// 如果是文章详细页面和独立页面
		} else if( is_page()) {
        if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
		echo get_option('mytheme_keywords');
		}
 
	} else if(is_single()) {
	
 if(get_post_meta($post->ID, "关键字",true)){
		echo get_post_meta($post->ID, "关键字",true);}
		else{
		echo get_option('mytheme_keywords');
		}
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {

	echo get_option('mytheme_keywords');
	
 
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo get_option('mytheme_keywords');
 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo get_option('mytheme_keywords');
 
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo get_option('mytheme_keywords');
 
	// 其他页面显示博客标题
	} else {
		echo get_option('mytheme_keywords');
	}
?>
    
    
    
    
    
    " />
 
<meta name="description" content="

<?php
	

		
 // 如果是首页和文章列表页面
	if(is_front_page() || is_home()) { 
	echo get_option('mytheme_description');
 
	// 如果是文章详细页面和独立页面
	}
 else if(is_page() ) {
		if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	// 如果是类目页面, 显示类目表述
	} 
	 else if(is_single() ) {
		 if(get_post_meta($post->ID, "描述",true)){
		echo get_post_meta($post->ID, "描述",true);}
		else{
			echo  substr(strip_tags($post->post_content), 0, 420);
		}
	
	// 如果是类目页面, 显示类目表述
	} else if(is_category()) {
		echo   get_option('mytheme_description');
	// 如果是搜索页面, 显示搜索表述
	} else if(is_search()) {
		echo   get_option('mytheme_description'); 
	// 如果是标签页面, 显示标签表述
	} else if(is_tag()) {
		echo   get_option('mytheme_description');
	// 如果是日期页面, 显示日期范围描述
	} else if(is_date()) {
	echo   get_option('mytheme_description');
	// 其他页面显示博客标题
	} else {
		echo   get_option('mytheme_description');
	}
?>




" />
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("找到标签  &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo '  - '; }
		      elseif (is_search()) {
		         echo '找到信息 &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo '没有找到您的信息 - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged;echo ' - '; bloginfo('description'); }
		   ?>
          
	</title>
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
    <script type="text/javascript">
 DD_belatedPNG.fix('div, ul, img, li, input , a, h3');

$(function() {
$("img.wp-post-image").lazyload({
	placeholder : "<? bloginfo('template_url'); ?>/images/nopicsr.gif", 
effect : "fadeIn"
}); 
});

</script>


	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>



<div class="xf"><!--外层div-->
   <ul><!--外层ul-->
        <!--回到顶部模块-->
       <li ><b title="回到顶部"><a class="xfffa" href='#top' title="回到顶部"></a></b></li><!--设置回到顶部按钮图片，图片可以在css的背景图片设置好-->
       <!--回到顶部模块结束-->
<!---------------------------------------------------------------------->
       <li class="box2"><!--客服模块-->
            <span>
                <!--客服外层按钮-->
                 <a class="xfffa" id="btnShow" title="客服"> </a>
                 
                <!--客服弹开-->
                <ul class="text" id="divTop"  style="display:none">
                     <!--qq客服-->
                     <li><a target="blank" href="http://wpa.qq.com/msgrd?V=1&Uin=<?php echo get_option('mytheme_qq'); ?>&Site=themepark售前客服&Menu=yes"><img border="0" src="<?php bloginfo('template_url'); ?>/images/qq.gif"  alt="点击这里给我发消息" align="absmiddle"><?php echo get_option('mytheme_qqn'); ?></a></li> <!--这里的href可以填写客服QQ的弹出代码-->
                   <li><a target="blank" href="http://wpa.qq.com/msgrd?V=1&Uin=<?php echo get_option('mytheme_qq1'); ?>&Site=themepark售前客服&Menu=yes"><img border="0" src="<?php bloginfo('template_url'); ?>/images/qq.gif"  alt="点击这里给我发消息" align="absmiddle"><?php echo get_option('mytheme_qqn1'); ?></a></li> <!--这里的href可以填写客服QQ的弹出代码--> 
                    <li><a target="blank" href="http://wpa.qq.com/msgrd?V=1&Uin=<?php echo get_option('mytheme_qq2'); ?>&Site=themepark售前客服&Menu=yes"><img border="0" src="<?php bloginfo('template_url'); ?>/images/qq.gif"  alt="点击这里给我发消息" align="absmiddle"><?php echo get_option('mytheme_qqn2'); ?></a></li> <!--这里的href可以填写客服QQ的弹出代码-->
                      <!--qq客服-->
                     <li><h4>TELL:<?php echo get_option('mytheme_tell'); ?></h4></li>    <!--联系电话-->
                     <li><a href= "mailto:<?php echo get_option('mytheme_mail'); ?>"> <?php echo get_option('mytheme_mail'); ?></a> </li> <!--联系邮箱-->
                 
            
                </ul>
               <!--客服弹开结束-->
             </span>
       </li><!--客服模块结束-->
 <!---------------------------------------------------------------------->
      <!--微博展示模块-->
      <li class="box2">
          <span>
            <a class="xfffa"  id="btnShow2" title="微博"></a> <!--微博展示外层按钮-->
                <!--微博展示弹出模块-->
                <ul class="text" id="divTop2"  style="display:none">
                    <!--调用微博组件（详情请见相关文章）-->
                   <?php echo stripslashes(get_option('mytheme_weibo'));  ?>
                 <!--调用微博组件（详情请见相关文章）-->

                </ul>
                <!--微博展示弹出模块结束-->
           </span>
     </li>
     <!--微博展示模块结束-->

<!---------------------------------------------------------------------->
      <!--收藏模块-->
      <li > <b title="添加到收藏夹"><a class="xfffa" onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)"> </a></b></li>
      <!--收藏模块结束-->

<!---------------------------------------------------------------------->
      <li>
          <!-- Baidu Button BEGIN --><!--百度分享-->
          <div id="bdshare" class="bdshare_t bds_tools_32 get-codes-bdshare">
          <a id="shareCount" class="shareCount"></a>
          </div>
          <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=875647" ></script>
          <script type="text/javascript" id="bdshell_js"></script>
          <script type="text/javascript">
          document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
          </script>
          <!-- Baidu Button END -->
      </li>


<!---------------------------------------------------------------------->
</ul>
</div>



	
	<div id="page-wrap">

		<div id="header">
        <div class="header_in">
			<h1 class="logo" title="<?php bloginfo('name'); ?>"><a href="<?php echo get_option('home'); ?>/">
            <?php if (get_option('mytheme_logo')!=""): ?>

 <img src="<?php echo get_option('mytheme_logo'); ?>"alt="<?php bloginfo('name'); ?>" /> 
      
       <?php else : ?>
       
 <img src="<?php bloginfo('template_url'); ?>/images/logo.png"alt="<?php bloginfo('name'); ?> "/>
       
         <?php endif; ?>  
         
            </a></h1>
			
            <div id="navigation">
             <?php wp_nav_menu(array( 'theme_location' => 'header-menu' ) ); ?>
            <div class="navkg2">收起导航；︿ </div>
            </div>
       <div class="navkg"> 打开导航﹀</div>
            
            
            
          
          
        </div>
       <div class="shadow"></div> 
		</div>
        <div></div>
        
        
      <?php if (get_option('mytheme_ad_img')!=""): ?>

  <div class="ad"  style=" background:url(<?php echo get_option('mytheme_ad_img'); ?>)">
      
       <?php else : ?>
       
  <div class="ad">
       
         <?php endif; ?> 
 
     <div class="ad-text">
     
     
      <?php if (get_option('mytheme_ad_title')!=""): ?>

  <h2><?php echo get_option('mytheme_ad_title'); ?></h1>
      
       <?php else : ?>
       
  <b>YOUR SLOGAN HERE</b>
       
         <?php endif; ?> 
      
      
            <?php if (get_option('mytheme_ad_text')!=""): ?>

  <p><?php echo get_option('mytheme_ad_text'); ?></p>
      
       <?php else : ?>
       
 <p>增强版格子商铺，可使用淘宝客插件，直接调取淘宝信息</p>
       
         <?php endif; ?>
      
     </div>
 
</div>
<div></div>