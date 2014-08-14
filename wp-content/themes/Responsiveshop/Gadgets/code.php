   <div class="widget codesef">
      <?php if (get_option('mytheme_about_text1')!=""): ?>

     <img class="codes" src="<?php echo get_option('mytheme_about_text1'); ?>"alt="<?php bloginfo('name'); ?>" /> 
      
       <?php else : ?>
     <img class="codes" src="http://api.qrserver.com/v1/create-qr-code/?size=200×200&data=<?php echo get_option('home'); ?>" alt="QR: <?php bloginfo('name'); ?>"/>
         <?php endif; ?>  
  
     </div>