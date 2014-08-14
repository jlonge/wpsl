<?php get_header(); ?>


<div class="pages">
    <div class="shadow2"> </div>
    <div class="page-a">
        
      <div class="page_chao"></div>   
     <div class="page_fl"><b>标签分类</b>
      <div class="tagit"> <?php wp_tag_cloud('unit=px&smallest=12&largest=12&order=ASC&format=flat'); ?></div>
     <div class="page_fenge"> </div>
     
     
     <div class="fenleinav">
      <?php wp_nav_menu(array( 'theme_location' => 'blog-menu' ) ); ?>
     
     </div>
     
     
     </div>
     


<div class="recommend2">
           <div class="single_enter" >
           
           <div class="single_tit">
           
           <?php if (have_posts()) : while (have_posts()) : the_post(); ?>    
         
       <?php  if(has_shortcode( $post->post_content, 'gallery' )==true): ?>
       <SCRIPT src="<?php bloginfo('template_url'); ?>/js/base.js" type=text/javascript></SCRIPT>
<?php
$img_id = get_post_thumbnail_id( $post->ID, 'gallery-thumb' ); 
$img_url = wp_get_attachment_image_src($img_id);
$img_url = $img_url[0];

?>
             <div class="single_img ddmc">
             
			  <div id=preview>
	<div class=jqzoom id=spec-n1 ><IMG height=350 src="<?php echo $img_url; ?>" jqimg="<?php echo $img_url; ?>" width=350></div>
	<div id=spec-n5>
		<div class=control id=spec-left>
			<img src="<?php bloginfo('template_url'); ?>/images/left.gif" />
		</div>
		<div id=spec-list>
        
 <?php  
   
$post_content = $post->post_content;
preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
$array_id = $ids;

foreach($array_id  as $array_id ){

}
 
 echo do_shortcode("[gallery ids=". $array_id ."]"); 
 
 ?>
                        
		</div>
		<div class=control id=spec-right>
			<img src="<?php bloginfo('template_url'); ?>/images/right.gif" />
		</div>
		
    </div>
</div>
              
    <SCRIPT type=text/javascript>
	$(function(){			
	   $(".jqzoom").jqueryzoom({
			xzoom:400,
			yzoom:400,
			offset:10,
			
			preload:1,
			lens:1
		});
		$("#spec-list").jdMarquee({
			deriction:"left",
			width:350,
			height:56,
			step:2,
			speed:4,
			delay:10,
			control:true,
			_front:"#spec-right",
			_back:"#spec-left"
		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});				
	})
	</SCRIPT>

<SCRIPT src="<?php bloginfo('template_url'); ?>/js/lib.js" type=text/javascript></SCRIPT>
<SCRIPT src="<?php bloginfo('template_url'); ?>/js/163css.js" type=text/javascript></SCRIPT>
                             
         </div>
         
          <?php elseif ( has_post_thumbnail()):?>
		 <div class="single_img">
         
                         <div class="bigpiccc">
          <?php the_post_thumbnail('gallery-thumb'); ?>
                         </div>
          <?php the_post_thumbnail('medium'); ?>
                         </div>
         <?php else : ?>
         
                     <div class="single_img ddmc"> 
                    <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" />
                     </div>
         <?php  endif; ?>
         
         <div class="single_title">
         <b><?php the_title(); ?></b>
         
           <?php if(get_post_meta($post->ID, "促销",true)):   ?> 
              
               <p >原价：<a style=" text-decoration: line-through; color: #999;"><?php echo get_post_meta($post->ID, "价格",true);?></a><strong class="cuxiao"> 促销特惠：</strong><strong style=" color:#F60"><?php echo get_post_meta($post->ID, "促销",true);?></strong></p>
             <?php elseif(get_post_meta($post->ID, "价格",true)) : ?>
             <p ><strong class="jjjg">售价：<?php echo get_post_meta($post->ID, "价格",true);?></strong></p>
              <?php else : ?>
             <?php  endif; ?>
         
         
         
         <p class="timesc">发表时间： <?php echo my_entry_published_link(); ?></p>
         <p>商品属性：</p><?php echo the_category(); ?>
         <p class="tagesss"><?php the_tags( '标签: ', ', ', ''); ?></p>
         
         <div class="btnbb">
         <?php if(get_post_meta($post->ID, "购买地址",true)):   ?> 
           <a class="buyit"  rel="nofollow" title="前往购买<?php the_title(); ?>" target="_blank" href=" <?php echo get_post_meta($post->ID, "购买地址",true);?>"></a>
             <?php else : ?>
              <a class="buyit" title="暂无购买地址" ></a>
               <?php  endif; ?>
           <a class="shoucang" title="点击收藏" onclick="AddFavorite(window.location,document.title)" href="javascript:void(0)"></a>
         
         </div>
         
         </div>
        
     
        
          
           </div>
      <div class="entrt">
        
          <?php the_content(); ?>
            <br />
                 <br />
                 <p>本文链接地址：<a href="<?php the_permalink() ?>"><?php the_permalink() ?></a> 转载请保留此地址</p>
                 <br />
            
        <!-- JiaThis Button BEGIN -->
<div id="ckepop">
	<span class="jiathis_txt">分享到：</span>
	<a class="jiathis_button_tools_1"></a>
	<a class="jiathis_button_tools_2"></a>
	<a class="jiathis_button_tools_3"></a>
	<a class="jiathis_button_tools_4"></a>
	<a href="http://www.jiathis.com/share" class="jiathis jiathis_txt jiathis_separator jtico jtico_jiathis" target="_blank">更多</a>
	<a class="jiathis_counter_style"></a>
</div>
<script type="text/javascript" src="http://v3.jiathis.com/code/jia.js?uid=1344266415981850" charset="utf-8"></script>
<!-- JiaThis Button END -->
        </div>
      
         <div class="praenav">    
<div class="alignleft"><p><?php if (get_next_post()) { next_post_link('上一篇: %link','%title',true);} else { echo "没有了，已经是最新文章";} ?></p>  </div>
<div class="alignright"><p><?php if (get_previous_post()) { previous_post_link('下一篇: %link','%title',true);} else { echo "没有了，已经是最后文章";} ?> </p>  </div>
</div>    
            <?php endwhile; ?>     
	        <?php else : ?>
            <?php  endif; ?>  
            
     <div class="liuyan">
     
<?php comments_template(); ?>
     </div>       
            
   </div>
   
   <div class="rightmain">
    <?php include_once("sidebar.php"); ?>
     <div title="下一页" class="sideba_next widget ">
     <?php next_posts_link(__('LOAD MORE')); ?>
     </div>
      <div class="sigokg hh1"><p>点击关闭</p></div>
    </div>
   <div class="sigokg hh2"> <p>点击打开小工具</p></div>
</div>

 

 <div id="pager">   <?php par_pagenavi(); ?>  </div>

</div>	
      
    </div>

<?php get_footer(); ?>
