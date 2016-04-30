<?php
class SpNewController{

    function actionIntro(){
        return "新的SpeedPHP框架-更快速，更易用，更科学！
1.支撑超大型php项目及极其丰富开发经验沉淀的php框架。
2.核心代码不到500行，简约易学但功能强大，速度飞快。
3.易于使用的伪静态路由规则，构造各种各样的地址。
4.大部分的约定配置，更专注于业务功能。
5.约定优于配置，这也是目前最优雅的设计方式。
6.适应PHP5.2以上版本的语法，调试模式打开STRICT语法要求，代码更健壮。
7.支持modules多应用开发架构。
8.新开发的模板引擎支持Smarty日常全部语法，还有布局、自动输出等方便功能。
9.默认支持MySQL多库访问、读写分离、分页，按需连接使得数据库更轻更快。
10.强安全策略，自动防止跨站脚本，防止SQL注入攻击等。
-->><a href='https://github.com/SpeedPHP/manual/blob/master/%E6%A6%82%E8%BF%B0-%E7%89%B9%E8%89%B2.md'>详细介绍</a><<--";
    }

    function actionBook(){
        return "还是易学、易用的手册，还是那个一两天就能学会的SP框架，<a href='https://github.com/SpeedPHP/manual/blob/master/README.md'>来看看</a>新版手册吧。";
    }

    function actionCode(){
        return "<a href='https://github.com/SpeedPHP/speed/blob/master/protected/lib/speed.php'>点击查看</a>新版框架speed.php文件源码，很容易理解、很简练又功能强大的代码，值得一看哦！";
    }
    function actionChangelog(){
        return "<a href='https://github.com/SpeedPHP/speed/commits/master'>点击查看</a>新版框架最近更新纪录。";
    }
}
