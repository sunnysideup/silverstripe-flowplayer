<?php

/**
  *@author nicolaas [at] sunnysideup.co.nz
  **/

class FlowPlayer extends File {

	protected static $swf_file = "flowplayer/thirdparty/flowplayer-3.2.5.swf";
		static function set_swf_file($v) {self::$swf_file = $v;}
		static function get_swf_file() {return self::$swf_file;}

	protected static $flow_player_config_file = "flowplayer/javascript/FlowPlayerConfig.js";
		static function set_flow_player_config_file($v) {self::$flow_player_config_file = $v;}
		static function get_flow_player_config_file() {return self::$flow_player_config_file;}

	function AbsoluteLink($IDString = "FlowPlayer"){
		Requirements::javascript("flowplayer/thirdparty/flowplayer-3.2.4.min.js");
		Requirements::javascript(self::get_flow_player_config_file());
		Requirements::customScript('$f("'.$IDString.'", "'.self::get_swf_file().'", FlowPlayerConfig);', "FlowPlayerSWF");
		Requirements::themedCSS("FlowPlayer");
		return $this->getAbsoluteURL();
	}



}
