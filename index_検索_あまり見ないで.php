<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <meta content="width=device-width,user-scalable=no,maximum-scale=1" name="viewport">

    <title>交通ルールについて考えるサイト</title>
    <script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script><!--DOCTYPE<script src="サンプル.js" type="text/javascript"></script>-->
    <!--html<script src="map.js" type="text/javascript"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js" type="text/javascript"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js" type="text/javascript"></script>
    <script src="../../jquery.selectbox-0.2/js/jquery.selectbox-0.2.js" type="text/javascript"></script>
    <script src="../../groenroos-minimalect-d9c4d96/jquery.minimalect.js"></script>
    <script src="../javascripts/jquery.timepicker.min.js"></script>
    <script src="jisin/headfoot.js" type="text/javascript"></script>
    <script src="../../maps_tani.js" type="text/javascript"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/pepper-grinder/jquery-ui.css" rel="stylesheet" type="text/css">
    <link href="jisin/style.css" rel="stylesheet" type="text/css">
    <link href="../../../homepage1/info/css/style.css" rel="stylesheet" type="text/css">
    <link href="../../../homepage1/info/css/study.css" rel="stylesheet" type="text/css">
    <link href="../../groenroos-minimalect-d9c4d96/jquery.minimalect.css" media="screen" rel="stylesheet" type="text/css">
    <link href="../stylesheets/b.css" rel="stylesheet" type="text/css">
    <link href="../stylesheets/map.css" rel="stylesheet" type="text/css">
    <link href="../../jquery.selectbox-0.2/css/jquery.selectbox.css" rel="stylesheet" type="text/css">
    <link href="../stylesheets/jquery.timepicker.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../homepage1/info/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet">
    <link href="../../../homepage1/info/naver/jquery.fs.naver.css" rel="stylesheet" type="text/css">
    <script src="../../../homepage1/info/naver/jquery.fs.naver.js" type="text/javascript"></script>
    <script type="text/javascript">
$(function() {
    $("#navre").naver({
    maxWidth: "768px"
    });
    });
    </script>
</head>

<body onload="mapp1()">
    <script>
