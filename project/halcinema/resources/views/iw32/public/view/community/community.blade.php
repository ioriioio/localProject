<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <title>プロトタイプ版　コミュニティー</title>
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/view/community/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/view/community/css/community.css">
</head>
<body>
<div class="header-container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="./../">HAlシネマ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="./.." style="">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./../calendar" style="">上映時間 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">掲示板</a>
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
    <div id="wrapper">

        <header>
            <div class="movieCon">
              <!-- 掲示板たいとる（title） -->
                <h3>{{$lists['title']}}</h3>
                <!-- 掲示板情報（info） -->
                <p>{{$lists['info']}}</p>
            </div>
        </header>
        <hr>

        <div id="contents">
        <h2>視聴者のコメント</h2>
        <!-- foreachここから -->
    @foreach($comments as $comment)
            <div class="flexCon">
                <div class="comuName">
                  <!-- ユーザーネーム -->
                    <p>{{$comment['user_name']}}</p>
                    <!-- 更新日時 -->
                    <p>{{$comment['created_at']}}</p>
                </div>
                <div class="comuBox">
                    <div class="comuCom">
                      <!-- こめんと -->
                        <p>{{$comment['comment']}}</p>
                    </div>
                </div>
                <div class="comuRep">
                    <button class="repo">通報する</button>
                </div>
            </div>
            @endforeach
            <!-- endforeachここまで -->


        <hr>

        <button type="button" class="btn btn-primary" id="comBtn" data-toggle="modal" data-target="#exampleModalCenter">
            ＋投稿する
        </button>

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">記入欄</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                  <form class="" action="../communityInsert/{{$lists['id']}}" method="post">
                    @csrf
                    <div class="modal-body">
                      <span>ユーザ名</span>
                      <input type="text" name="name" value="">
                        <textarea name="comment" id="aa" cols="30" rows="10" placeholder="意見感想をお書きください"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                        <!-- 変更クリックしたらDBにほぞん -->
                        <button type="submit" class="btn btn-primary">変更を保存</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
