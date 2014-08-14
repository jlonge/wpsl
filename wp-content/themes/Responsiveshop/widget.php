<?php 
//下载模块
class My_Widget extends WP_Widget {

	function My_Widget()
	{
		$widget_ops = array('description' => '独立样式的搜索');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget(false,$name='主题公园-搜索',$widget_ops,$control_ops);  

                //parent::直接使用父类中的方法
                //$name 这个小工具的名称,
                //$widget_ops 可以给小工具进行描述等等。
                //$control_ops 可以对小工具进行简单的样式定义等等。
	}

	function form($instance) { // 给小工具(widget) 添加表单内容
		$title = esc_attr($instance['title']);
	?>
	<p>主题公园-独立样式的搜索</p>

	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	  include_once("Gadgets/search.php")
        ?>
            

        <?php
	}
}
register_widget('My_Widget');
?>
<?php 
//搜索模块
class My_Widget1 extends WP_Widget {

	function My_Widget1()
	{
		$widget_ops = array('description' => '独立样式的分享');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget(false,$name='主题公园-订阅和分享',$widget_ops,$control_ops);  

                //parent::直接使用父类中的方法
                //$name 这个小工具的名称,
                //$widget_ops 可以给小工具进行描述等等。
                //$control_ops 可以对小工具进行简单的样式定义等等。
	}

	function form($instance) { // 给小工具(widget) 添加表单内容
		
	?>
	<p>独立样式的分享和rss</p>

	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	 include_once("Gadgets/rss.php");
        ?>
            

        <?php
	}
}
register_widget('My_Widget1');
?>
<?php 
//搜索模块
class My_Widget2 extends WP_Widget {

	function My_Widget2()
	{
		$widget_ops = array('description' => '二维码');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget(false,$name='自动生成二维码',$widget_ops,$control_ops);  

                //parent::直接使用父类中的方法
                //$name 这个小工具的名称,
                //$widget_ops 可以给小工具进行描述等等。
                //$control_ops 可以对小工具进行简单的样式定义等等。
	}

	function form($instance) { // 给小工具(widget) 添加表单内容
		
	?>
	<p>自动生成二维码，拖入自动生成</p>

	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	 include_once("Gadgets/code.php");
        ?>
            

        <?php
	}
}
register_widget('My_Widget2');
?>
<?php 
//搜索 产品自定义菜单 
class My_Widget3 extends WP_Widget {

	function My_Widget3()
	{
		$widget_ops = array('description' => '主题公园-酷狗音乐');
		$control_ops = array('width' => 200, 'height' => 300);
		parent::WP_Widget(false,$name='酷狗音乐',$widget_ops,$control_ops);  

                //parent::直接使用父类中的方法
                //$name 这个小工具的名称,
                //$widget_ops 可以给小工具进行描述等等。
                //$control_ops 可以对小工具进行简单的样式定义等等。
	}

	function form($instance) { // 给小工具(widget) 添加表单内容
		
	?>
	<p>如果你需要启用这个模块，您需要在主题选项中设置</p>

	<?php
    }
	function update($new_instance, $old_instance) { // 更新保存
		return $new_instance;
	}
	function widget($args, $instance) { // 输出显示在页面上
	 include_once("Gadgets/kugou.php");
        ?>
            

        <?php
	}
}
register_widget('My_Widget3');
?>
