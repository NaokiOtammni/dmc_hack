<?php

    require_once('./kaiseki.php');
    
    $USER_ID='';
    $LAST_RCV_TIME ='';
    function json_safe_encode($data){
        return json_encode($data, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT);
        //return json_encode($data,)
    }

    function display($text,$flg){
        if($flg)return;
        $ary = kaiseki($text);
        if(Count($ary)==0){
            echo 'キーワード：NONE';
        }else{
            for($i=0;$i<Count($ary);$i++){
                if($i==0)echo 'キーワード：'.$ary[$i];
                else{
                    echo ','.$ary[$i];
                }
            }
        }
        echo "<br>";
    }

    function send_post($url,$a_key,$post_body){

        $header = array('Content-Type:application/json','x-api-key:'.$a_key);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER,$header );
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res,TRUE);
    }
    
    function send_user_comment($text,$flag,$usr_id,$lt){
        $URL_REGIST     = 'https://api.repl-ai.jp/v1/registration';
        $URL_DIALOGUE   = 'https://api.repl-ai.jp/v1/dialogue';

        $api_key    = 'y7UMyeqwDpxXxmXH3BbHohujHHwsamT33ZZoQbbR';
        $BOT_ID     = 'b4mgwa14brokkay';
        $topic_id   = 's4mgwbccnugmco1';

        if($flag === TRUE  || empty($usr_id)){
            $post_body0 = array('botId'=>$BOT_ID);
            $body_json0 = json_safe_encode($post_body0);
            $res0 = send_post($URL_REGIST,$api_key,$body_json0);
            $usr_id = $res0['appUserId'];
        }else{
            //echo "Foo!!<br>";
        }
        
        //var_dump($usr_id);
        $post_body1  = array( 
            'appUserId'=>$usr_id,  
            'botId'=>$BOT_ID,
            'voiceText'=>$text, 
            'initTalkingFlag'=>$flag,  
            'initTopicId'=>$topic_id, 
            'appRecvTime'=>$_SESSION['lt'],//($flag===TRUE)?date("Y/m/d H:i:s"):$lt, 
            'appSendTime'=>date("Y-m-d H:i:s")
        );
        //var_dump($post_body1['appRecvTime']);
        $body_json1 = json_safe_encode($post_body1);
        echo $text."<br>";
        //display($text);
        $r = send_post($URL_DIALOGUE,$api_key,$body_json1)+array('appUserId'=>$usr_id,'last_rcv_time'=>$post_body1['appRecvTime']);
        echo $r['systemText']['expression']."<br>";
        return $r;
    }

    session_start();
    
    $_SESSION['lt'] = date("Y-m-d H:i:s");
    display('init',TRUE);
    $response = send_user_comment('init',TRUE,'','');
    //echo $response['appUserId']."<br>";
    //echo $response['last_rcv_time']."<br>";
    $response = send_user_comment('明松です',FALSE,$response['appUserId'],$response['last_rcv_time']);
    display('明松です',FALSE);
    $response = send_user_comment('もうだめだ',FALSE,$response['appUserId'],$response['last_rcv_time']);
    display('もうだめだ',FALSE);    
?>