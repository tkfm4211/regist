<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録確認</title>
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
            <li>その他</li>
        </ul>
        </header>
        
        <main>
            <div class="kou">
            
                <h3>アカウント更新画面</h3>
                
            </div>
            
            <div class="aaa">
            
                <form method="post" action="update_confirm.php" name="touroku">
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
                
                <div>
                    <label>名前（姓）</label>
                    <input type="text" class="required" size="35" name="family_name"  maxlength="10" value="<?php echo $_POST['family_name']; ?>" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*" data-errmessage="#family_name_error">
                    <div id="family_name_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>名前（名）</label>
                    <input type="text" class="text" size="35" name="last_name"  maxlength="10" value="<?php echo $_POST['last_name']; ?>" data-errmessage="#last_name_error" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*">
                    
                    <div id="last_name_error" style="color: red;"></div>
                    
                </div>
                <br>
            
                <div>
                    <label>カナ（姓）</label>
                    <input type="text" class="text" size="35" name="family_name_kana"  maxlength="10" value="<?php echo $_POST['family_name_kana']; ?>" data-errmessage="#family_name_kana_error" pattern="[\u30A1-\u30F6]*">
                    
                    <div id="family_name_kana_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>カナ（名）</label>
                    <input type="text" class="text" size="35" name="last_name_kana"  maxlength="10" value="<?php echo $_POST['last_name_kana']; ?>" data-errmessage="#last_name_kana_error" pattern="[\u30A1-\u30F6]*">
                    
                    <div id="last_name_kana_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>メールアドレス</label>
                    <input type="text" class="text" size="35" name="mail"  maxlength="100" value="<?php echo $_POST['mail']; ?>" data-errmessage="#mail_error" pattern="^[a-zA-Z0-9-@.]*$">
                    
                    <div id="mail_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>パスワード</label>
                    <input type="text" class="text" size="35" name="password"  maxlength="10" value="<?php echo $_POST['password']; ?>" data-errmessage="#password_error" pattern="^[0-9A-Za-z]+$">
                    
                    <div id="password_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>性別</label>
                    <input type="radio" name="gender" value="0" <?php if($_POST['gender']=="0") echo 'checked'?>>男
                    <input type="radio" name="gender" value="1" <?php if($_POST['gender']=="1") echo 'checked'?>>女
                </div>
                <br>
                
                 <div>
                    <label>郵便番号</label>
                    <input type="text" class="text" size="35" name="postal_code"  maxlength="7" minlength="7" value="<?php echo $_POST['postal_code']; ?>" data-errmessage="#postal_code_error" pattern="^[0-9]+$">
                     
                     <div id="postal_code_error" style="color: red;"></div>
                     
                </div>
                <br>
                
                <div>
                    <label>住所（都道府県）</label>
                    <select name="prefecture" data-errmessage="#prefecture_error">
                        <option value="北海道" <?php if($_POST['prefecture']==='北海道') {echo 'selected';}?>>北海道</option>
                        <option value="青森県" <?php if($_POST['prefecture']==='青森県') {echo 'selected';}?>>青森県</option>
                        <option value="岩手県" <?php if($_POST['prefecture']==='岩手県') {echo 'selected';}?>>岩手県</option>
                        <option value="宮城県" <?php if($_POST['prefecture']==='宮城県') {echo 'selected';}?>>宮城県</option>
                        <option value="秋田県" <?php if($_POST['prefecture']==='秋田県') {echo 'selected';}?>>秋田県</option>
                        <option value="山形県" <?php if($_POST['prefecture']==='山形県') {echo 'selected';}?>>山形県</option>
                        <option value="福島県" <?php if($_POST['prefecture']==='福島県') {echo 'selected';}?>>福島県</option>
                        <option value="茨城県" <?php if($_POST['prefecture']==='茨城県') {echo 'selected';}?>>茨城県</option>
                        <option value="栃木県" <?php if($_POST['prefecture']==='栃木県') {echo 'selected';}?>>栃木県</option>
                        <option value="群馬県" <?php if($_POST['prefecture']==='群馬県') {echo 'selected';}?>>群馬県</option>
                        <option value="埼玉県" <?php if($_POST['prefecture']==='埼玉県') {echo 'selected';}?>>埼玉県</option>
                        <option value="千葉県" <?php if($_POST['prefecture']==='千葉県') {echo 'selected';}?>>千葉県</option>
                        <option value="東京都" <?php if($_POST['prefecture']==='東京都') {echo 'selected';}?>>東京都</option>
                        <option value="神奈川県" <?php if($_POST['prefecture']==='神奈川県') {echo 'selected';}?>>神奈川県</option>
                        <option value="新潟県" <?php if($_POST['prefecture']==='新潟県') {echo 'selected';}?>>新潟県</option>
                        <option value="富山県" <?php if($_POST['prefecture']==='富山県') {echo 'selected';}?>>富山県</option>
                        <option value="石川県" <?php if($_POST['prefecture']==='石川県') {echo 'selected';}?>>石川県</option>
                        <option value="福井県" <?php if($_POST['prefecture']==='福井県') {echo 'selected';}?>>福井県</option>
                        <option value="山梨県" <?php if($_POST['prefecture']==='山梨県') {echo 'selected';}?>>山梨県</option>
                        <option value="長野県" <?php if($_POST['prefecture']==='長野県') {echo 'selected';}?>>長野県</option>
                        <option value="岐阜県" <?php if($_POST['prefecture']==='岐阜県') {echo 'selected';}?>>岐阜県</option>
                        <option value="静岡県" <?php if($_POST['prefecture']==='静岡県') {echo 'selected';}?>>静岡県</option>
                        <option value="愛知県" <?php if($_POST['prefecture']==='愛知県') {echo 'selected';}?>>愛知県</option>
                        <option value="三重県" <?php if($_POST['prefecture']==='三重県') {echo 'selected';}?>>三重県</option>
                        <option value="滋賀県" <?php if($_POST['prefecture']==='滋賀県') {echo 'selected';}?>>滋賀県</option>
                        <option value="京都府" <?php if($_POST['prefecture']==='京都府') {echo 'selected';}?>>京都府</option>
                        <option value="大阪府" <?php if($_POST['prefecture']==='大阪府') {echo 'selected';}?>>大阪府</option>
                        <option value="兵庫県" <?php if($_POST['prefecture']==='兵庫県') {echo 'selected';}?>>兵庫県</option>
                        <option value="奈良県" <?php if($_POST['prefecture']==='奈良県') {echo 'selected';}?>>奈良県</option>
                        <option value="和歌山県" <?php if($_POST['prefecture']==='和歌山県') {echo 'selected';}?>>和歌山県</option>
                        <option value="鳥取県" <?php if($_POST['prefecture']==='鳥取県') {echo 'selected';}?>>鳥取県</option>
                        <option value="島根県" <?php if($_POST['prefecture']==='島根県') {echo 'selected';}?>>島根県</option>
                        <option value="岡山県" <?php if($_POST['prefecture']==='岡山県') {echo 'selected';}?>>岡山県</option>
                        <option value="広島県" <?php if($_POST['prefecture']==='広島県') {echo 'selected';}?>>広島県</option>
                        <option value="山口県" <?php if($_POST['prefecture']==='山口県') {echo 'selected';}?>>山口県</option>
                        <option value="徳島県" <?php if($_POST['prefecture']==='徳島県') {echo 'selected';}?>>徳島県</option>
                        <option value="香川県" <?php if($_POST['prefecture']==='香川県') {echo 'selected';}?>>香川県</option>
                        <option value="愛媛県" <?php if($_POST['prefecture']==='愛媛県') {echo 'selected';}?>>愛媛県</option>
                        <option value="高知県" <?php if($_POST['prefecture']==='高知県') {echo 'selected';}?>>高知県</option>
                        <option value="福岡県" <?php if($_POST['prefecture']==='福岡県') {echo 'selected';}?>>福岡県</option>
                        <option value="佐賀県" <?php if($_POST['prefecture']==='佐賀県') {echo 'selected';}?>>佐賀県</option>
                        <option value="長崎県" <?php if($_POST['prefecture']==='長崎県') {echo 'selected';}?>>長崎県</option>
                        <option value="熊本県" <?php if($_POST['prefecture']==='熊本県') {echo 'selected';}?>>熊本県</option>
                        <option value="大分県" <?php if($_POST['prefecture']==='大分県') {echo 'selected';}?>>大分県</option>
                        <option value="宮崎県" <?php if($_POST['prefecture']==='宮崎県') {echo 'selected';}?>>宮崎県</option>
                        <option value="鹿児島県" <?php if($_POST['prefecture']==='鹿児島県') {echo 'selected';}?>>鹿児島県</option>
                        <option value="沖縄県" <?php if($_POST['prefecture']==='沖縄県') {echo 'selected';}?>>沖縄県</option>
                    </select>
                    
                    <div id="prefecture_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>住所（市区町村）</label>
                    <input type="text" class="text" size="35" name="address_1"  maxlength="10" value="<?php echo $_POST['address_1']; ?>" data-errmessage="#address_1_error" pattern="^[\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F60-9- ]*">
                    
                    <div id="address_1_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>住所（番地）</label>
                    <input type="text" class="text" size="35" name="address_2"  maxlength="100" value="<?php echo $_POST['address_2']; ?>" data-errmessage="#address_2_error" pattern="^[\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F60-9- ]*">
                    
                    <div id="address_2_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>アカウント権限</label>
                    <select name="authority">
                        <option value="0" <?php if($_POST['authority']=='0') {echo 'selected';}?>>一般</option>
                       　<option value="1" <?php if($_POST['authority']=='1') {echo 'selected';}?>>管理者</option>
                    </select>
                </div>
                <br>
                
                <div>
                    <input type="submit" class="submit" value="確認">
                    
                <script>
                    $('form').validate({
                        rules:{
                            family_name:{required:true},
                            last_name:{required:true},
                            family_name_kana:{required:true},
                            last_name_kana:{required:true},
                            mail:{required:true,
                                 email:true},
                            password:{required:true},
                            postal_code:{required:true},
                            prefecture:{required:true},
                            address_1:{required:true},
                            address_2:{required:true}
                        },
                        messages:{
                            family_name:{required:'名前（姓）が未入力です。',
                                        pattern:'指定された形式で入力してください。'},
                            last_name:{required:'名前（名）が未入力です。',
                                      pattern:'指定された形式で入力してください。'},
                            family_name_kana:{required:'カナ（姓）が未入力です。',
                                             pattern:'指定された形式で入力してください。'},
                            last_name_kana:{required:'カナ（名）が未入力です。',
                                           pattern:'指定された形式で入力してください。'},
                            mail:{required:'メールアドレスが未入力です。',
                                 pattern:'指定された形式で入力してください。',
                                 email:'指定された形式で入力してください。'},
                            password:{required:'パスワードが未入力です。',
                                     pattern:'指定された形式で入力してください。'},
                            postal_code:{required:'郵便番号が未入力です。',
                                        minlength:'半角数字7文字で入力してください。',
                                        pattern:'指定された形式で入力してください。',},
                            prefecture:{required:'住所（都道府県）が未入力です。',
                                       pattern:'指定された形式で入力してください。'},
                            address_1:{required:'住所（市区町村）が未入力です。',
                                      pattern:'指定された形式で入力してください。'},
                            address_2:{required:'住所（番地）が未入力です。',
                                      pattern:'指定された形式で入力してください。'},
                        },
                        errorPlacement:function(error,element){
                            error.appendTo(element.data('errmessage'));
                        }
                    });
            </script>
                </div>
                
            </form>
                
            
        </div>
            
        </main>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>