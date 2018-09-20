<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width,user-scalable=no,maximum-scale=1" name="viewport">
    <!-- フロント側CSS -->
    <link rel="stylesheet" href="fukidasi.css">
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">

    <title>ここにサービスタイトル</title>
 </head>
<body>
    <section class="page">
        <section class="icon">  
            <div class="kaiwa">
                <figure class="kaiwa-img-left">
                    <img src="img/user.PNG" alt="no-img2″>
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


        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        
        <div class="kaiwa-text-right">
            <p class="kaiwa-text">
                おはよー
            </p>
        </div>
        
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////2////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////////////
                </p>
            </div>
        </div>
        <div class="kaiwa"">
            <div class="kaiwa-text-left">
                <p class="kaiwa-text">
                    /////////チャットの内容////2////////
                </p>
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
                   	$Ids=(int)$Ids;
			$quer = "insert into comment_data (id, name, comment, time, user_id) values (?,?,?,?,?)";
			$stmt = $db_key->prepare($quer);
                                $flag1 = $stmt->execute(array($lds, $_POST['chaat'], $_POST['naame'],  date('Y/m/d'), 1));
        
                    	if($flag1){
                    		//echo '投稿完了しました';
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
</html>