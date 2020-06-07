<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>TOP</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}main.css">
<link rel="stylesheet" href="{{$cssPath}}sarchTab.css">

<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
<script>

    $(function() {
        //クリックしたときのファンクションをまとめて指定
        $('.tab li').click(function() {

            //.index()を使いクリックされたタブが何番目かを調べ、
            //indexという変数に代入します。
            var index = $('.tab li').index(this);

            //コンテンツを一度すべて非表示にし、
            $('.content li').css('display','none');

            //クリックされたタブと同じ順番のコンテンツを表示します。
            $('.content li').eq(index).css('display','block');

            //一度タブについているクラスselectを消し、
            $('.tab li').removeClass('select');

            //クリックされたタブのみにクラスselectをつけます。
            $(this).addClass('select')
        });
    });
</script>
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
            <div id="topimg">
                <img src="{{$imgPath}}top.jpg" id="topImg" alt="top画像" >
            </div>
            <!-- <section id="sarchTab">

                <ul class="tab">
                    <li class="select">フリーワード検索</li>
                    <li>詳細検索</li>
                </ul>

                <ul class="content">
                    <li>
                        <div id="search">
                            <input type="text">
                            <a href="#" class="btn-square">検索</a>
                        </div>
                    </li>

                    <li class="hide">
                        <div id="search2">
                            <label for="">都道府県:</label>
                            <select name="tripproces" id="tripproces">
                                <option value="">--未選択--</option>
                                <option value="1">北海道</option>
                                <option value="47">沖縄</option>
                            </select><br>


                            <label for="">日付:</label>
                            <input type="date">
                            <br>

                            <label for="">御食予定人数:</label>
                            <select name="tripproces" id="tripproces">
                                <option value="">--未定--</option>
                                <option value="1">1名</option>
                                <option value="99">99名</option>
                            </select><br>

                            <label for="">御食事ジャンル:</label>
                            <select name="tripproces" id="tripproces">
                                <option value="">--未選択--</option>
                                <option value="1">d</option>
                                <option value="2">甘味</option>
                                <option value="3">＊</option>
                            </select><br>

                            <a href="#" class="btn-square">検索</a>
                        </div>
                    </li>
                </ul>
            </section>

            <section id="mainContent1">
                おすすめ

                <div>
                </div>
                
            </section>

            <article id="mainContent1">
                期間限定タイムセール

                <div>

                </div>
            </article> -->
        </div>

        <footer></footer>
    </body>
</html>