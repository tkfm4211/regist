<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="touroku.css">
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
        <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>
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
            <li>アカウント一覧</li>
            <li>その他</li>
        </ul>
        </header>
            <h2>アカウント一覧画面</h2>
            <?php
            try{
            $pdo=new PDO("mysql:dbname=tt;host=localhost;","root","");
            $stmt = $pdo->prepare(
            
            };
            ?>
           
        
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>