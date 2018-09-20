<?php

function kaiseki($text){
    $url_path       = 'gooLanguageAnalysis/v1/morph';
    $api_key        = '69325262324162726268303565662e48507863507776684b2f332e7435736b7a686a59524c576a306e7439';
    $request_id     = 'record001';
    $info_filter    = 'form';
    $pos_filter     = '名詞';
        
    $res = simplexml_load_file('https://api.apigw.smt.docomo.ne.jp/'.$url_path.'?APIKEY='.$api_key.'&method=POST&headers=Content-Type:application/json&json=true&sentence='.$text.'&info_filter='.'&request_id='.$request_id.'&info_filter='.$info_filter.'&pos_filter='.$pos_filter);

    $status = $res->status;

    if($status=='OK'){
        var_dump($res->result);
    }
}

kaiseki('私は，今日地下鉄の3両目に乗ったが，めっちゃ空いてた．ラッキー！');
?>