<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="{{$cssPath}}newAcount.css">
    <link rel="stylesheet" type="text/css" href="{{$cssPath}}remodal.css">
    <link rel="stylesheet" type="text/css" href="{{$cssPath}}remodal-default-theme.css">

    <script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{$jsPath}}remodal.js"></script>
</head>
    <body>
        <header></header>

        <div>
            <section>
                <div id="login">
                    <img src="{{$imgPath}}/sample2.jpg" alt="">
                    <div class="form-wrapper">

                        <div id="log">
                            <a href="./">TOP</a>-><a href="./login">ログイン</a>><a href="./newAcount">新規会員登録</a>
                        </div>
                        <h2>新規登録</h2>
                        <form method="get">
                        @csrf
                            <div id="formblock">
                                <div class="form-item">
                                    <label for="name"></label>
                                    <input type="text" name="name" id="name" required="required" placeholder="氏名">
                                </div>

                                <div class="form-item">
                                    <label for="email"></label>
                                    <input type="email" name="email" id="email" required="required" placeholder="メールアドレス">
                                </div>

                                <div class="form-item">
                                    <label for="tel"></label>
                                    <input type="text" name="tel" id="tel" required="required" placeholder="電話番号">
                                </div>

                                <div class="form-item">
                                    <label for="birth"></label>
                                    <input type="date" name="birth" id="birth" required="required" placeholder="生年月日">
                                </div>

                                <div class="form-item">
                                    <label for="pass"></label>
                                    <input type="password" name="pass" id="pass" required="required" placeholder="パスワード">
                                </div>

                                <div class="form-item">
                                    <label for="VerificationPass"></label>
                                    <input type="password" name="VerificationPass" required="required" placeholder="パスワード確認" >
                                </div>
                            </div>
                            <div class="button-panel">

                                <!-- モーダルボタン -->
                                    <button class="submitButton">確認</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>

        
        <!-- モーダルに出てくる内容 -->
        <div class="remodal" data-remodal-id="modal">
            <h3>登録確認</h3>
            <dl class="output">
            </dl>
            <button data-remodal-action="cancel" class="remodal-cancel">内容の修正</button>　　
            
            <button id="insert" class="remodal-cancel">登録する</button>

        </div>


        <script>
            var user = [];

            $('.submitButton').on('click',function(){
                

                user = {
                    name: $('#name').val(),
                    email: $('#email').val(),
                    tel: $('#tel').val(),
                    birth: $('#birth').val(),
                    pass: $('#pass').val()
                };

                if(!(user['name'] == "") & !(user['email'] == "") & !(user['tel'] == "") & !(user['birth'] == "") & !(user['pass'] == "")){

                    $('.submitButton').wrap('<a data-remodal-target="modal" />');

                    $('.output').empty();

                    $('.output').append('<dt>名前</dt><dd>'+user['name']+'</dd>');
                    $('.output').append('<dt>メールアドレス</dt><dd>'+user['email']+'</dd>');
                    $('.output').append('<dt>電話番号</dt><dd>'+user['tel']+'</dd>');
                    $('.output').append('<dt>誕生日</dt><dd>'+user['birth']+'</dd>');
                    $('.output').append('<dt>パスワード</dt><dd>'+user['pass']+'</dd>');
                }
            });

            $('#insert').on('click', function(){
                $.ajax({
                    type: 'get',
                    datatype: 'json',
                    url: './insertAcount',
                    data: user
                })
                .done(function(msg,status,xhr){
                    console.log("success");
                    console.log("msg=" + msg);
                    console.log("status=" + status);
                    console.log("xhr=" + xhr);
                    console.log()
                    //ajax送信

                    //window.location.href = "./";
                })
                .fail(function(xhr,status,error){
                    console.log("error");
                })
                .always(function(xhr,status,error){
                    console.log("fin");
                })
            });
        </script>

        <footer></footer>
    </body>
</html>

