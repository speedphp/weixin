<?php
// 由于不算真正的控制器，所以并没有继承Controller
class WebController{

    function actionHelp($keyword = null, $commands){
        $text = "欢迎关注SpeedPHP框架公众号，快速获取SP框架相关资源，可发送以下指令：";
        foreach($commands as $key => $val){
            $text .= "\n$key  {$val[2]}";
		}
        return $text;
    }
    function actionSo($keyword){
        $word = str_ireplace("so ", "", $keyword);
        return "点击这里<a href='http://so.speedphp.com/cse/search?s=13444787622549663322&q={$word}&partner=discuz'>搜索“{$word}”</a>";
    }
    function actionCase() {
        return "从08年至今有数以万计的程序基于SP框架基础上进行开发，本站收集了部分网友<a href='http://www.speedphp.com/thread-3881-1-8.html'>投稿案例</a>，感谢这些朋友们的支持！";
    }
    function actionGit(){
        return "SP框架目前托管在Github上，请访问<a href='https://github.com/SpeedPHP'>https://github.com/SpeedPHP</a>，来fo一下吧！";
    }
    function actionWeibo(){
        return "SP框架微博地址：<a href='http://weibo.com/speedphp'>http://weibo.com/speedphp</a>，欢迎关注！";
    }
    function actionWebsite(){
        return "点击进入SP框架官网：<a href='http://www.speedphp.com'>http://www.speedphp.com</a>";
    }
}
