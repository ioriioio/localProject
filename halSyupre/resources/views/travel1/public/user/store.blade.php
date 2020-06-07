<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お店検索</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}store.css">

<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>

</head>
    <body>
        <header>
            <div id="title">
                <h1>日本の食</h1>

                <div id="loginStatus">
                @isset($name)
                    <p id="user">{{$name}}</p>
                    <a href="../usercheck">予約確認</a><br>
                    <a href="../logout">ログアウト</a>
                @else
                    <a href="../login">ログイン</a>
                    <br>
                @endisset
                </div>
            </div>
            <ul>
                <li><a href="../">TOP</a></li>
                <li><a href="../sarch">地方グルメ検索</a></li>
                <li><a href="../content">地方グルメ特集</a></li>
                
            </ul>

        </header>

        <div>

            <section>
                <div id="block">
                    @if($img == "")
                        <p id="pnot">画像は存在しません</p>
                    @else
                        <img src="{{$img}}" id="mainimg" alt="店舗画像">
                        <img src="{{$img2}}" id="mainimg" alt="店舗画像">
                    @endif
                </div>

                <h2>{{$storeName}}</h2>

                <div id="mainContent">
                    <dl>
                        <dt>住所</dt>
                        <dd>
                            {{$adressSum}}<br>
                            {{$adress}}
                        </dd>

                        <dt>ランチ営業時間</dt>
                        <dd>{{$lunchTime}}</dd>

                        <dt>ランチ価格</dt>
                        <dd>{{$lunchprice}}円</dd>

                        <dt>ディナー営業時間</dt>
                        <dd>{{$dinnerTime}}</dd>

                        <dt>ディナー価格</dt>
                        <dd>{{$dinnerprice}}円</dd>

                        <dt>座席</dt>
                        <dd>{{$seat}}席</dd>

                        <dt>駐車場</dt>
                        <dd>{{$carStay}}</dd>

                        <dt>喫煙</dt>
                        <dd>{{$smoke}}</dd>

                        <dt>クレジット決済</dt>
                        <dd>{{$cash}}</dd>
                    </dl>
                </div>

                <h3>予約できるプラン</h3>

                @foreach($store as $content)
                    <div id="subContent">
                        <div  id="imgcon">
                            @if(($content['imgUrl']) == "")
                                <p id="not">画像は存在しません</p>
                            @else
                                <img src="{{$content['imgUrl']}}" alt="">
                            @endif
                        </div>
                      
                        <dl>
                            <dt>料理名</dt>
                            <dd>{{$content['eatName']}}</dd>

                            <dt>価格</dt>
                            <dd>{{$content['price']}}円</dd>

                            <dt>提供時間</dt>
                            <dd>{{$content['offer']}}</dd>
                        </dl>
                        <button class="reserve" id="{{$content['id']}}" value="{{$content['id']}}">予約</button>
                    </div>
                    
                @endforeach

                
            </section>

            <article>
               
            </article>
        </div>

        <!-- モーダル -->

        <div id="modal">
            <div id="cont">
                <div>
                    <h4></h4>

                    <div id="coco"></div>

                    <dl>
                        <dt>御食予定人数</dt>
                        <dd>
                            <select name="sum" id="sum">
                                <option value="">--未定--</option>
                                <option value="1">1名</option>
                                <option value="2">2名</option>
                                <option value="3">3名</option>
                                <option value="4">4名</option>
                                <option value="5">5名</option>
                                <option value="6">6名</option>
                                <option value="7">7名</option>
                                <option value="8">8名</option>
                                <option value="9">9名</option>
                                <option value="10">10名</option>
                                <option value="11">11名</option>
                                <option value="12">12名</option>
                                <option value="13">13名</option>
                                <option value="14">14名</option>
                                <option value="15">15名</option>
                                <option value="16">16名</option>
                                <option value="17">17名</option>
                                <option value="18">18名</option>
                                <option value="19">19名</option>
                                <option value="20">20名</option>
                            </select><br>
                        </dd>

                        <dt>御食予定日</dt>
                        <dd>
                            <input type="date" id="date">
                        </dd>

                        <dt>御食予定時間</dt>
                        <dd>
                        <select name="time1" id="time1" class="time1">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                        </select>
                        :
                        <select name="time2" id="time2" class="time2">
                            <option value="00">00</option>
                            <option value="15">15</option>
                            <option value="30">30</option>
                            <option value="45">45</option>
                        </select> 
                        </dd>

                          
                    </dl>

                    <button id="complete">予約</button>
                </div>


            </div>
        </div>

        <script>//モーダル処理
            var data = [];
            var dataid;
            $('.reserve').on('click',function(){
                $('#modal').addClass("output");

                var value  = $(this).val();
                data = {
                    idEat: value,
                    name: $('h2').text()
                }
                console.log(data);


                //ajax
                $.ajax({
                    type: 'get',
                    datatype: 'json',
                    url: './../getReserve/',
                    data: data
                })
                .done(function(data){
                    console.log("success");
                    console.log(data);
                    //ajax送信

                    $('h4').text(data["eatName"])

                    $('#coco').text(data["price"] + "円")

                    dataid = data["id"];
                    
                })
                .fail(function(xhr,status,error){
                    console.log("error=" + error);
                })
                .always(function(xhr,status,error){
                    console.log("fin");
                })
            });

            $('#modal').on('click',function(){
                $('#modal').removeClass("output");
            });

            $('#modal').click(function () {
                // 背景がクリックされたら、ウィンドウを閉じる
                $('#modal').hide();
                return false;
            });

            $('#cont').click(function (event) {
                // ウィンドウの中身をクリックしても、閉じないようにする
                // (親である .windowBg への伝播を止める)
                event.stopPropagation();
            });

            var reserve = [];
            $('#complete').on('click',function(){
                console.log('予約')

                reserve = {
                    userName : $('#user').text(),
                    storeId : '{{$id}}',
                    reserveId : dataid,
                    sum : $('#sum option:selected').val(),
                    date : $('#date').val(),
                    time1 : $('#time1 option:selected').val(),
                    time2 : $('#time2 option:selected').val(),
                    
                }

                console.log(reserve)

                //ajax
                $.ajax({
                    type: 'get',
                    datatype: 'json',
                    url: './../storeInsert/',
                    data: reserve
                })
                .done(function(data){
                    console.log("success");
                    console.log(data);
                    //ajax送信
                    
                    alert("予約が確定しました");
                    $('#modal').removeClass("output");
                })
                .fail(function(xhr,status,error){
                    console.log("error=" + error);
                })
                .always(function(xhr,status,error){
                    console.log("fin");
                })
            })
        </script>

        <footer></footer>
    </body>
</html>