header()
    </script><br>

    <div id="box">
        <div class="wide-box">
            <div id="help-content">
                <p>このページでは、不審者の情報を表示します。</p>

                <p>使い方は、以上の「市町村」ボックスを選んで種類を選んで下さい！</p>

                <p>検索に成功すると以下のようになります！</p><img src="../map_img/aaa.png"><br>

                <p><a class="help-link" id="help-close">閉じる</a></p>
            </div>

            <div class="search_1">
                <form action="index.php" id="form1" method="get" name="form1">
                    <h2>検索メニュー（ここから選んで下さい）</h2>市町村 <select id="country_id" name="city_name" tabindex="1">
                        <optgroup label="市町村">
                            <option>
                                水戸市
                            </option>

                            <option>
                                宇都宮市
                            </option>

                            <option>
                                日立市
                            </option>

                            <option>
                                土浦市
                            </option>

                            <option>
                                古河市
                            </option>

                            <option>
                                石岡市
                            </option>

                            <option>
                                結城市
                            </option>

                            <option>
                                龍ケ崎市
                            </option>

                            <option>
                                下妻市
                            </option>

                            <option>
                                常総市
                            </option>

                            <option>
                                常陸太田市
                            </option>

                            <option>
                                高萩市
                            </option>

                            <option>
                                北茨城市
                            </option>

                            <option>
                                笠間市
                            </option>

                            <option>
                                取手市
                            </option>

                            <option>
                                牛久市
                            </option>

                            <option>
                                つくば市
                            </option>

                            <option>
                                ひたちなか市
                            </option>

                            <option>
                                鹿嶋市
                            </option>

                            <option>
                                潮来市
                            </option>

                            <option>
                                守谷市
                            </option>

                            <option>
                                常陸大宮市
                            </option>

                            <option>
                                那珂市
                            </option>

                            <option>
                                筑西市
                            </option>

                            <option>
                                坂東市
                            </option>

                            <option>
                                稲敷市
                            </option>

                            <option>
                                かすみがうら市
                            </option>

                            <option>
                                桜川市
                            </option>

                            <option>
                                神栖市
                            </option>

                            <option>
                                行方市
                            </option>

                            <option>
                                鉾田市
                            </option>

                            <option>
                                つくばみらい市
                            </option>

                            <option>
                                小美玉市
                            </option>

                            <option>
                                茨城町
                            </option>

                            <option>
                                大洗町
                            </option>

                            <option>
                                城里町
                            </option>

                            <option>
                                東海村
                            </option>

                            <option>
                                大子町
                            </option>

                            <option>
                                美浦村
                            </option>

                            <option>
                                阿見町
                            </option>

                            <option>
                                河内町
                            </option>

                            <option>
                                八千代町
                            </option>

                            <option>
                                五霞町
                            </option>

                            <option>
                                境町
                            </option>

                            <option>
                                利根町
                            </option>
                        </optgroup>
                    </select><br>
                    <!--年間
    <input type="checkbox" name="year[]" value="平成２７年">2015
    <input type="checkbox" name="year[]" value="平成２６年">2014<br>
    月間
    <input type="checkbox" name="month[]" value="平成２７年１２月">2015/12
    <input type="checkbox" name="month[]" value="平成２７年１１月">2015/11
    <input type="checkbox" name="month[]" value="平成２７年１０月">2015/10
    <input type="checkbox" name="month[]" value="平成２７年９月">2015/09
    <input type="checkbox" name="month[]" value="平成２７年８月">2015/09
    <input type="checkbox" name="month[]" value="平成２７年７月">2015/07
    <input type="checkbox" name="month[]" value="平成２７年６月">2015/06
    <input type="checkbox" name="month[]" value="平成２７年５月">2015/05
    <input type="checkbox" name="month[]" value="平成２７年４月">2015/04
    <input type="checkbox" name="month[]" value="平成２７年３月">2015/03
    <input type="checkbox" name="month[]" value="平成２７年２月">2015/02
    <input type="checkbox" name="month[]" value="平成２７年１月">2015/01
    <input type="checkbox" name="month[]" value="平成２６年１２月">2014/12
    <input type="checkbox" name="month[]" value="平成２６年１１月">2014/11
    <input type="checkbox" name="month[]" value="平成２６年１０月">2014/10
    <input type="checkbox" name="month[]" value="平成２６年９月">2014/09
    <input type="checkbox" name="month[]" value="平成２６年８月">2014/08
    <input type="checkbox" name="month[]" value="平成２６年７月">2014/07
    <input type="checkbox" name="month[]" value="平成２６年６月">2014/06
    <input type="checkbox" name="month[]" value="平成２６年５月">2014/05
    <input type="checkbox" name="month[]" value="平成２６年４月">2014/04
    <input type="checkbox" name="month[]" value="平成２６年３月">2014/03
    <input type="checkbox" name="month[]" value="平成２６年２月">2014/02
    <input type="checkbox" name="month[]" value="平成２６年１月">2014/01<br>
    性別<br>
    <input type="checkbox" name="gender[]" value="男">男
    <input type="checkbox" name="gender[]" value="女">女<br>
    年齢別<br>
    <input type="checkbox" name="old[]" value="小学生">小学生
    <input type="checkbox" name="old[]" value="中学生">中学生
    <input type="checkbox" name="old[]" value="高校生">高校生<br>
    時間別<br>
    <input type="checkbox" name="time[]" value="01:00">01:00
    <input type="checkbox" name="time[]" value="02:00">02:00
    <input type="checkbox" name="time[]" value="03:00">03:00
    <input type="checkbox" name="time[]" value="04:00">04:00
    <input type="checkbox" name="time[]" value="05:00">05:00
    <input type="checkbox" name="time[]" value="06:00">06:00
    <input type="checkbox" name="time[]" value="07:00">07:00
    <input type="checkbox" name="time[]" value="08:00">08:00
    <input type="checkbox" name="time[]" value="09:00">09:00
    <input type="checkbox" name="time[]" value="10:00">10:00
    <input type="checkbox" name="time[]" value="11:00">11:00
    <input type="checkbox" name="time[]" value="12:00">12:00
    <input type="checkbox" name="time[]" value="13:00">13:00
    <input type="checkbox" name="time[]" value="14:00">14:00
    <input type="checkbox" name="time[]" value="15:00">15:00
    <input type="checkbox" name="time[]" value="16:00">16:00
    <input type="checkbox" name="time[]" value="17:00">17:00
    <input type="checkbox" name="time[]" value="18:00">18:00
    <input type="checkbox" name="time[]" value="19:00">19:00
    <input type="checkbox" name="time[]" value="20:00">20:00
    <input type="checkbox" name="time[]" value="21:00">21:00
    <input type="checkbox" name="time[]" value="22:00">22:00
    <input type="checkbox" name="time[]" value="23:00">23:00
    <input type="checkbox" name="time[]" value="24:00">24:00<br>-->
                     検索（種類） <select id="country_id1" name="kind" tabindex="2">
                        <optgroup label="年間別">
                            <option>
                                2015/12
                            </option>

                            <option>
                                2015/11
                            </option>

                            <option>
                                2015/10
                            </option>

                            <option>
                                2015/09
                            </option>

                            <option>
                                2015/08
                            </option>

                            <option>
                                2015/07
                            </option>

                            <option>
                                2015/06
                            </option>

                            <option>
                                2015/05
                            </option>

                            <option>
                                2015/04
                            </option>

                            <option>
                                2015/03
                            </option>

                            <option>
                                2015/02
                            </option>

                            <option>
                                2015/01
                            </option>
                        </optgroup>

                        <optgroup label="性別">
                            <option>
                                男
                            </option>

                            <option>
                                女
                            </option>
                        </optgroup>

                        <optgroup label="年齢別">
                            <option>
                                小学生
                            </option>

                            <option>
                                中学生
                            </option>

                            <option>
                                高校生
                            </option>
                        </optgroup>
                    </select>

                    <h5 id="target_title">日付</h5><input id="datepicker" name="date" placeholder="クリックして下さい" type="text">

                    <div class="timepicker-box">
                        時間

                        <p><input class="time1" id="timepicker1" name="time1" type="text"></p>
                    </div><input type="submit" value="検索"> <input name="search" type="hidden" value="">
                </form>

                <div class="search_2">
                    ボロノイ図とはあるひとつの点に最も近い場所を見つけるための検索方法です。<a href="../master/sample2_1.html" target="_blank">ボロノイ図検索＆ボロノイ図について詳しくはこちら</a><br>
                </div>
            </div>

            <div style="clear:both;">
                <a href="post.php" target="_blank">投稿</a> <!--<a href="search.php" target="_blank">書籍検索</a>-->
                 <a href="../safety_sus/location.php" target="_blank">現在地近辺の情報を検索</a><br>

                <p><a class="help-link" id="help-open">このページの使い方について詳しくはこちら！</a></p>
            </div><?php

            //php$city_husinsha="水戸市";
            $db_ac = 'mysql:dbname=mito-th_kaken;host=mysql496.db.sakura.ne.jp';
            $user_name = 'mito-th';// onload="mapp1()"
            $pass = 'mitothjh1';
            $url='../../ahaha.json';
            //$rss = simplexml_load_file('http://fushinsha.ibk.ed.jp/08201/fushinsha.rdf');                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
            //var_dump($rss1);
            //header('Content-Type: application/json');
            //DOCTYPE$str3 = preg_replace('/(\s|　)/','',$kaka);
            //var_dump($city);
            //var_dump($str3.'<br>');
            //header("location: post.php");

            $city_husinsha = htmlspecialchars($_GET['city_name']);

            if($city_husinsha=='宇都宮市'){
                var_dump("aaa");
               $db_field='husinsha_utunomiya'; 
               goto utuno;
            }
            try{
                    $db_key = new PDO($db_ac, $user_name, $pass);
                    
                    if ($db_key == null){
                        print('接続に失敗しました。<br>');
                    }
                        
                    $db_key->query('SET NAMES utf8');
                
                $quer = 'select * from husinsha_url where city LIKE ?';
                    $stmt = $db_key->prepare($quer);
                    $stmt->execute(array("%$city_husinsha%"));
                    
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);

                    //var_dump($result);
                    if($result['city']==$city_husinsha){
                        $rss_url=$result['url'];
                        $db_field=$result['db_name'];
                    }
                    
                    if($rss_url){
                        //var_dump($rss_url);
                        $rss = simplexml_load_file($rss_url);
                        
                    }else{
                        //exit();
                    }
                   // var_dump($db_field);
                    
                    //var_dump($rss22);
                    }catch (PDOException $e){
                        print('Error:'.$e->getMessage());
                        die();
                    }
                    //var_dump($rss);
                    if($rss!=NULL){
                        foreach($rss->item as $rss_data){
                            $title = $rss_data->title;
                            //DOCTYPE$date = strtotime($rss_data->children("http://purl.org/dc/elements/1.1/")->date);
                            $date = $rss_data->date;
                            $link = $rss_data->link;
                            $description =  strip_tags($rss_data->description);
                            //var_dump($description);

                            preg_match('/"(.*?)"/', $title, $matches);
                            $title_city=mb_strstr($title,"N");
                            //var_dump($title_city);
                            //$title_city=preg_replace(' ','',$matches1[1]);

                            $description1 = mb_convert_encoding($description, "utf8", "auto");

                            preg_match('/場所(.*?)(2)/', $description1, $matches1);
                            preg_match('/平成(.*?)分/', $description1, $matches2);
                            preg_match('/児童等(.*?)(4)/', $description1, $matches3);
                            preg_match('/児童等(.*?)(5)/', $description1, $matches4);
                            preg_match('/状況(.*?)(6)/', $description1, $matches6);
                            $matches5=  mb_strstr($matches4[1], '不審者');
                            $matches2[1]="平成".$matches2[1].分;

                            $matches1[1]=str_replace("(","",$matches1[1]);
                            $matches3[1]=str_replace("(","",$matches3[1]);
                            $matches5=str_replace("(","",$matches5);
                            $matches6[1]=str_replace("(","",$matches6[1]);
                           // var_dump($matches6[1]);
                            
                            $matches1[1] =preg_replace('/(\s|　)/','',$matches1[1]);
                            $matches1[1]=str_replace("地","",$matches1[1]);

                           // var_dump($matches1[1]);

                           // var_dump($city_husinsha);
                            $test=mb_strpos($matches1[1], $city_husinsha,0,'UTF-8');

                            if($test===FALSE){
                                //print 'a<br>';
                                $matches1[1]=$city_husinsha.$matches1[1];
                            }
                            //var_dump($matches1[1]);
                            $time=date(Hi,strtotime($matches[1]));

                            //var_dump($time);
                            //var_dump($date);
                            //var_dump($link);
                            //var_dump($description);

                            try{
                                $db_key = new PDO($db_ac, $user_name, $pass);

                            if ($db_key == null){
                                print('接続に失敗しました。<br>');
                            }

                            $db_key->query('SET NAMES utf8');

                            $quer = "select title from $db_field where title=?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array($title_city));
                            //var_dump($db_field);
                            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                            //var_dump($result);
                           //DOCTYPE var_dump($title);
                            

                            if($result['title']!=$title_city){
                                $rss1=simplexml_load_file("http://maps.googleapis.com/maps/api/geocode/xml?address=$matches1[1]&sensor=false");
                                $status=$rss1->status;

                                if($status=='OK'){
                                    $north=$rss1->result->geometry->location->lat;
                                    $east=$rss1->result->geometry->location->lng;
                                }else{
                                    $rss2=simplexml_load_file("http://contents.search.olp.yahooapis.jp/OpenLocalPlatform/V1/contentsGeoCoder?appid=dj0zaiZpPVZqUk5FR0JHeW00ayZzPWNvbnN1bWVyc2VjcmV0Jng9MmY-&query=$matches1[1]&category=landmark,address");
                                    $tmp=$rss2->Feature->Geometry->Coordinates;
                                    $gomi = explode(",", $tmp);
                                    $east=$gomi[0];
                                    $north=$gomi[1];
                                }
                                $quer = "insert into $db_field (title,date,Infesting_sus,gender,content,link,location,latitude,longitude,times,tokuchou) values (?,?,?,?,?,?,?,?,?,?,?)";
                                $stmt = $db_key->prepare($quer);
                                $flag = $stmt->execute(array($title_city,$matches[1],$matches2[1],$matches3[1],$description,$link,$matches1[1],$north,$east,$time,$matches5));
                                if ($flag){
                                    //print('データの追加に成功しました<br>');
                                }else{
                                    print('データの追加に失敗しました<br>');
                                }
                            }

                            }catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                            }
                        }
                    }
                    $json = file_get_contents($url);
                    //var_dump($json);
                    $arr = json_decode($json,true);
                    //var_dump($arr);
                    try{
                            $db_key = new PDO($db_ac, $user_name, $pass);

                            if ($db_key == null){
                                print('接続に失敗しました。<br>');
                            }
                            $a=$arr["title"]["title1"];
                            //var_dump($a);
                            $b=$arr["date"]["date1"];
                            //var_dump($b);
                            $c=$arr["nakami"]["content"];
                            //var_dump($c);
                            
                            $b1=mb_strstr($b,'T',true);
                            //var_dump($b1);
                            $b2=mb_strstr($b,'T',false);
                            $b2=mb_strstr($b2,'+',true);
                            $b2=  str_replace("T","",$b2);
                            //var_dump($b2);
                            
                            $rss111=simplexml_load_file("http://contents.search.olp.yahooapis.jp/OpenLocalPlatform/V1/contentsGeoCoder?appid=dj0zaiZpPVZqUk5FR0JHeW00ayZzPWNvbnN1bWVyc2VjcmV0Jng9MmY-&query=$c&category=landmark,address");
                            //var_dump($rss111);
                            $tmp22=$rss111->Feature->Geometry->Coordinates;
                            //var_dump($tmp22);
                            $gomi3 = explode(",", $tmp22);
                            //var_dump($gomi3);
                            $east3=$gomi3[0];
                            //var_dump($east3);
                            $north3=$gomi3[1];
                            //var_dump($north3);
                            
                            $aaa1="メール情報";
                            $aaa2="test";
                            
                            $db_key->query('SET NAMES utf8');
                            $quer = "insert into husinsha_mito (title,date,Infesting_sus,gender,content,link,location,latitude,longitude,times,tokuchou) values (?,?,?,?,?,?,?,?,?,?,?)";
                            $stmt = $db_key->prepare($quer);
                            //$flag = $stmt->execute(array($aaa1,$b1,$aaa2,$aaa2,$aaa2,$aaa2,$c,$north3,$east3,$b2,$aaa2));
                            if ($flag){
                                //print('データの追加に成功しました<br>');
                            }else{
                                //print('データの追加に失敗しました<br>');
                            }


                            }catch (PDOException $e){
                                print('Error:'.$e->getMessage());
                                die();
                            }
                    
                        utuno:
                       $kind = htmlspecialchars($_GET['kind']);
                       //var_dump($kind);
                       $day=htmlspecialchars($_GET['date']);
                       $time=htmlspecialchars($_GET['time']);
                       
                       if(preg_match("/2015.*/", $kind)){
                           $db_search='年間別';
                       }else if(preg_match("/.*生/", $kind)){
                           $db_search='年齢別';
                       }elseif(preg_match("/^男$/", $kind) ||  preg_match("/^女$/", $kind)){
                           $db_search='性別';
                           //var_dump($db_search);
                       }elseif($time){
                           $db_search='時間別';
                           //var_dump($db_search);
                       }
                   
                    try{
                        $db_key = new PDO($db_ac, $user_name, $pass);

                        if ($db_key == null){
                            print('接続に失敗しました。<br>');
                        }else{
                            //print('接続に成功しました。<br>');
                        }
                        
                        
                        $db_key->query('SET NAMES utf8');
                        
                        if($db_search=='年間別'){
                            
                            //print 'aaa<br>';
                            $ido=array();
                            $keido=array();
                            $selecter=0;
                        
                        
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field WHERE date LIKE ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array("%$kind%"));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                               
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                           // var_dump($husinn);
                        }else if($db_search=='月間別'){
                        
                            $ido=array();
                            $keido=array();
                            
                            $selecter=1;
                            //var_dump($kind);
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field WHERE date LIKE ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array("%$kind%"));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                            //var_dump($husinn);
                        }else if($db_search=='性別'){
                        
                            $ido=array();
                            $keido=array();
                            
                            $selecter=2;
                        
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field  WHERE content  LIKE ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array("%$kind%"));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                            //var_dump($husinn);
                        }else if($db_search=='年齢別'){
                        
                            $ido=array();
                            $keido=array();
                        
                            
                            $selecter=3;
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field WHERE content  LIKE ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array("%$kind%"));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                            //var_dump($husinn);
                        }else if($db_search=='時間別'){
                            
                            $selecter=4;
                            $ido=array();
                            $keido=array();
                          //  print 'aaa<br>';
                            //var_dump($kind);
                            $time_search=date(H,strtotime($time));
                            //var_dump($time_search);
                            $time_1=$time_search.'00';
                            $time_2=$time_search.'59';
                            //var_dump($time_hour);
                           // var_dump($time_min);
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field WHERE times  BETWEEN ? AND ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array($time_1,$time_2));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                            //var_dump($husinn);
                        }else if($date){
                        
                            $ido=array();
                            $keido=array();
                        
                            $selecter=5;
                            $husinn=array();
                            $quer = "SELECT * FROM $db_field WHERE date  LIKE ?";
                            $stmt = $db_key->prepare($quer);
                            $stmt->execute(array("%$date%"));
                            //$result1 = $stmt->fetch(PDO::FETCH_ASSOC);
                            
                           // var_dump($result1);
                            foreach ($stmt as $result) {
                                $result['title']=str_replace(array("\r\n", "\r", "\n"),"",$result['title']);
                                $result['Infesting_sus']=str_replace(array("\r\n", "\r", "\n"),"",$result['Infesting_sus']);
                                $result['gender']=str_replace(array("\r\n", "\r", "\n"),"",$result['gender']);
                                $result['location']=str_replace(array("\r\n", "\r", "\n"),"",$result['location']);
                                $result['latitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['latitude']);
                                $result['longitude']=str_replace(array("\r\n", "\r", "\n"),"",$result['longitude']);
                                $result['tokuchou']=str_replace('"',"",$result['tokuchou']);
                                $result['title']=str_replace('"',"",$result['title']);
                                $husinn[]=array(
                                    'title'=>$result['title'],
                                    'date'=>$result['date'],
                                    'gender'=>$result['gender'],
                                    'tokuchou'=>$result['tokuchou'],
                                    'location'=>$result['location'],
                                    'latitude'=>$result['latitude'],
                                    'longitude'=>$result['longitude'],
                                    'Infesting_sus'=>$result['Infesting_sus'],
                                    'path'=>$result['path']
                                );

                            }
                            $goo=json_encode($title);
                            //var_dump($husinn);
                        }
                        
                        if(empty($husinn) && ($db_search || $day)){
                            $notfound='該当する情報はありません。or 正しく選択して下さい<br>';
                        }
                        
                        if($kind){
                            $goo=$kind;
                        }

                      //$idoj=json_encode($result,JSON_UNESCAPED_UNICODE);
                      $keidoj=json_encode($husinn,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
                      $goog=json_encode($goo,JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
                      //echo json_encode($husinn,JSON_UNESCAPED_UNICODE);
                        
                      //var_dump($keidoj);
                            
                    }catch (PDOException $e){
                        print('Error:'.$e->getMessage());
                        die();
                    }
            ?>

            <ul>
                <?php    echo $notfound; ?>
            </ul><script>
function  mapp1(){
            /*ジオコーダオブジェクトの生成        
            //緯度と経度の配列
            //var data = new Array(); */
            console.log("data2[i].title");
            var data1='<?php echo  $keidoj; ?>';
            var data2=JSON.parse(data1); 
            var selecter='<?php echo $selecter; ?>';
            var check=[0,1,2,3,4,5,6,7];
            var yabai = new Array();
            var file_path1=['../map_img/a.png','../map_img/b.png','../map_img/c.png','../map_img/d.png','../map_img/e.png','../map_img/f.png','../map_img/g.png'];
            //alert(selecter);
            var file_path=['../map_img/thumbnail-12801.jpg','../map_img/https___www.pakutaso.com_assets_c_2015_06_DI_IMG_5648-thumb-1000xauto-17815.jpg','../map_img/stalker.jpg','../map_img/d.png','../map_img/e.png','../map_img/f.png','../map_img/g.png'];
            var myLatlng = new google.maps.LatLng(data2[0].latitude, data2[0].longitude);
            var opts = {
            zoom: 15,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
            }; 

            for(var i=0;i<data2.length;i++){
            if(data2[i].path==null){
            data2[i].path='img/notfonud.png';
            console.log(data2[i].path);
            }
            var temp=data2[i].title;
            if(temp.indexOf("声かけ")!=-1){
            yabai[i]=file_path[0];
            console.log(yabai[i]);
            }else if(temp.indexOf("露出")!=-1){
            yabai[i]=file_path[1];
            console.log(yabai[i]);
            }else if(temp.indexOf("つきまとい")!=-1){
            yabai[i]=file_path[2];
            console.log(yabai[i]);
            console.log('aaa');
            }
            }

            //console.log(yabai);
            var map = new google.maps.Map
            (document.getElementById("map_canvas"),opts);

            var markers = new Array();

            /*var window = '<div style="width:100px;border:solid 1px;">'
                                                 + '<input type="button" name="sv" value="ストリートビュー" onclick="toggleStreetView()" />'
                                                  + '<\/div>';*/
            //マーカの作成
            for (i = 0; i < data2.length; i++) {
            markers[i] = new google.maps.Marker({
            position: new google.maps.LatLng(data2[i].latitude, data2[i].longitude),
            map: map,
            icon: new google.maps.MarkerImage(
            yabai[i],                     // url
            new google.maps.Size(60,60), // size
            new google.maps.Point(0,0),  // origin
            new google.maps.Point(16,16) // anchor
            )
            });
            console.log(data2[i].title);
            dispInfo(markers[i],data2[i].title,data2[i].date,data2[i].path,data2[i].Infesting_sus,data2[i].gender,data2[i].location,data2[i].tokuchou,data2[i].latitude, data2[i].longitude);
            }
            }
            //alert('ahaha');



            function dispInfo(marker,name1,name2,name21,name3,name4,name5,name6,lat,long) {
            google.maps.event.addListener(marker, 'click',
            function(event) {
            new google.maps.InfoWindow
            ({content:'<h3>'+name1+'<\/h3><br>書込日時<div class="info">'+name2+
                '<\/div><br>出没日時<div class="info">'+name3
                +'<\/div><br>被害者　<div class="info">'+name4
                +'<\/div><br>場所　　<div class="info">'+name5
                +'<\/div><br>特徴　　<div class="info">'+name6
                +'<\/div><div style="width:100px;border:solid 1px;">'
                + '<input type="button" name="sv" value="ストリートビュー" onclick="toggleStreetView('+lat+','+long+')" />'
                + '<\/div>画像<img src='+name21+'/>'
            }).open(marker.getMap(), marker);
            });
            }

            function toggleStreetView(g_add,g_add1) {
            //住所取得
            //   var geocoder = new google.maps.Geocoder();

            var latlng_a=g_add;
            var latlng_b=g_add1;

            //alert(latlng_a);

            var latlng={pf:{A:latlng_a,B:latlng_b}};

            var point = new google.maps.LatLng(latlng_a,latlng_b);
            //表示箇所出す
            document.getElementById("sv_area").style.display = 'block';
            //表示処理
            var gStreetView = new google.maps.StreetViewPanorama(document.getElementById("sv_area"), {
                heading: 34,
                pitch: 1,
                zoom: 1
            });

            var nearestLatLng = null, nearestPano = null;
            var client = new google.maps.StreetViewService();
            var radius = 100;
             client.getPanoramaByLocation(point, radius, function(result, status) {
                if (status == google.maps.StreetViewStatus.OK) {
                    var location = result.location;
                    nearestLatLng = location.latLng;
                    gStreetView.setPosition(nearestLatLng);
                }else{
                    //近くにストリートビューがない場合表示箇所隠す
                    alert('その場所に、ストリートビューはありません！！！');
                    document.getElementById("sv_area").style.display = 'none';
                }
            });

            }

            $(function(){

            //モーダルウィンドウを出現させるクリックイベント
            $("#help-open").click( function(){

                    //キーボード操作などにより、オーバーレイが多重起動するのを防止する
                    $( this ).blur() ;  //ボタンからフォーカスを外す
                    if( $( "#help-overlay" )[0] ) return false ;        //新しくモーダルウィンドウを起動しない (防止策1)
                    //if($("#modal-overlay")[0]) $("#modal-overlay").remove() ;     //現在のモーダルウィンドウを削除して新しく起動する (防止策2)

                    //オーバーレイを出現させる
                    $( "body" ).append( '<div id="help-overlay"><\/div>' ) ;
                    $( "#help-overlay" ).fadeIn( "slow" ) ;

                    //コンテンツをセンタリングする
                    centeringModalSyncer() ;

                    //コンテンツをフェードインする
                    $( "#help-content" ).fadeIn( "slow" ) ;

                    //[#modal-overlay]、または[#modal-close]をクリックしたら…
                    $( "#help-overlay,#help-close" ).unbind().click( function(){

                            //[#modal-content]と[#modal-overlay]をフェードアウトした後に…
                            $( "#help-content,#help-overlay" ).fadeOut( "slow" , function(){

                                    //[#modal-overlay]を削除する
                                    $('#help-overlay').remove() ;

                            } ) ;

                    } ) ;

            } ) ;

            //リサイズされたら、センタリングをする関数[centeringModalSyncer()]を実行する
            $( window ).resize( centeringModalSyncer ) ;

                    //センタリングを実行する関数
                    function centeringModalSyncer() {

                            //画面(ウィンドウ)の幅、高さを取得
                            var w = $( window ).width() ;
                            var h = $( window ).height() ;

                            //コンテンツ(#modal-content)の幅、高さを取得
                            var cw = $( "#help-content" ).outerWidth( {margin:true} );
                            var ch = $( "#help-content" ).outerHeight( {margin:true} );

                            //センタリングを実行する
                            $( "#help-content" ).css( {"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"} ) ;

                    }

            } ) ;


            </script> <input name="search" type="hidden" value="">

            <div id="map_canvas"></div>

            <div style="margin:0 auto;width:800px;text-align:center;background-color:white;">
                <div id="sv_area" style="position: absolute; top: 50px; left: 500px; height:400px; width: 400px;display:none;">
                    <input onclick="sv_display();" style="top: 10px;left: 320px;position:absolute;z-index: 500;" type="button" value="閉じる">
                </div>
            </div>
        </div>
    </div><!-- Begin Yahoo! JAPAN Web Services Attribution Snippet style="width:800px; height:400px" -->
    <a href="http://developer.yahoo.co.jp/about"><img alt="Webサービス by Yahoo! JAPAN" border="0" height="17" src="http://i.yimg.jp/images/yjdn/yjdn_attbtn2_105_17.gif" style=
    "margin:15px 15px 15px 15px" title="Webサービス by Yahoo! JAPAN" width="105"></a> <!-- End Yahoo! JAPAN Web Services Attribution Snippet -->
     <!--DOCTYPE<div id="feed"></div>-->
    <script>
footer()
    </script>
</body>
</html>