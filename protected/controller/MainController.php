<?php
class MainController extends BaseController {
	// 主接收信息入口
	function actionIndex(){
		$postStr = file_get_contents("php://input");
		if (!empty($postStr)){
			libxml_disable_entity_loader(true);
			$postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
			$this->fromUsername = $postObj->FromUserName;
			$this->toUsername = $postObj->ToUserName;
			$keyword = trim($postObj->Content);

			$command = "help";
			if(!empty($keyword)){
				$tmp_command = $this->findCommand($keyword);
				if($tmp_command != false){
					$command = $tmp_command;
				}
			}
			$c = ucfirst($this->commands[$command][0])."Controller";
			$a = "action".ucfirst($this->commands[$command][1]);
			$obj = new $c();
			$this->contents = $obj->$a($keyword, $this->commands);
		}else{
	        if(!empty($_GET["echostr"]) && $this->checkSignature()){
	        	echo $_GET["echostr"];
	        }
			exit;
		}
	}

	var $commands = array(
		"new"  => array("spNew", "intro", "新版介绍"),
		"book" => array("spNew", "book", "新版手册"),
		"code" => array("spNew", "code", "新版框架源码"),
		"log"  => array("spNew", "changelog", "新版更新日志"),

		"intro"  => array("sp31", "intro", "3.1版介绍"),
		"book31" => array("sp31", "book", "3.1版手册"),
		"smarty" => array("sp31", "smarty", "Smarty手册"),

		"case"  => array("web", "case", "案例展示"),
		"git"   => array("web", "git", "Github库"),
		"weibo" => array("web", "weibo", "微博"),
		"web"   => array("web", "website", "官网地址"),

		"help"  => array("web", "help", "指令帮助"),
		"so"    => array("web", "so", "输入“so 关键字”搜索网站内容"),
	);

	private function findCommand($keyword){
		foreach($this->commands as $key => $val){
			if(0 === stripos($keyword, $key)){
				return $key;
			}
		}
		return false;
	}

	private function checkSignature() {
        if (!defined("TOKEN")) {
            throw new Exception('TOKEN is not defined!');
        }

        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

		$token = TOKEN;
		$tmpArr = array($token, $timestamp, $nonce);
        // use SORT_STRING rule
		sort($tmpArr, SORT_STRING);
		$tmpStr = implode( $tmpArr );
		$tmpStr = sha1( $tmpStr );

		if( $tmpStr == $signature ){
			return true;
		}else{
			return false;
		}
	}
}
