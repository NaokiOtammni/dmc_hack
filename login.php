<?php
 
ini_set("display_errors", On);
error_reporting(E_ALL);
session_start();
$error = "";

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
                        if (isset($_POST["auth"])) {
                        	$userid = $_POST['userid'];
                        	$quer= "SELECT * FROM user_profile WHERE user_id = ?";
                    	   $stmt = $db_key->prepare($quer);
                         $flag = $stmt->execute(array($userid));
                        $resultSet = $stmt->fetchAll();
                        $resultNum = count($resultSet);
                        if ($resultNum==0){
                                print "ユーザIDが間違っています。";
                                exit;
                        }else{
                    	        //print "aa";	
                    		session_regenerate_id(TRUE);
                    		$_SESSION["USERID"] = $_POST["userid"];
                    		header("Location:index.php");
                    		exit;
                    	}
                    }     
                }catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                        }

?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>投稿画面へログイン</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h2>投稿画面へログイン</h2>
				<div class="well">
			<form name="loginform" action="login.php" method="POST">
				<p><input placeholder="ユーザID" class="form-control" type="text" name="userid" value=""></p>
				<p><input class="btn btn-primary btn-lg btn-block" type="submit" name="auth" value="ログイン"></p>
			</form>
		</div>
	</div>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</body>
</html>