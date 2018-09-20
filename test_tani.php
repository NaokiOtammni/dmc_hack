<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width,user-scalable=no,maximum-scale=1" name="viewport">

    <title>チャットあｄ</title>
 </head>
 会話<br>

<form method="post" action="test_tani.php">
名前 <input type="text" name="naame">
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
                     
                    if((!empty($_POST['chaat'])) && (!empty($_POST['naame']))){
                    	$quer= "SELECT id from comment_data";
                    	$flag = $db_key->query($quer);
                    	foreach( $flag as $value ) 
                    	{		
                    		$lds=$value[id];
                    	}      
                    	$lds=$lds+1;
                   	print $lds;
                   	$Ids=(int)$Ids;
			$quer = "insert into comment_data (id, name, comment, time, user_id) values (?,?,?,?,?)";
			$stmt = $db_key->prepare($quer);
                                $flag1 = $stmt->execute(array($lds, $_POST['chaat'], $_POST['naame'],  date('Y/m/d'), 1));
        
                    	if($flag1){
                    		echo '投稿完了しました';
                    	}else{
                    		echo '投稿NG';
                    	}
                    } else {
                    	$quer= "SELECT * from comment_data ";
                    	$flag = $db_key->query($quer);
                    	foreach( $flag as $value ) 
                    	{		
                    		print "$value[name],$value[comment],$value[time]<br>";
                   	}      

                   }
}catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                        }

?>

</body>