<?php
mb_internal_encoding("utf8");

try{
$pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");

$stmt=$pdo->prepare('UPDATE regist SET delete_flag="1",update_time=:update_time WHERE id=:id');

$stmt->execute(array(':id' => $_POST['id'],':update_time'=>$_POST['update_time']));
    
$abc='削除完了しました。';
 } catch(PDOException $e){
$abc='<font color="RED">エラーが発生したためアカウント削除できません。</font>';
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
        <h1>アカウント削除完了画面</h1>
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