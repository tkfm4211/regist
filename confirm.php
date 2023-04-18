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
            
            <h1>アカウント登録確認画面</h1>
            
        <div class="confirm">
            
            <p>名前（姓）
                <?php echo $_POST['family_name']; ?>
            </p>
            
            <p>名前（名）
                <?php echo $_POST['last_name']; ?>
            </p>
            
            <p>カナ（姓）
                <?php echo $_POST['family_name_kana']; ?>
            </p>
            
            <p>カナ（名）
                <?php echo $_POST['last_name_kana']; ?>
            </p>
            
            <p>メールアドレス
                <?php echo $_POST['mail']; ?>
            </p>
            
            <p>パスワード
                <?php 
                for($pass=1;$pass<=mb_strlen($_POST['password']);$pass++){
                echo("●");                           
                }
                ?>
            </p>
            
            <p>性別
                <?php $gender=array(
                    "男" =>"0",
                    "女" =>"1",
                );
                echo array_search($_POST['gender'],$gender); ?>
            </p>
            
            <p>郵便番号
                <?php echo $_POST['postal_code']; ?>
            </p>
            
            <p>住所（都道府県）
                <?php echo $_POST['prefecture']; ?>
            </p>
            
            <p>住所（市区町村）
                <?php echo $_POST['address_1']; ?>
            </p>
            
            <p>住所（番地）
                <?php echo $_POST['address_2']; ?>
            </p>
            
            <p>アカウント権限
                <?php $authority=array(
                    "一般" =>"0",
                    "管理者" =>"1",
                );
                echo array_search($_POST['authority'],$authority); ?>
            </p>
            
            
            <button type="button" onclick="history.back()">戻る</button>

            
            <form action="insert.php" method="post">
                <input type="submit" class="button2" value="登録する">
                
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
                
            </form>
            
        </div>
            
        </main>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>