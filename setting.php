<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "oAtFHNdqhSTGraW1d98UD6DtZlz2xXUc9ybFdlv6ZNhe+WrsQwDTISTme8caAy8l1IrA+eU+OnoWlVZv9r+djKeOCtJVNn5WjSmg7JDdFAs/PTxo64Ls08cn9QdM5q0+KmLKUXdjoQQWhKyFgoA4UQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "aba8aa9fce68a00549264e0c34ed9f9c";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}