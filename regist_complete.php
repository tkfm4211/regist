<?php
mb_internal_encoding("utf8");

try{
$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$key = openssl_random_pseudo_bytes(16);
$iv = openssl_random_pseudo_bytes(16);

$encrypt_value=openssl_encrypt($_POST['password'],'AES-256-CBC',$key,OPENSSL_RAW_DATA,$iv);
    
//$decrypt_value=openssl_decrypt($encrypt_value,'AES-256-CBC',$key,OPENSSL_RAW_DATA,$iv);

$pdo ->exec("insert into regist(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority,delete_flag,registered_time)values('".$_POST['family_name']."','".$_POST['last_name']."','".$_POST['family_name_kana']."','".$_POST['last_name_kana']."','".$_POST['mail']."','$encrypt_value','".$_POST['gender']."','".$_POST['postal_code']."','".$_POST['prefecture']."','".$_POST['address_1']."','".$_POST['address_2']."','".$_POST['authority']."','".$_POST['delete_flag']."','".$_POST['registered_time']."');");
$abc='登録完了しました。';
 } catch(PDOException $e){
$abc='<font color="RED">エラーが発生したためアカウント登録できません。</font>';
}
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録完了</title>
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
        
        <div class="kanryou">
        <h1>アカウント登録完了画面</h1>
        </div>
        <div class="confirm">
            <p>
            <?php
            echo $abc;
            ?>
            </p>
            
        </div>
        
        <div class="back">
        <form action="regist.php">
            <input type="submit" class="button1" value="TOPページに戻る">
        </form>
        </div>
            
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
        
    </body>
</html>