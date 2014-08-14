		<div id="footer">
              
              <div class="foot"> 
            
			
            
            <div class="foot2">
            <h1>联系方式</h1>
            
            <div class="f mail">
             <?php if (get_option('mytheme_mail')!=""): ?>

   <a  title="发送邮件" href="Mailto:<?php echo get_option('mytheme_mail'); ?>"><?php echo get_option('mytheme_mail'); ?></a>
      
       <?php else : ?>
       
   <a  title="发送邮件" href="#">123@123.com</a>
       
         <?php endif; ?>  
          
            
            
            </div>
            <div class="f tel" title="联系电话">
           
           <?php if (get_option('mytheme_tell')!=""): ?>

   <a  title="联系电话" ><?php echo get_option('mytheme_tell'); ?></a>
      
       <?php else : ?>
       
   <a>021475-8254</a>
       
         <?php endif; ?>  
          
           
            
            </div>
            <div class="f_bq"> 
            <p>© <?php echo date("Y"); echo " "; bloginfo('name'); ?>  All Rigts Reserved.</p> 
            <p><a href="http://www.themepdsadasark.com.cn" target="_blank" class="banquan">技园</a></p>
            </div>
         
            </div> 
            
           
		     </div>
             
              <div class="flink">
              <h4>友情链接：</h4>
                     <?php wp_list_bookmarks('&title_li='); ?> 
                  
              </div>
             
        </div>

<div style="display:none"><?php echo stripslashes(get_option('mytheme_analytics')); ?></div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>
  
    <script type="text/javascript" id="bdshare_js" data="type=tools&amp;uid=875647" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
  <script type="text/javascript">
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000)
</script>
</html>
