<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>予約確認</title>
<link rel="stylesheet" href="css/html5reset-1.6.1.css">
<link rel="stylesheet" href="css/header.css">
</head>
    <body>
        <header>
            <div id="title">
                <h1>日本の食</h1>

                <div id="loginStatus">
                @isset($name)
                    <p>{{$name}}様</p>
                    <a href="./usercheck">予約確認</a><br>
                    <a href="./logout">ログアウト</a>
                @else
                    <a href="./login">ログイン</a>
                    <br>
                @endisset
                </div>
            </div>
            
            <ul>
                <li><a href="./index.html">TOP</a></li>
                <li><a href="./shopfind.html">地方グルメ検索</a></li>
                <li><a href="./content.html">地方グルメ特集</a></li>
               
            </ul>
        </header>

        <div>
            <section>
                <h2>予約者様</h2>

                <div>
                    <p>予約日</p>

                    <h3>予約店舗名</h3>

                    <img src="#" alt="店舗画像">

                    <p>予約時間</p>
                </div>
            </section>

            <article>
                <p>おすすめ店舗</p>
            </article>
        </div>

        <footer></footer>
    </body>
</html>