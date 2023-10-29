<?php
mb_internal_encoding("utf8");

try{
$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$stmt=$pdo->prepare('UPDATE regist SET family_name=:family_name,last_name=:last_name,family_name_kana=:family_name_kana,last_name_kana=:last_name_kana,mail=:mail,password=:password,gender=:gender,postal_code=:postal_code,prefecture=:prefecture,address_1=:address_1,address_2=:address_2,authority=:authority,update_time=:update_time WHERE id=:id');

$stmt->execute(array(':id'=>$_POST['id'],':family_name'=>$_POST['family_name'],':last_name'=>$_POST['last_name'],':family_name_kana'=>$_POST['family_name_kana'],'last_name_kana'=>$_POST['last_name_kana'],':mail'=>$_POST['mail'],':password'=>$_POST['password'],':gender'=>$_POST['gender'],':postal_code'=>$_POST['postal_code'],':prefecture'=>$_POST['prefecture'],':address_1'=>$_POST['address_1'],':address_2'=>$_POST['address_2'],':authority'=>$_POST['authority'],':update_time'=>$_POST['update_time']));
    
$abc='更新完了しました。';
 } catch(PDOException $e){
$abc='<font color="RED">エラーが発生したためアカウント更新できません。</font>';
}
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>更新完了</title>
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
        <h1>アカウント更新完了画面</h1>
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