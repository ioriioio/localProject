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

            <h2>メニュー登録済一覧</h2>

            @foreach($eats as $items)
                <div id="block">
                    @if(($items['imgUrl']) == "")
                        <p id="not">画像は存在しません</p>
                    @else
                        <img src="{{$items['imgUrl']}}" alt="">
                    @endif
                    <dl>
                        <dt>料理名</dt>
                        <dd>{{$items['eatName']}}</dd>

                        <dt>価格</dt>
                        <dd>{{$items['price']}}円</dd>

                        <dt>提供時間</dt>
                        <dd>{{$items['offer']}}</dd>

                    </dl>
                    <form action="./ScuisineDelete?dele={{$items['id']}}" method="post">
                    @csrf
                        <button id="delete" name="delete">削除</button>
                    </form>
                </div>
            @endforeach

            </div>
        </div>
    </body>
</html>