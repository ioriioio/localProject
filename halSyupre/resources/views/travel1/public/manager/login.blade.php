<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログインページ</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<!-- <link rel="stylesheet" href="{{$cssPath}}header.css"> -->
<link rel="stylesheet" href="{{$cssPath}}store/login.css">

<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
</head>
    <body>
        <div id="content">
            <div id="form">
                <h1>店舗ログイン</h1>
                <form method="post" action="./SLoginAuth">
                @csrf
                    <div id="formblock">
                        <div class="form-item">
                            <label for="name">店舗名</label>
                            <input type="text" name="name" id="name" required="required" placeholder="例) マクドナルド">
                        </div>

                        <div class="form-item">
                            <label for="email">パスワード</label>
                            <input type="password" name="pass" id="pass" required="required" placeholder="">
                        </div>
                        
                        <a href="./SNew">新規登録</a>

                        <div class="button-panel">
                            <button class="submitButton">ログイン</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>