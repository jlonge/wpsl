<?php
/*添加主题选项*/
add_action('admin_menu', 'mytheme_page');
 
function mytheme_page (){
 
	if ( count($_POST) > 0 && isset($_POST['mytheme_settings']) ){
 
		$options = array (
		'keywords',
		'description',
		'analytics',
		
		'about_title',
		'about_cititle',
		
		'about_title1',
		'about_cititle1',
		
		'about_title2',
		'about_cititle2',
		
		'news_title',
		'news_cititle',
		
		'case_title',
		'case_cititle',
		
		'lx_title',
		'lx_cititle',
		
		'xianshi',

		'xiangce_bimg',
		'xiangce_img',
		'xiangce_url',
		'xiangce_tit',
		'xiangce_text',
		
		'about_img1',
		'about_url1',
		'about_tit1',
		'about_text1',
		
		'about_img2',
		'about_url2',
		'about_tit2',
		'about_text2',
		
		'about_img3',
		'about_url3',
		'about_tit3',
		'about_text3',
		
		'about_img4',
		'about_url4',
		'about_tit4',
		'about_text4',
		
		'about_img5',
		'about_url5',
		'about_tit5',
		'about_text5',
		
		'about_img6',
		'about_url6',
		'about_tit6',
		'about_entit6',
		'about_text6',
		
		'about_img7',
		'about_url7',
		'about_tit7',
	    'about_entit7',
		'about_text7',
		
		'about_img8',
		'about_url8',
		'about_tit8',
		 'about_entit8',
		'about_text8',
		
		'about_img9',
		'about_url9',
		'about_tit9',
		 'about_entit9',
		'about_text9',
		
		'about_img0',
		'about_url0',
		'about_tit0',
		 'about_entit0',
		'about_text0',
		
		'beian',
		'dizhi',
		'tell',
		'fax',
		'mail',
		'qq',
		'qq1',
		'qq2',
		'qqn',
		'qqn1',
		'qqn2',
		'weibo',
		
		
	
	   	
	     'ditu_tit',
		'ditu_cont',
		'ditu_zuob',
	
		'ditu_zuob3',
		
		'logo',
	
		'ad_img',
		'ad_title',
		'ad_text',
		'touxiang',
		'ico',
		
		);
 
		foreach ( $options as $opt ){
 
			delete_option ( 'mytheme_'.$opt, $_POST[$opt] );
 
			add_option ( 'mytheme_'.$opt, $_POST[$opt] );	
 
		}
 
	}
 
	add_theme_page(__('主题选项'), __('主题选项'), 'edit_themes', basename(__FILE__), 'mytheme_settings');
 
}
 //加载upload.js文件   
            
            //加载上传图片的js(wp自带)   
            wp_enqueue_script('thickbox');   
            //加载css(wp自带)   
            wp_enqueue_style('thickbox');  
 
