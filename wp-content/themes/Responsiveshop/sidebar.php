<div id="sidebar">

    <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    <?php   include_once("Gadgets/search.php"); ?>
      <?php   include_once("Gadgets/rss.php"); ?>
      <?php   include_once("Gadgets/code.php"); ?>
    
    
	<?php endif; ?>

</div>