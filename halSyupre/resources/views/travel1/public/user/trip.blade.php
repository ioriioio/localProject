<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>宿泊施設</title>
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

            <h1>Title</h1>
        </header>

        <div>
            <section>
                選択:
            </section>
        </div>

        <footer></footer>
    </body>
</html>