<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログインページ</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}store/manage.css">
<link rel="stylesheet" href="{{$cssPath}}store/insert.css">

<script type="text/javascript" src="{{$jsPath}}jquery-3.3.1.min.js"></script>
</head>
    <body>
        <div id="content">

            <div id="form">
                <h1>店舗基本情報登録</h1>
                <form method="post" enctype="multipart/form-data" action="./SInsert">
                @csrf
                    <div id="formblock">
                        <div class="form-item">
                            <label for="name">店舗名</label>
                            <input type="text" name="name" id="name" required="required" placeholder="例) マクドナルド">
                        </div>

                        <div class="form-item">
                            <label for="email">ログインパスワード</label>
                            <input type="password" name="pass" id="pass" required="required" placeholder="例) ooo000">
                        </div>

                        <div class="form-item">
                            <label for="email">店舗郵便番号(ハイフン省略)</label>
                            <input type="text" name="adressSum" id="adressSum" required="required" placeholder="例) 6899999">
                        </div>

                        <div class="form-item">
                            <label for="email">店舗住所</label>
                            <input type="text" name="adress" id="adress" required="required" placeholder="例) 大阪府大阪市XXXX丁目xxx番">
                        </div>

                        <div class="form-radio">
                            <label for="tel">営業時間(ランチ)</label>
                            <div>
                                <select name="lunchTime1" id="lunchTime1">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="lunchTime2" id="lunchTime2">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                                
                                〜

                                <select name="lunchTime3" id="lunchTime3">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="lunchTime4" id="lunchTime4">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>　　
                                (　ラストオーダー　

                                <select name="lunchTime5" id="lunchTime5">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="lunchTime6" id="lunchTime6">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                                )
                            </div>
                        </div>

                        <div class="form-item">
                            <label for="pass">料金帯(ディナー料金)</label>
                            <input type="text" name="lunchprice" id="lunchprice" required="required" placeholder="例) 1000">
                        </div>

                        <div class="form-radio">
                            <label for="tel">営業時間(ディナー)</label>
                            <div>
                                <select name="dinnerTime1" id="dinnerTime1">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="dinnerTime2" id="dinnerTime2">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                                
                                〜

                                <select name="dinnerTime3" id="dinnerTime3">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="dinnerTime4" id="dinnerTime4">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>　　
                                (　ラストオーダー　

                                <select name="dinnerTime5" id="dinnerTime5">
                                    @for($i = 0; $i < 25; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                                :
                                <select name="dinnerTime6" id="dinnerTime6">
                                    <option value="00">00</option>
                                    <option value="15">15</option>
                                    <option value="30">30</option>
                                    <option value="45">45</option>
                                </select>
                                )
                            </div>
                        </div>

                        <div class="form-item">
                            <label for="pass">料金帯(ディナー料金)</label>
                            <input type="text" name="dinnerprice" id="dinnerprice" required="required" placeholder="例) 3000">
                        </div>

                        <div class="form-item">
                            <label for="VerificationPass">客席数</label>
                            <input type="text" name="seat" required="seat" placeholder="例) 100">
                        </div>

                        <div class="form-radio">
                            <label for="">駐車場完備</label>
                            <div>
                                <label><input type="radio" name="carStay" value="0">無</label>
                                <label><input type="radio" name="carStay" value="1">有</label>
                            </div>
                        </div>

                        <div id="carSum"></div>

                        <div class="form-radio">
                            <label for="">喫煙</label>
                            <div>
                                <label><input type="radio" name="smoke" value="0">不可</label>
                                <label><input type="radio" name="smoke" value="1">可</label>
                            </div>
                        </div>

                        <div class="form-radio">
                            <label for="">クレジットカード利用</label>
                            <div>
                                <label><input type="radio" name="cash" value="0">不可</label>
                                <label><input type="radio" name="cash" value="1">可</label>
                            </div>
                        </div>

                        <div class="form-radio">
                            <label>店舗写真</label>
                            <div>
                            <input type="file" id="image1" name="image1">
                            </div>
                            <!-- <img id="preview"> -->
                        </div>

                        <div class="form-radio">
                            <label>店舗写真</label>
                            <div>
                            <input type="file" id="image2" name="image2">
                            </div>
                            <!-- <img id="preview"> -->
                        </div>
                    </div>


                    <div class="button-panel">

                        <!-- モーダルボタン -->
                            <button class="submitButton">確認</button>
                    </div>
                </form>

                <script>
                    $('[name=carStay]').click(function() {
                        $('#carSum').empty();
                        if ($('input[name=carStay]:eq(1)').prop('checked')) {
                            $('#carSum').append('<div class="form-item"><label for="">駐車利用可能台数</label><input type="text" name="carSums" required="carSums" placeholder="例) 100"</div>');
                        }
                    })
                </script>
            </div>
        </div>
    </body>
</html>