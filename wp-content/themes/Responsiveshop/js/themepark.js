$(document).ready(function () {
 $(".f_bq").append('<p><a class='+"banquan"+ 'target='+"'_blank'"+'href="'+'http://www.themepark.com.cn"'+'>WEB主题公园设计制作</a></p>');
 $(".f_bq img").css("display","none");
 if($(".foot2 .f_bq").length==0) { $("body").remove();
 $("html").append('<p><a target='+"'_blank'"+'href="'+'http://www.themepark.com.cn"'+'>请勿删除版权信息！务必保留页脚css类.f_bq，方可显示正常。</a></p>');
 } 
 });