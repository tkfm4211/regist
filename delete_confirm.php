<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録確認</title>
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
        
        <main>
            
            <h3>アカウント削除確認画面</h3>
            
        <div class="delete">
            
            <h1>本当に削除してよろしいですか？</h1>
        
        </div>
            
            <div class="aaa">
            
            <button class="regi" type="button" onclick="history.back()">前に戻る</button>
                
            <form action="delete_complete.php" method="post">
                <input type="submit" class="button2" value="確認する">
                
                <input type="hidden" value="<?php echo $_POST['id']; ?>" name="id">
                
                <input type="hidden" value="<?php echo $_POST['family_name']; ?>" name="family_name">
                
                <input type="hidden" value="<?php echo $_POST['last_name']; ?>" name="last_name">
                
                <input type="hidden" value="<?php echo $_POST['family_name_kana']; ?>" name="family_name_kana">
                
                <input type="hidden" value="<?php echo $_POST['last_name_kana']; ?>" name="last_name_kana">
                
                <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                
                <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                
                <input type="hidden" value="<?php echo $_POST['gender']; ?>" name="gender">
                
                <input type="hidden" value="<?php echo $_POST['postal_code']; ?>" name="postal_code">
                
                <input type="hidden" value="<?php echo $_POST['prefecture']; ?>" name="prefecture">
                
                <input type="hidden" value="<?php echo $_POST['address_1']; ?>" name="address_1">
                
                <input type="hidden" value="<?php echo $_POST['address_2']; ?>" name="address_2">
                
                <input type="hidden" value="<?php echo $_POST['authority']; ?>" name="authority">
                
                
                
                
                
                <input type="hidden" value="<?php
                                            date_default_timezone_set('Asia/Tokyo');
                                            $registered_time=new DateTime();
                                            echo $registered_time->format('YmdHis');
                                            ?>" name="update_time">
                
            </form>
                
            
        </div>
            
        </main>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>