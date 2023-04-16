<?php
mb_internal_encoding("utf8");

$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$pdo ->exec("insert into regist(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."');");

?>

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>keijiban</title>
        <link rel="stylesheet" type="text/css" href="touroku.css">
    </head>
    
    <body>
        <img src="diblog_logo.jpg">
        <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>D.I.Blogについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
        </header>
        
        <h1>アカウント登録完了画面</h1>
        
        <div class="confirm">
            <p>登録完了しました。</p>
            
        </div>
        
        <form action="touroku.php">
            <input type="submit" class="button1" value="TOPページに戻る">
        </form>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
        
    </body>
</html>