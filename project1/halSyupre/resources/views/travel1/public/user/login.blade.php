<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログインページ</title>
<!-- <link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css"> -->
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}login.css">
</head>
    <body>
        <header></header>
        <div>
            <section>
                <div id="login">
                    <div class="form-wrapper">
                        <div id="log">
                            <a href="./">TOP</a>-><a href="./login">ログイン</a>
                        </div>

                        <h2>ログイン</h2>
                        <form method="post" action="./loginAcount">
                        @csrf
                            <div id="formblock">
                                <div class="form-item">
                                    <label for="email"></label>
                                    <input type="email" name="email" required="required" placeholder="メールアドレス"></input>
                                </div>
                                <div class="form-item">
                                    <label for="pass"></label>
                                    <input type="password" name="pass" required="required" placeholder="パスワード"></input>
                                </div>

                                <a href="./newAcount">新規登録</a>
                            </div>
                            <div class="button-panel">
                                <input type="submit" class="button" title="Sign In" value="ログイン"></input>
                            </div>
                        </form>
                    </div>

                    <img src="{{$imgPath}}sample2.jpg" alt="ログインデザイン画像">
                </div>
            </section>
        </div>

        <footer></footer>
    </body>
</html>