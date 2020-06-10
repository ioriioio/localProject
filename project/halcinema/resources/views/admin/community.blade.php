<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v2.1.15
* @link https://coreui.io
* Copyright (c) 2018 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>HALシネマ管理ページ</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <!-- Main styles for this application-->
    <link href="/halcinema/resources/views/admin/css/style.css" rel="stylesheet">
    <link href="/halcinema/resources/views/admin/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      // Shared ID
      gtag('config', 'UA-118965717-3');
      // Bootstrap ID
      gtag('config', 'UA-118965717-5');
    </script>
    <link href="bootstrap.css" type="text/css" rel="stylesheet"> <!-- Bootstrap 3 -->
    <link href="css/calendar.css" type="text/css" rel="stylesheet">
    <script src="underscore-min.js" type="text/javascript"></script>
    <script src="js/calendar.js" type="text/javascript"></script>
    <script src="bootstrap.js" type="text/javascript"></script>  <!-- Bootstrap 3 -->
<!-- 日本語化用 -->
<script src="js/language/ja-JP.js" type="text/javascript"></script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <header class="app-header navbar">
          <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="admin">
              <h3>HALシネマ　管理者システム</h3>
          </a>
          <a class="float-right" href="logout">ログアウト</a>
        </header>
        <div class="sidebar">
          <nav class="sidebar-nav">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="admin">
                  <i class="nav-icon icon-speedometer"></i> Dashboard
                  <span class="badge badge-primary">NEW</span>
                </a>
              </li>
              <li class="nav-title">機能</li>
              <li class="nav-item">
                <a class="nav-link" href="upmovie">
                  <i class="nav-icon icon-drop"></i> 映画登録</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule">
                  <i class="nav-icon icon-pencil"></i> スケジュール登録</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="board">
                  <i class="nav-icon icon-pencil"></i> 掲示板管理</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userlist">
                  <i class="nav-icon icon-pencil"></i> ユーザー管理</a>
              </li>
            </ul>
          </nav>
        </div>
        <main class="main">
          <!-- Breadcrumb-->
          <ol class="breadcrumb">
              <li>a</li>
          </ol>
          @if(session('flashMsg'))
            <ul class="border-dark text-center list-group w-50 mx-auto">
            @foreach(session('msg') as $msg => $value)
              <li class="list-group-item list-group-item-success"><span class="text-dark">{{$msg}}：</span>{{$value}}</li>
            @endforeach
            </ul>
            <p class="text-center">{{session('flashMsg')}}</p>
          @endif
          <div class="col">
            <div class="row" style="margin-bottom: 1rem">
              <div class="col-2">
                <h2>掲示板管理</h2>
              </div>
              <div class="col-10">
                <a href="communityUpload"><button class="btn btn-primary" style="margin-right: 1rem">新規投稿</button></a>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                <tr>
                  <th scope="col">ID</th>
                  <th scope="col">投稿名</th>
                  <th scope="col">投稿時間</th>
                  <th scope="col">操作</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contents as $content)
                  <tr>
                    <td>{{$content->id}}</td>
                    <td>{{$content->title}}</td>
                    <td>{{$content->post_period}}</td>
                    <td>
                      <a href="communityDetail/{{$content->id}}"><button class="btn btn-primary" style="margin: .625rem">詳細</button></a>
                      <button class="btn btn-danger" style="margin: .625rem" data-toggle="modal" data-target="#exampleModal{{$content->id}}">削除</button>
                    </td>
                  </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            @foreach($contents as $dele)
            <div class="modal fade" id="exampleModal{{$dele->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">削除確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    id:{{$dele->id}}　タイトル:{{$dele->title}}<br />
                    を削除してもよろしいでしょうか？
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <form action="communityDelete/{{$dele->id}}">
                       <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            {{$contents->links()}}

            <!-- Modal -->

          </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>