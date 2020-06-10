<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>トップページ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/css/style.css">
    <style>

    </style>
</head>

<body>

<div class="header-container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./">HAlシネマ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./" style="">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./calendar" style="">上映時間 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Ucommunity">掲示板</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="./register"><button type="button" class="btn btn-danger" style="margin-right: 1rem;">
                        会員登録
                    </button></a>
            </form>
        </div>
    </nav>
</div>

    <div class="promotion-carousel">
        <div>
            <div class="promotion" id="section1" style="background-image: url(/halcinema/resources/views/iw32/public/view/community/img/movie.png)">
                <div class="shade"></div>
                <div class="promo-detail cycle-overlay">
                    <div class="promo-text">
                        <span class="dash"></span>
                        <span class="promo-flag">掲示板</span>
                        <a href="./Ucommunity" class="copy">
                            <div class="headline">Community</div>
                            <p class="body long">映画について語り合いたい方</p>
                        </a>
                        <div class="buttons">
                            <a class="button sho-play-link" href="./Ucommunity">詳しく</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="promotion" id="section2" style="background-image: url(/halcinema/resources/views/iw32/public/image/319-1440x900.jpg)">
                <div class="shade"></div>
                <div class="promo-detail cycle-overlay">
                    <div class="promo-text">
                        <span class="dash"></span>
                        <span class="promo-flag">スケジュール</span>
                        <a href="./calender" class="copy">
                            <div class="headline">Calender</div>
                            <p class="body long">この映画館で放映される映画をみたい方</p>
                        </a>
                        <div class="buttons">
                            <a class="button info-button" href="./calender">詳しく</a>
                        </div>
                    </div>
                </div>
            </div>


    <div class="navigation">
        <ul>
            <li><a href="#section1" data-number="1"></a></li>
            <li><a href="#section2" data-number="2"></a></li>
        </ul>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="/halcinema/resources/views/iw32/public/js/index.js"></script>
</body>
</html>