<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>グルメ紹介</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}main.css">
<link rel="stylesheet" href="{{$cssPath}}foodcontent.css">


<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{$jsPath}}jquery.japan-map.js"></script>
<script type="text/javascript" src="{{$jsPath}}map.option.js"></script>

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
                <li><a href="./">TOP</a></li>
                <li><a href="./sarch">地方グルメ検索</a></li>
                <li><a href="./content">地方グルメ特集</a></li>
                
            </ul>
        </header>

        <div>
            <section>
                <h2>地方グルメ紹介</h2>
                
                <div id="map"></div>

                <p id="areaname"></p>
                
            </section>

            <section  id="content2">
                <h3>オススメの食材</h3>

            </section>
        </div>

        <footer></footer>
    </body>
</html>
