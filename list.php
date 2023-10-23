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
        $sql="select * from regist order by id desc";
        $stmt = $pdo->query($sql);
        }catch(PDOException $e){
        $abc='<font color="RED">エラーが発生したためアカウント一覧を表示できません。</font>';
        echo $abc;
        }
        ?>
        
        <div class="table">    
            <table>
                <tr>
                    <td>id</td>
                    <td>名前（姓）</td>
                    <td>名前（名）</td>
                    <td>カナ（姓）</td>
                    <td>カナ（名）</td>
                    <td>メールアドレス</td>
                    <td>性別</td>
                    <td>アカウント権限</td>
                    <td>削除フラグ</td>
                    <td>登録日時</td>
                    <td>更新日時</td>
                    <td colspan="2">操作</td>
                </tr>
                
               
                   
                <tr>
                <?php foreach($stmt as $abc):?>
                    <td><?php echo $abc["id"]?></td>
                    <td><?php echo $abc["family_name"]?></td>
                    <td><?php echo $abc["last_name"]?></td>
                    <td><?php echo $abc["family_name_kana"]?></td>
                    <td><?php echo $abc["last_name_kana"]?></td>
                    <td><?php echo $abc["mail"]?></td>
                    <td><?php $ge=str_replace(["0","1"],["男","女"],$abc);
                    echo $ge["gender"]?></td>
                    <td><?php $au=str_replace(["0","1"],["一般","管理者"],$abc);
                    echo $au["authority"]?></td>
                    <td><?php $de=str_replace(["0","1"],["有効","無効"],$abc);
                    echo $de["delete_flag"]?></td>
                    <td><?php $re=strtotime($abc["registered_time"]);
                        echo date('Y/m/d',$re);?></td>
                    <td><?php 
                        if($abc["update_time"]==null){
                            echo "なし";
                        }else{
                            $up=strtotime($abc["update_time"]);
                            echo date('Y/m/d',$up);
                        }?></td>
                    <td>
                        <form method="post" action="update.php" name="update"> 
                        <input type="submit" class="button1" value="更新">
                        </form>
                    </td>
                    <td>
                        <form method="post" action="delete.php" name="delete">
                        <input type="hidden" name="id" value="<?php echo $abc["id"]?>">
                        <input type="hidden" name="family_name" value="<?php echo $abc["family_name"]?>">
                        <input type="hidden" name="last_name" value="<?php echo $abc["last_name"]?>">
                        <input type="hidden" name="family_name_kana" value="<?php echo $abc["family_name_kana"]?>">
                        <input type="hidden" name="last_name_kana" value="<?php echo $abc["last_name_kana"]?>">
                        <input type="hidden" name="mail" value="<?php echo $abc["mail"]?>">
                        <input type="hidden" name="password" value="<?php echo $abc["password"]?>">
                        <input type="hidden" name="gender" value="<?php echo $abc["gender"]?>">
                        <input type="hidden" name="postal_code" value="<?php echo $abc["postal_code"]?>">
                        <input type="hidden" name="prefecture" value="<?php echo $abc["prefecture"]?>">
                        <input type="hidden" name="address_1" value="<?php echo $abc["address_1"]?>">
                        <input type="hidden" name="address_2" value="<?php echo $abc["address_2"]?>">
                        <input type="hidden" name="authority" value="<?php echo $abc["authority"]?>">
                        <input type="submit" class="button1" value="削除">
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
                
            </table>
            <br>
        </div>
            
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>