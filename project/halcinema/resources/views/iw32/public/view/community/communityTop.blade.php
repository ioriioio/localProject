<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/view/community/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/view/community/css/communityTop.css">
    <title>コミュニティトップ</title>
</head>
<body>
<div class="header-container sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/halcinema/public/">HAlシネマ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/halcinema/public/" style="">ホーム <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./calendar" style="">上映時間 <span class="sr-only">(current)</span></a>
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
            <div class="header">
                <div>
                    <h1>掲示板</h1>
                    <p>映画への感想や、映画について語り合いたい方は下記の映画名をクリックorタップしてください</p>
                </div>
            </div>
        </header>
        <section>
            <div class="community table-responsive">
              <form class="" action="{{action('UbordsController@index')}}" method="post">

                <h2>コミュニティ一覧</h2>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">掲示板名</th>
                        </tr>
                    </thead>

                    <tbody>



                      @foreach($lists as $list)
                        <tr>
                            <td scope="row">{{$list['id']}}</td>

                            <td><a href="communityBoard/{{$list['id']}}">{{$list['title']}}</a></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </div>

  </form>

</body>
</html>
