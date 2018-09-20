<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width,user-scalable=no,maximum-scale=1" name="viewport">

    <title>チャットあｄ</title>
 </head>
 会話<br>

<form method="post" action="test_tani.php">
	テキスト <input type="text" name="chaat">
	<button name="sending" type="submit">送信</button>
</form>	
<?php
	 $db_ac = 'mysql:dbname=dcm1;host=localhost';
     $user_name = 'root';// onload="mapp1()"
     $pass = 'Zx2lh46j2tts';
    $url='../../ahaha.json';
 
 	try{
                    $db_key = new PDO($db_ac, $user_name, $pass);
                    
                    if ($db_key == null) {
                        print('接続に失敗しました。<br>');
                    }
                     $db_key->query('SET NAMES utf8');
                     $data=$_POST['chaat'];
                    if(isset($data)){
                    	echo 'a';
                    	$result = db_insert();
        
                    	if($result){
                    		echo '投稿完了しました';
                    	}else{
                    		echo '投稿NG';
                    	}
                    } else {
                    	echo 'なし';
                    }  
}catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                        }
                     function db_insert(){
                     		$quer = "insert into comment_data () values (?,?,?,?,?,?,?,?,?,?,?)";
			return true;
                    }  
                    function db_select_id_only(){
                    	$quer=
                    }
?>

</body>