function mytheme_settings(){?>
 
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/xuanxiang.css" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/upload.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script> 
     <script type="text/javascript">
// 收缩展开效果
$(document).ready(function(){

	$(".box h1").click(function(){
		$(this).next(".text").slideToggle("slow");
	})

	
});

$(document).ready(function(){

	$(".jiao_div h2").click(function(){
		$(this).nextAll("li").slideToggle("slow");
	})

	
});
</script>	
<div class="wrap">
   <?php   
	$ct = wp_get_theme();
$screenshot = $ct->get_screenshot();
$class = $screenshot ? 'has-screenshot' : '';

$customize_title = sprintf( __( 'Customize &#8220;%s&#8221;' ), $ct->display('Name') );
?>
<h2>主题选项</h2>
 <p>主题名称:：<?php echo $ct->display('Name'); ?><br/>
主题版本：<?php echo $ct->display('Version'); ?><br/>
本主题由web主题公园倾力打造的一款免费主题，感谢您使用web主题公园的主题，更多主题请访问：<a target="_blank" href="http://www.themepark.com.cn">http://www.themepark.com.cn</a><br/>
BUG提交，请进入web主题公园网站，在相关主题下留言即可，我们收到留言即将对bug进行评估并更新，感谢您的支持!<br />
希望你能喜欢。<br />
您在使用此主题遇到问题可以参见我们为主题所出的独立教程：<a target="_blank" href="http://www.themepark.com.cn/ztjcgzspwordpressztaz.html">主题教程：格子商铺wordpress主题安装 </a><br/>
主题更新日志请前往WEB主题公园官网相关主题介绍页面<a  target="_blank" href="http://www.themepark.com.cn/gzspwordpressztyg.html">《格子商铺wordpress主题》</a>
</p>
 
 <ul>
 <form method="post" action="">
 <li class="box"> <h1>首选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>LOGO的图片地址</strong></legend>
 
              
         
				<div class="up">
           <input type="text" size="80"  name="logo" id="logo" value="<?php echo get_option('mytheme_logo'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>        
    
    

 
				<em>请上传logo图片，图片格式为PNG（216像素 X45像素） logo主题为浅色最佳</em>
 
<legend><strong>上传头像图片，显示为下图红框位置</strong></legend>
 <div style="float:left;" class="up"><img src="<?php bloginfo('template_url'); ?>/images/30625162239.jpg"alt="<?php bloginfo('name'); ?> "/></div>
				<div class="up">
           <input type="text" size="80"  name="touxiang" id="touxiang" value="<?php echo get_option('mytheme_touxiang'); ?>"/>   
           <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>     
    
    	<em>请上传头像图片，头像将显示在小编推荐栏目，尺寸为50*50的正方形图片</em>   
        
        
        <legend><strong>上传ico文件 显示为下图红框位置</strong></legend>
                <img src="<?php bloginfo('template_url'); ?>/images/625161952.jpg"alt="<?php bloginfo('name'); ?> "/>
				<div class="up">
           <input type="text" size="80"  name="ico" id="ico" value="<?php echo get_option('mytheme_ico'); ?>"/>   
           <input type="button" name="upload_button" value="上传" id="upbottom"/>   
    </div>     
    
    	<em>上传ico文件,具体生成的ico的方法<a href="http://www.themepark.com.cn/ztjcgzspwordpressztaz.html">请见教程</a></em>   
 
	<legend><strong>公司联系方式（显示在首页和联系我们页面）</strong></legend>
 
              
        
       <legend><strong>电话</strong></legend>
				<textarea name="tell" id="tell" rows="1" cols="70"><?php echo get_option('mytheme_tell'); ?></textarea><br />
				<em>示例：0731-123123</em>
		       <legend><strong>电子邮件</strong></legend>
				<textarea name="mail" id="mail" rows="1" cols="70"><?php echo get_option('mytheme_mail'); ?></textarea><br />
 
				<em>示例：abc@163.com</em>
                
                
              <legend><strong>客服QQ,显示在悬浮小工具里面</strong></legend>      
       <legend><strong>客服QQ1</strong></legend>
				<textarea name="qq" id="qq" rows="1" cols="70"><?php echo get_option('mytheme_qq'); ?></textarea><br />
				<em>填写数字号码</em>
                <textarea name="qqn" id="qqn" rows="1" cols="70"><?php echo get_option('mytheme_qqn'); ?></textarea><br />
				<em>填写名称，如售前客服</em>
                
                 <legend><strong>客服QQ2</strong></legend>
				<textarea name="qq1" id="qq1" rows="1" cols="70"><?php echo get_option('mytheme_qq1'); ?></textarea><br />
				<em>填写数字号码</em>
                <textarea name="qqn1" id="qqn1" rows="1" cols="70"><?php echo get_option('mytheme_qqn1'); ?></textarea><br />
				<em>填写名称，如售前客服</em>
                
                
                <legend><strong>客服QQ3</strong></legend>
				<textarea name="qq2" id="qq2" rows="1" cols="70"><?php echo get_option('mytheme_qq2'); ?></textarea><br />
				<em>填写数字号码</em>
                <textarea name="qqn2" id="qqn2" rows="1" cols="70"><?php echo get_option('mytheme_qqn2'); ?></textarea><br />
				<em>填写名称，如售前客服</em>
		      
                
				

 <legend><strong>调用微博</strong></legend>
				<textarea name="weibo" id="weibo" rows="5" cols="70"><?php echo stripslashes(get_option('mytheme_weibo'));  ?></textarea><br />
				<em>填写数字号码</em>


     	

    

 
	</fieldset>

 <p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>


</div>
  	
</li>
 
  
 
 
 
 <li class="box"> <h1>SEO以及统计选项</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>SEO 代码添加</strong></legend>
 

 
				<textarea name="keywords" id="keywords" rows="1" cols="134"><?php echo get_option('mytheme_keywords'); ?></textarea><br />
 
				<em>网站关键词（Meta Keywords），中间用半角逗号隔开,如：主题公园，网站模板，wordpress主题</em>
 
		
				<textarea name="description" id="description" rows="3" cols="134"><?php echo get_option('mytheme_description'); ?></textarea>
 
				<em>网站描述（Meta Description），针对搜索引擎设置的网页描述，如：主题公园是专注于高端网站主题，高端网站模板的设计和制作...</em>
 
	
 
	</fieldset>
 
 
 
	<fieldset>
 
	<legend><strong>统计代码添加</strong></legend>
 
		
 
				<textarea name="analytics" id="analytics" rows="5" cols="134"><?php echo stripslashes(get_option('mytheme_analytics')); ?></textarea>
 

      	</fieldset>  
    
 


 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
</li>


<li class="box"> <h1>网站顶部图片以及广告语</h1>
 <div class="text" style="display:none">

 
	<fieldset>
 
	<legend><strong>广告图片</strong></legend>
 

 
 
 
 <div class="up">
           <input type="text" size="80"  name="ad_img" id="ad_img" value="<?php echo get_option('mytheme_ad_img'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div> 
 <em>由于图片是全屏的效果，图片请上传1920宽度的图片，高度228px，需要自己裁剪图片。</em>
				
 
					<legend><strong>广告标题</strong></legend>
 
		
					<textarea name="ad_title" id="ad_title" rows="1" cols="70"><?php echo get_option('mytheme_ad_title'); ?></textarea><br />
 
 
				<legend><strong>广告文字</strong></legend>
 
		<textarea name="ad_text" id="ad_text" rows="1" cols="70"><?php echo get_option('mytheme_ad_text'); ?></textarea><br />
 
 
	</fieldset>

 
	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>

</div>
</li>



<li class="box"> <h1>默认小工具</h1>
 <div class="text" style="display:none">

	<fieldset>

				
				

 <div style="margin-top:20px;">
 
 
 <div style="100%">
 <strong></strong>
    
	
<p> 
	
				
   
              </div>
<ul class="jiao_div">


 
  <li>
   <p>预览：</p>
   
		<a>二维码</a>	
        <div class="up">
           <input type="text" size="80"  name="about_text1" id="about_text1" value="<?php echo get_option('mytheme_about_text1'); ?>"/>   
            <input type="button" name="upload_button" value="上传" id="upbottom"/>   
                </div> 
            <a style=" color:#999">百度一下二维码生成器，生成图片上传即可，图片尺寸为：211*227[像素]</a>	
 </li>
 
 
 </ul>
 


  </div>
	</fieldset>
 
 
  	<p class="submit">
 
		<input type="submit" name="Submit" class="button-primary" value="保存设置" />
 
		<input type="hidden" name="mytheme_settings" value="save" style="display:none;" />
 
	</p>
 

    
 


 


</div>
</li>













</form>
</div>
</li>
 </ul>

</div>

 
<?php }
echo $after_widget;
/*添加主题选项over*/
?>