<?php

    function json_safe_encode($data){
        return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    }

    function send_post_bot($url,$post_body){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, 'https://api.repl-ai.jp/v1/dialogue');
        curl_exec($ch);
        curl_close($ch);
    }

    
    $maru_bot ={};

    function send_user_comment($text,$flag,$t_id){
        
        $URL_REGIST = "https://api.repl-ai.jp/v1/registration";
        $URL_DIALOGUE = "https://api.repl-ai.jp/v1/dialogue";
    
        $BOT_ID = "maru";
        
        $api_key = "y7UMyeqwDpxXxmXH3BbHohujHHwsamT33ZZoQbbR";
        $user_id = null;

        $headers = {'Content-Type'=>'application/json','x-api-key'=>$api_key};
        $headers_json = json_safe_encode($headers);

        $maru_bot['botId'] = $BOT_ID;

        $post_body  = { 
            'appUserId'=>$user_id,  
            'botId'=>$BOT_ID,
            'voiceText'=>$text, 
            'initTalkingFlag'=>$flag,  
            'initTopicId'=>$t_id, 
            'appRecvTime'=>date("Y/m/d H:i:s"), 
            'appSendTime'=>date("Y/m/d H:i:s")
        };

        send_post_bot($URL_DIALOGUE,$post_body);

    }
?>