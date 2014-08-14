<?php get_header(); ?>


<div class="pages">
    <div class="shadow2"> </div>
    <div class="page-a">
        
     <div class="page_chao"></div>   
     <div class="page_fl"><h1>标签分类</h1>
     <div class="tagit"> <?php wp_tag_cloud('unit=px&smallest=12&largest=12&order=ASC&format=flat'); ?></div>
     <div class="page_fenge"></div>
     <div class="fenleinav"><?php wp_nav_menu(array( 'theme_location' => 'blog-menu' ) ); ?></div>
     </div>



<div class="recommend2">
           <ul class="recom-list2" id="content">
      <?php $posts = get_posts( "category=$cat->term_id&numberposts=12&orderby=rand" ); ?>
<?php if( $posts ) : ?>     
<?php foreach( $posts as $post ) : setup_postdata( $post ); ?>

             <li class="post" title="<?php the_title(); ?>">
             <?php if(get_post_meta($post->ID, "价格",true)):   ?> 
              <p class="jiagef"><?php echo get_post_meta($post->ID, "价格",true);?></p>
             <?php else : ?>
             <?php  endif; ?>
                 
    <div id="post_hover">
      
      <div class="goumm">
        <a target="_blank" href="<?php echo get_post_meta($post->ID, "购买地址",true);?>" class="goubuy">点击购买</a>
        <a  target="_blank"  href="<?php the_permalink() ?>" class="gosee">详细说明</a>
      </div>
       <div class="touxiangsda">  
         <?php if(get_option('mytheme_touxiang')):   ?> 
            <img src="<?php echo get_option('mytheme_touxiang'); ?>" alt="小编推荐" />  
        <?php else : ?>
       <?php echo get_avatar( get_the_author_email(), 50 ); ?>  
       <?php  endif; ?>
       </div>
       <p><?php if(get_post_meta($post->ID, "小编推荐",true)):   ?> 
       小编推荐 ： 
       <?php echo get_post_meta($post->ID, "小编推荐",true);?>
       <?php else : ?>
     <a class="kas" href="<?php the_permalink() ?>"> 小编推荐 ：好的没话说哦！ 非常推荐的!</a>
      <?php  endif; ?>
 
 </p>


             </div>
              <a class="tu_post" href="<?php the_permalink() ?>">
			  
			    <?php if ( has_post_thumbnail()):?>
<?php the_post_thumbnail(); ?>

  <?php else : ?>
  <img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>" />
  <?php  endif; ?>
              
              </a> 
               <h1><a class="jj" href="<?php the_permalink() ?>"><?php echo mb_strimwidth(get_the_title(), 0, 50,"...") ?></a></h1>
            
             </li>

       <?php endforeach; ?>
    
    <?php else : ?>
               
      <?php endif; ?>       
   </ul>
   
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
