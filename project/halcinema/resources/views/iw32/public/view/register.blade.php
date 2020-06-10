<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>新規登録</title>
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/css/reg.css" type="text/css">
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
                    <a class="nav-link" href="#" style="">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./" style="">上映時間 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./Ucommunity">掲示板</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <a href="./register"><button type="button" class="btn btn-danger" style="margin-right: 1rem;">
                    会員登録
                </button></a>
                <input class="form-control mr-sm-2" type="search" placeholder="気になる映画を検索" aria-label="Search">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">検索</button>
            </form>

        </div>
    </nav>
</div>

<div class="body">
    <div class="veen">
        <div class="login-btn splits">
            <p>会員の方</p>
            <button class="active">ログイン</button>
        </div>
        <div class="rgstr-btn splits">
            <p>新規登録の方</p>
            <button>新規登録</button>
        </div>
        <div class="wrapper">
            <form id="login" tabindex="500">
                <h3>ログイン</h3>
                <div class="mail" style="margin-bottom: 3rem">
                    <input type="mail" name="" placeholder="">
                    <label>メールアドレス</label>
                </div>
                <div class="passwd">
                    <input type="password" name="">
                    <label>パスワード</label>
                </div>
                <div class="submit">
                    <button class="dark">ログイン</button>
                </div>
            </form>
            <form id="register" tabindex="502">
                <h3>新規登録</h3>
                <div class="name">
                    <input type="text" name="">
                    <label>名前</label>
                </div>
                <div class="mail">
                    <input type="mail" name="">
                    <label>メール</label>
                </div>
                <div class="uid">
                    <input type="text" name="">
                    <label>パスワード</label>
                </div>
                <div class="passwd">
                    <input type="password" name="">
                    <label>パスワード確認</label>
                </div>
                <div class="submit">
                    <button class="dark">確認</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./../js/reg.js"></script>
</body>
</html>