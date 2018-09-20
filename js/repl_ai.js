/*
  シナリオ対話
  
  前提1:Repl-AIのサイト(https://repl-ai.jp)でボットとシナリオを登録していること
  (以下では、bot名(bot_id)は、"maru",シナリオ(topic_id)は"hello"として事前に登録している。)
  (helloのシナリオは、「こんにちは」というユーザ入力に対して、「こんにちは」と応答する)

  前提2:Repl-AIのサイトからapi_keyを払い出している
  
  __api_keyに払い題したkeyを登録する。
  
*/

var request = require('request');
var moment = require('moment')

var maru_bot = {};

(function(){
    var __URL_REGIST__ = "https://api.repl-ai.jp/v1/registration"
    var __URL_DIALOGUE__ = "https://api.repl-ai.jp/v1/dialogue"

    var __BOT_ID__ = "maru"
    
    var __api_key = "";
    var __user_id = null;

    
    var __HEADERS__ = {
	"Content-Type" : "application/json",
	"x-api-key" : __api_key
    }
    
    maru_bot.regist = function(cb) {
	var post_body = {
	    "botId" : __BOT_ID__
	}
	post(__URL_REGIST__,post_body,function(res) {
	    try {
		var user_id = res.appUserId
		__user_id = user_id
		cb(user_id)
	    }
	    catch(e) {
		cb(null)
	    }
	})
    }

    maru_bot.talk = function(utt,init_flg,topic_id,cb) {
	var post_body  = { 
	    "appUserId": __user_id,  
	    "botId": __BOT_ID__,
	    "voiceText": utt, 
	    "initTalkingFlag": init_flg,  
	    "initTopicId": topic_id, 
	    "appRecvTime": moment().format("YYYY-MM-DD HH:mm:ss"), 
	    "appSendTime": moment().format("YYYY-MM-DD HH:mm:ss")
	}
	post(__URL_DIALOGUE__,post_body, function(res) {
	    cb(res)
	})
    }

    function post(url,post_body,cb) {
		var options = {
			url: url,
			method: 'POST',
			headers: __HEADERS__,
			json: true,
			body : post_body
		}

		request(options, function (error, response, body) {
			cb(body)
		})
	}
})();

if (require.main === module) {
    maru_bot.regist(function(user_id) {
	console.log("user_id is",user_id)

	maru_bot.talk("こんにちは",false,"hello",function(res) {
	    console.log("response is",res);
	})
    })
}
