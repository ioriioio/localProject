<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お店検索</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}serchRestaurant.css">
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
            <section id="sarchTab">

                <div id="search">
                    <dl>
                        <dt>店舗名検索</dt>
                        <dd><input type="text" id="free"></dd>
                    </dl>
                    <button id="sarch">検索</button>
                </div>

       
            </section>

            <section>
                <h2>表示件数: {{$count}}件</h2>

                <div id="searchResults">
                    @foreach($store as $items)
                    
                    <div id="resultContent">
                        <div id="imgcon">
                            @if(($items['img']) == "")
                                <p id="pnot">画像は存在しません</p>
                            @else
                                <img src="{{$items['img']}}" id="mainimg" alt="店舗画像">
                            @endif
                        </div>

                        <a href="store/{{$items['name']}}"></a>
                        <dl id="content">
                            <dt id="storeName">店舗名</dt>
                            <dd id="storeName">{{$items['name']}}</dd>

                            <dt>住所</dt>
                            <dd>
                                {{$items['adressSum']}}<br>
                                {{$items['adress']}}
                            </dd>

                
                
                            <dt>営業時間</dt>
                            <dd>
                                {{$items['lunchTime']}}<br>
                                {{$items['dinnerTime']}}
                            </dd>

                            <dt>料金予算</dt>
                            <dd>
                                ランチ:　{{$items['lunchprice']}}円<br>
                                ディナー:　{{$items['dinnerprice']}}円
                            </dd>

                        </dl>
                    </div>
                    @endforeach

                </div>
            </section>

            <article>
               
            </article>
        </div>

        <script>
            var sarch = [];
            $('#sarch').on('click', function(){
                console.log($('#free').val());

                sarch = {
                    free : $('#free').val()
                }

                //ajax
                $.ajax({
                    type: 'get',
                    datatype: 'json',
                    url: './sarchText',
                    data: sarch
                })
                .done(function(data){
                    console.log("success");
                    //ajax送信
                    
                    $('#searchResults').empty()
                    $('h2').text("表示件数: " + data['count'] + "件")
                    var count = data['count'];
                    var content = data['store'];
                    console.log(content)
                    
                    for (var i in content){
                        console.log(content[i]['img'])
                        if(content[i]['img'] === ""){
                            img = '<p id="pnot">画像は存在しません</p>'
                        }
                        else{
                            img = '<img src="' + content[i]['img'] + '" id="mainimg" alt="店舗画像">'
                        }
                        
                        $('#searchResults').append('<div id="resultContent">' + img + '<a href="store/' + content[i]['name'] + '"></a><dl id="content"><dt id="storeName">店舗名</dt><dd id="storeName">' + content[i]['name'] + '</dd><dt>住所</dt><dd>' + content[i]['adressSum'] + '<br>' + content[i]['adress'] + '</dd><dt>営業時間</dt><dd>' + content[i]['lunchTime'] + '<br>' + content[i]['dinnerTime'] + '</dd><dt>料金予算</dt><dd>ランチ:　' + content[i]['lunchprice'] + '円<br>ディナー:　' + content[i]['dinnerprice'] + '円</dd></dl></div>')                        
                    }
                })
                .fail(function(xhr,status,error){
                    console.log("error=" + error);
                })
                .always(function(xhr,status,error){
                    console.log("fin");
                })
            });
        </script>

        <footer></footer>
    </body>
</html>