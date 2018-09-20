<?php

    function json_safe_encode($data){
        return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
    }

    function send_post($url,$header,$post_body){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        curl_close($ch);
        return $res;
    }

    $topic_id ='s4mgwbccnugmco1';

    function send_user_comment($text,$flag,$t_id){
        
        $URL_REGIST = "https://api.repl-ai.jp/v1/registration";
        $URL_DIALOGUE = "https://api.repl-ai.jp/v1/dialogue";
    
        $BOT_ID = 'b4mgwa14brokkay';
        
        $api_key = 'y7UMyeqwDpxXxmXH3BbHohujHHwsamT33ZZoQbbR';
        $user_id = null;

        $headers = array('Content-Type:application/json','x-api-key'=>$api_key);
        //$headers_json = json_safe_encode($headers);

        $post_body0 = array('botId'=>$BOT_ID);
        $res0 = send_post($URL_REGIST,$headers,$post_body0);
        
        var_dump($res0);

        $user_id = $res0['appUserId'];
        var_dump($user_id);

        $post_body1  = array( 
            'appUserId'=>$user_id,  
            'botId'=>$BOT_ID,
            'voiceText'=>$text, 
            'initTalkingFlag'=>$flag,  
            'initTopicId'=>$t_id, 
            'appRecvTime'=>date("Y/m/d H:i:s"), 
            'appSendTime'=>date("Y/m/d H:i:s")
        );
        //var_dump($post_body);
        send_post($URL_DIALOGUE,$headers,$post_body1);

    }

    //$r = 
    send_user_comment('init',true,$topic_id);
    //var_dump($r);
?>