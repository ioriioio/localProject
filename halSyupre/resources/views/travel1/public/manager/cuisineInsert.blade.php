<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>ログインページ</title>
<link rel="stylesheet" href="{{$cssPath}}html5reset-1.6.1.css">
<link rel="stylesheet" href="{{$cssPath}}header.css">
<link rel="stylesheet" href="{{$cssPath}}store/manage.css">
<link rel="stylesheet" href="{{$cssPath}}store/storeinsert.css">
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
                <h2>お食事登録</h2>

                <form method="post" enctype="multipart/form-data" action="./ScuisineInsert">
                @csrf
                    <div id="formblock">

                        まとめて
                        <select name="count" id="count">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                        件追加

                        <div class="form-item">
                            <label for="name">お食事名所</label>
                            <input type="text" name="name" id="name" required="required" placeholder="例) 白ご飯">
                        </div>

                        <div class="form-item">
                            <label for="price">料金</label>
                            <input type="text" name="price" id="price" required="required" placeholder="例) 500">
                        </div>

                        <div class="form-radio">
                            <label for="">提供時間帯</label>
                            <div>
                                <label><input type="radio" name="offer" value="0">ランチ</label>
                                <label><input type="radio" name="offer" value="1">ディナー</label>
                                <label><input type="radio" name="offer" value="2">どちらも</label>
                            </div>
                        </div>

                        <div class="form-radio">
                            <label>お料理写真</label>
                            <div>
                            <input type="file" id="image" name="image">
                            </div>
                            <!-- <img id="preview"> -->
                        </div>
                    </div>


                    <div id="subformblock"></div>

                    <div class="button-panel">
                        <button class="submitButton">確認</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
            $('#count').change(function(){

                $('#subformblock').empty('');
                var val = $('option:selected').val();
                if(1<val){
                    for(i=2; i<=val; i++){
                        $('#subformblock').append('<div id="subitem"><div class="form-item"><label for="name">お食事名所</label><input type="text" name="name'+i+'" id="name'+i+'" required="required" placeholder="例) 白ご飯"></div><div class="form-item"><label for="price">料金</label><input type="text" name="price'+i+'" id="price'+i+'" required="required" placeholder="例) 500"></div><div class="form-radio"><label for="">提供時間帯</label><div><label><input type="radio" name="offer'+i+'" value="0">ランチ</label><label><input type="radio" name="offer'+i+'" value="1">ディナー</label><label><input type="radio" name="offer'+i+'" value="1">どちらも</label></div></div><div class="form-radio"><label>お料理写真</label><div><input type="file" id="image'+i+'" name="image'+i+'" accept="image/*"></div></div></div>');
                    }
                }
            })
        </script>
    </body>
</html>