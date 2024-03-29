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
            <li><a href= "list.php" >アカウント一覧</a></li>
            <li>その他</li>
        </ul>
        </header>
        
        <main>
            <h1>アカウント登録画面</h1>
            
            <form method="post" action="regist_confirm.php" name="touroku">
                
                <div>
                    <label>名前（姓）</label>
                    <input type="text" class="required" size="35" name="family_name"  maxlength="10" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*" data-errmessage="#family_name_error">
                    <div id="family_name_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>名前（名）</label>
                    <input type="text" class="text" size="35" name="last_name"  maxlength="10" data-errmessage="#last_name_error" pattern="[\u4E00-\u9FFF\u3040-\u309F-]*">
                    
                    <div id="last_name_error" style="color: red;"></div>
                    
                </div>
                <br>
            
                <div>
                    <label>カナ（姓）</label>
                    <input type="text" class="text" size="35" name="family_name_kana"  maxlength="10" data-errmessage="#family_name_kana_error" pattern="[\u30A1-\u30F6]*">
                    
                    <div id="family_name_kana_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>カナ（名）</label>
                    <input type="text" class="text" size="35" name="last_name_kana"  maxlength="10" data-errmessage="#last_name_kana_error" pattern="[\u30A1-\u30F6]*">
                    
                    <div id="last_name_kana_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>メールアドレス</label>
                    <input type="text" class="text" size="35" name="mail"  maxlength="100" data-errmessage="#mail_error" pattern="^[a-zA-Z0-9-@.]*$">
                    
                    <div id="mail_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>パスワード</label>
                    <input type="password" class="text" size="35" name="password"  maxlength="10" data-errmessage="#password_error" pattern="^[0-9A-Za-z]+$">
                    
                    <div id="password_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>性別</label>
                    <input type="radio" name="gender" value="0" checked>男
                    <input type="radio" name="gender" value="1">女
                </div>
                <br>
                
                 <div>
                    <label>郵便番号</label>
                    <input type="text" class="text" size="35" name="postal_code"  maxlength="7" minlength="7" data-errmessage="#postal_code_error" pattern="^[0-9]+$">
                     
                     <div id="postal_code_error" style="color: red;"></div>
                     
                </div>
                <br>
                
                <div>
                    <label>住所（都道府県）</label>
                    <select name="prefecture" data-errmessage="#prefecture_error">
                        <option value="" selected></option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                    
                    <div id="prefecture_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>住所（市区町村）</label>
                    <input type="text" class="text" size="35" name="address_1"  maxlength="10" data-errmessage="#address_1_error" pattern="^[\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F60-9- ]*">
                    
                    <div id="address_1_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>住所（番地）</label>
                    <input type="text" class="text" size="35" name="address_2"  maxlength="100" data-errmessage="#address_2_error" pattern="^[\u4E00-\u9FFF\u3040-\u309F-\u30A1-\u30F60-9- ]*">
                    
                    <div id="address_2_error" style="color: red;"></div>
                    
                </div>
                <br>
                
                <div>
                    <label>アカウント権限</label>
                    <select name="authority">
                        <option value="0">一般</option>
                        <option value="1">管理者</option>
                    </select>
                </div>
                <br>
                
                <div>
                    <input type="submit" class="submit" value="確認する">
                    
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

        </main>
        
        <footer>
        Copyright D.I.works|D.I.blog is the one which provides A to Z about programming
        </footer>
    
    </body>
</html>