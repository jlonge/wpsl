<div class="sideba_player widget">
         <div class="player">
         <?php if (get_option('mytheme_about_text1')!=""): ?>

 <?php echo stripslashes(get_option('mytheme_about_tit1')); ?></textarea>
      
       <?php else : ?>
       
  <embed src='http://cloud.kugou.com/multiPlayer/37033.swf' AllowScriptAccess='always' id='KugouPlayer' FlashVars='' quality='high' width='231' height='358' name='KugouPlayer' align='middle' type='application/x-shockwave-flash'  wmode='transparent' ></embed>
       
         <?php endif; ?>  
    	
     
        </div>
    	</div>