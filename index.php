<?php
session_start();
        include 'ChromePhp.php';
        if(empty($_SESSION["USERID"])){
                print 'dame';
                exit;
        }
?>
<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width,user-scalable=no,maximum-scale=1" name="viewport">
    <!-- フロント側CSS -->
    <link rel="stylesheet" href="fukidasi.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			  crossorigin="anonymous"></script>
		
    <title>ここにサービスタイトル</title>
 </head>
<body>
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
                     $userid=$_SESSION["USERID"];
                    if((!empty($_POST['chaat']))){
                    	$quer= "SELECT id from comment_data";
                    	$flag = $db_key->query($quer);
                        //print $flg_json;

                    	foreach( $flag as $value ) 
                    	{		
                    		$lds=$value[id];
                    	}      
                    	$lds=$lds+1;
                   	$Ids=(int)$Ids;
			$quer = "insert into comment_data (id, name, comment, time, user_id) values (?,?,?,?,?)";
			$stmt = $db_key->prepare($quer);
                        $flag1 = $stmt->execute(array($lds, $userid, $_POST['chaat'], date('Y/m/d'), 1));
                    	if($flag1){
                    		//echo '投稿完了しました';
                    	}else{
                    		echo '投稿NG';
                    	}
                    	$quer= "SELECT name, comment, time from comment_data ";
                    	$flag = $db_key->query($quer);
                    	$jsonn=$flag->fetchAll(PDO::FETCH_ASSOC);
                    	$flg_json = json_encode($jsonn,JSON_UNESCAPED_UNICODE);
                    	 header("Location: {$_SERVER['REQUEST_URI']}");
                    } else {
                    	$quer= "SELECT name, comment, time from comment_data ";
                    	$flag = $db_key->query($quer);
                    	 $i=0;
                    	$jsonn=$flag->fetchAll(PDO::FETCH_ASSOC);
                    	$flg_json = json_encode($jsonn,JSON_UNESCAPED_UNICODE); 
                    	//echo $flg_json;
                   }
}catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                        }

?>
    <section class="page">
        <section class="icon">  
            <div class="kaiwa">
                <figure class="kaiwa-img-left">
                    <img src="img/user.PNG" alt="no-img2">
                    <figcaption class="kaiwa-img-description">
                    </figcaption>
                </figure>
                <div class="kaiwa-text-right">
                    <p class="kaiwa-text">
                        おはよー
                    </p>
                </div>
            </div>
        </section>

    <section class="talkView">
        <div id="kaiwa">
        </div>
        <script type="text/javascript">
var js_array = JSON.parse('<?php echo $flg_json; ?>');
var my_name = '<?php echo $userid; ?>';

console.log(my_name);
for (var i=0; i<js_array.length; i++){
        if(js_array[i].name == my_name){
                $("#kaiwa").append(' <div class="kaiwa-text-left"> <div class="kaiwa-text">ユーザ名:'+js_array[i].name+'<br>コメント:'+js_array[i].comment+'<br>日付:'+js_array[i].time+'</div></div><br>');
        }else{
                $("#kaiwa").append(' <div class="kaiwa-text-right"> <div class="kaiwa-text">ユーザ名:'+js_array[i].name+'<br>コメント:'+js_array[i].comment+'<br>日付:'+js_array[i].time+'</div></div><br>');
        }
}
</script>
        </div>
        </div>
    </section>


        <section class="talk" id="footer">
            <form class="pure-form" method="post" action="index.php">   
                <fieldset>
                    <div class="pure-u-20-24">
                        <input name="chaat" style="width: 100%;" type="text" placeholder="悩みを話す">
                    </div>
                    <div class="pure-u-2-24">
                        <button name="sending" type="submit" class="pure-button pure-button-primary " style="margin: 0px;" onclick="talkPost()">話す</button>
                    </div>
                </fieldset>
            </form>
        </section>     

</section>



</body>
</html>