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
           
            @foreach($eats as $items)
                <div id="block">
                    <dl>
                        <dt>予約者名</dt>
                        <dd>{{$items['userId']}}</dd>

                        <dt>予約料理</dt>
                        <dd>{{$items['reserveId']}}</dd>

                        <dt>人数</dt>
                        <dd>{{$items['sum']}}人</dd>

                        <dt>日付</dt>
                        <dd>{{$items['date']}}</dd>

                        <dt>時間</dt>
                        <dd>{{$items['time']}}</dd>

                    </dl>

                    <form action="./CheckDelete?dele={{$items['id']}}" method="post">
                    @csrf
                        <button id="delete" name="delete">削除</button>
                    </form>
                </div>
            @endforeach


        </div>

        <footer></footer>
    </body>
</html>
