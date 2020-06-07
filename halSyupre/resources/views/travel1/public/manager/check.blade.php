<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOP</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}store/cusine.css">


<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
</head>
    <body>
        <div id="header"><p>{{$name}}　様</p></div>
        <div id="content">
            <div id="menu">
                <ul>
                    <li><a href="./STop">店舗情報</a></li>
                    <li><a href="./ScuisineInsert">お食事登録</a></li>
                    <li><a href="./Scuisine">お食事一覧</a></li>
                    <li><a href="./SCheck">予約確認</a></li>
                    <li><a href="./SComplet">予約確定</a></li>
                    <li><a href="./SLogout">ログアウト</a></li>
                </ul>
            </div>

            <div id="form">

            <h2>仮予約済一覧</h2>

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

                    <form action="./CheckCheck?check={{$items['id']}}" method="post">
                    @csrf
                        <button id="delete" name="delete">確定</button>
                    </form>

                    <form action="./CheckDelete?dele={{$items['id']}}" method="post">
                    @csrf
                        <button id="delete" name="delete">削除</button>
                    </form>
                </div>
            @endforeach

            </div>
        </div>
    </body>
</html>