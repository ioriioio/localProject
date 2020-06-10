<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>映画詳細</title>

</head>
<body>

<div class="header-container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <a class="navbar-brand" href="./../index.html" >HAlシネマ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./../index.html" style="">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./../view/schedule/schedule.html" style="">上映時間 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./community/communityTop.html">掲示板</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="./register.html"><button type="button" class="btn btn-danger" style="margin-right: 1rem;">
                    会員登録
                </button></a>
                <input class="form-control mr-sm-2" type="search" placeholder="気になる映画を検索" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">検索</button>
            </form>

        </div>
    </nav>
</div>

    <div class="body">
        <div class="card "  style="width: 70%; padding: 1rem ;margin: 0 auto; margin-top: 2rem">
            <img src="community/img/movie.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">映画名</h5>
                <p>天気の子</p>
                <h5>上映期間</h5>
                <p>7/19~9/30</p>
                <p class="card-text">映画概要</p>
                 <p>僕は帆高。高校一年の夏、家出して東京にきた。
                    外はもう何日も雨ばかり。
                    この天気のせいか、雑誌の取材のバイトで
                    "晴れ女"を探すことになって……。
                    そんな人、いるわけないと思っていたけど、
                    僕は、ふしぎな少女、陽菜さんに出会った。
                    「ねえ、今から晴れるよ」
                    そう言って陽菜さんが祈ると、空から光がさしてきて……
                    もしかして、本物の"晴れ女"!?

                    僕と陽菜さんの、
                    特別な夏がはじまる──！
                </p>
                <a href="./../view/schedule/schedule.html" class="btn btn-danger" style="margin-top: 2rem">スケジュールへ</a>
            </div>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="./../js/reg.js"></script>
</body>
</html>