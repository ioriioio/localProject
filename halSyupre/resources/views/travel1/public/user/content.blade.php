<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お店詳細</title>
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

                <div>
                    <h2>店舗名</h2>

                    <img src="#" alt="店舗画像">

                    <p>評価</p>

                    <p>詳細</p>

                    <p>料金帯</p>

                    <p>営業時間</p>

                    <p>客席数</p>

                    <p>駐車場</p>
                </div>
            </section>

            <article>
                <p>おすすめ他店舗</p>
            </article>
        </div>

        <footer></footer>
    </body>
</html>