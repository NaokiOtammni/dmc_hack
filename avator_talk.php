<?php

    
    $maru_bot = [];

    function json_safe_encode($data){
        return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    }

    function send_post($url,$a_key,$post_body){

        $header = array('Content-Type:application/json','x-api-key:'.$a_key);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res,true);
    }
    
    function send_user_comment($text,$flag){
        $URL_REGIST     = 'https://api.repl-ai.jp/v1/registration';
        $URL_DIALOGUE   = 'https://api.repl-ai.jp/v1/dialogue';

        $api_key    = 'y7UMyeqwDpxXxmXH3BbHohujHHwsamT33ZZoQbbR';
        $BOT_ID     = 'b4mgwa14brokkay';
        $topic_id   = 's4mgwbccnugmco1';

        if($flag == true){
            $post_body0 = array('botId'=>$BOT_ID);
            $body_json0 = json_safe_encode($post_body0);
            $res0 = send_post($URL_REGIST,$api_key,$body_json0);
            $maru_bot['appUserId'] = $res0['appUserId'];
        }

        //echo($flag.'::'.$maru_bot['appUserId']."\n");
        
        $post_body1  = array( 
            'appUserId'=>$maru_bot['appUserId'],  
            'botId'=>$BOT_ID,
            'voiceText'=>$text, 
            'initTalkingFlag'=>$flag,  
            'initTopicId'=>$topic_id, 
            'appRecvTime'=>date("Y/m/d H:i:s"), 
            'appSendTime'=>date("Y/m/d H:i:s")
        );
        $body_json1 = json_safe_encode($post_body1);
        return send_post($URL_DIALOGUE,$api_key,$body_json1);
    }

    var_dump(send_user_comment('init',true));
    //send_user_comment('明松です',false);
?>