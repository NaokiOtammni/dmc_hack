function analysis(text){
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
        "sentence":text,  // 投稿内容，つまりDBのコメントが入るわけだ
        "info_filter":"form",
        "pos_filter":"名詞"
    }

    var options = {
        url: 'https://api.apigw.smt.docomo.ne.jp/' + url_path + "?APIKEY=" +  api_key,
        method: 'POST',
        headers: headers,
        json: true,
        body : post_body
    }

    var json;

    request(options, function (error, response, body) {
       json = JSON.stringify(body,null," ");
    });

    return json;
}