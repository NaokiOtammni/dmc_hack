<?php

//JSON形式に変換する関数を定義
/*
function json_safe_encode($data){
    return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
}
*/

function kaiseki($text){
    $url_path       = 'gooLanguageAnalysis/v1/morph';
    $api_key        = '69325262324162726268303565662e48507863507776684b2f332e7435736b7a686a59524c576a306e7439';

    $request_id     = 'record001';
    $sentence       = $text;  // 投稿内容，つまりDBのコメントが入るわけだ
    $info_filter    = 'form';
    $pos_filter     = '名詞';

    $data = array('request_id'=>$request_id,'sentence'=>$sentence,'info_filter'=>$info_filter,'pos_filter'=>$pos_filter);

    $data_json = json_safe_encode($data);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_json);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_URL, 'https://api.apigw.smt.docomo.ne.jp/'.$url_path.'?APIKEY='.$api_key);
    $result=curl_exec($ch);
    curl_close($ch);
    $result = json_decode($result,true)['word_list'][0];

    $noums_array = [];
    for($i=0;$i<Count($result);$i++){
        $noums_array[$i] = $result[$i][0];
    }
    return $noums_array;
}
/*
if(empty($_POST){
    $post = json_decode($_POST,true);
    var_dump($post);
}
*/

//$ary = kaiseki('私は，今日地下鉄の3両目に乗ったが，めっちゃ空いてた．ラッキー！');
//echo($ary[0]);
?>