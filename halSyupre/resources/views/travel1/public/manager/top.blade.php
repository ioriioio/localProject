<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOP</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}store/manage.css">
<link rel="stylesheet" href="{{$cssPath}}store/top.css">


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
                    <li><a href="./SLogout">ログアウト</a></li>
                </ul>
            </div>

            <div id="form">

                <dl>
                    <dt>店舗名</dt>
                    <dd>{{$name}}</dd>

                    <dt>住所</dt>
                    <dd>{{$adressSum}}</dd>

                    <dt>営業時間(ランチ)</dt>
                    <dd>{{$lunchTime}}</dd>

                    <dt>価格(ランチ)</dt>
                    <dd>{{$lunchprice}}</dd>

                    <dt>営業時間(ディナー)</dt>
                    <dd>{{$dinnerTime}}</dd>

                    <dt>価格(ディナー)</dt>
                    <dd>{{$dinnerprice}}</dd>

                    <dt>座席数</dt>
                    <dd>{{$seat}}</dd>

                    <dt>駐車場</dt>
                    <dd>{{$carStay}}</dd>


                    <dt>喫煙</dt>
                    <dd>{{$smoke}}</dd>

                    <dt>クレジットカード利用</dt>
                    <dd>{{$cash}}</dd>
                </dl>
            </div>
        </div>
    </body>
</html>