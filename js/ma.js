/*
  言語解析(形態素解析)

  使い方: https://dev.smt.docomo.ne.jp/ から発行したapi_key を設定してください。
  
  詳しい説明は以下のページにあります。  
  https://dev.smt.docomo.ne.jp/?p=docs.api.page&api_name=language_analysis&p_name=api_reference#tag01
 */

var request = require('request');

var headers = {
    'Content-Type': 'application/json'
}

var url_path = "gooLanguageAnalysis/v1/morph"
var api_key = ""

var post_body = {
    "request_id":"record001",
    "sentence":"日本語を分析します。",
    "info_filter":"form"
}

var options = {
    url: 'https://api.apigw.smt.docomo.ne.jp/' + url_path + "?APIKEY=" +  api_key,
    method: 'POST',
    headers: headers,
    json: true,
    body : post_body
}

request(options, function (error, response, body) {
    console.log(JSON.stringify(body,null," "));
})
