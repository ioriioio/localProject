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
    <title>HALシネマ管理ページ</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/halcinema/resources/views/admin/css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
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
    <link href="/halcinema/resources/views/admin/css/calendar.css" type="text/css" rel="stylesheet">
    <script src="underscore-min.js" type="text/javascript"></script>
    <script src="js/calendar.js" type="text/javascript"></script>
    <script src="bootstrap.js" type="text/javascript"></script>  <!-- Bootstrap 3 -->
<!-- 日本語化用 -->
<script src="js/language/ja-JP.js" type="text/javascript"></script>
<!-- drawer.css -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <!-- jquery & iScroll -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!-- drawer.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<script>
$(document).ready(function() {
  $('.drawer').drawer();
});
</script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
        <header class="app-header navbar">
          <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon">
              
            </span>
          </button>
          <a class="navbar-brand" href="../admin">
              <h3>HALシネマ　管理者システム</h3>
          </a>
          <a class="float-right" href="../logout">ログアウト</a>
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
          <div class="ml-3">
            <a href="../userlist">戻る</a>
          </div>
          <div class="col">
            <h2>ユーザー情報</h2>
            <div>
                <div></div>
                <div>
                    <ul class="list-group">
                        <li class="list-group-item"><span>名前：</span>{{$user['name']}}</li>
                        <li class="list-group-item"><span>メールアドレス：</span>{{$user['email']}}</li>
                    </ul>
                </div>
            </div>

            <h3 id="user">コメント内容</h3>
            <table class="table">
              <tr>
                <th>映画タイトル</th>
                <th>コメント内容</th>
                <th>コメント日時</th>
                <th>通報数</th>
                <th></th>
              </tr>
              @foreach($comments as $comment)
              <tr>
                <td>{{$comment['title']}}</td>
                <td>{{$comment['comment']}}</td>
                <td>{{$comment['created_at']}}</td>
                @if($comment['report'] == null)
                  <td>0</td>
                @else
                  <td>{{$comment['report']}}</td>
                @endif
                <td>
                  <button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$comment['id']}}">削除</button>
                </td>
              </tr>
              @endforeach
            </table>
          </div>
        @foreach($comments as $dele)
            <div class="modal fade" id="exampleModal{{$dele['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">削除確認</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    id:{{$dele['id']}}　コメント:{{$dele['comment']}}<br />
                    を削除してもよろしいでしょうか？
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">閉じる</button>
                    <form action="userCommentDelete/{{$dele['id']}}">
                      <button type="submit" class="btn btn-danger">削除</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
