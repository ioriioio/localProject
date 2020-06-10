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
    <link rel="stylesheet" href="/halcinema/resources/views/admin/css/movieregistrationscreen.css">

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
          <div class="col">
            <div class="row" style="margin-bottom: 1rem">
              <div class="col-2">
                <h2>掲示板管理</h2>
                <a href="board">戻る</a>
              </div>
            </div>
            <div class="col container w-50">
              <form method="POST" action="communityUploadConfirm" enctype="multipart/form-data">
                @csrf
                <ul>
                  <h2>映画登録画面</h2>
                  <li>
                    掲示板タイトル<br>
                    <input id="name" type="text" name="title"  class="form-control" @isset($back) value="{{$back['title']}}" @endisset required>
                  </li>
                  <li>
                    カテゴリー名<br>
                    <input id="email" type="text" name="category" class="form-control"  @isset($back) value="{{$back['category']}}" @endisset required>
                  </li>
                  </li>
                  <li class="text-center mt-1">
                    <input id="button" type="submit" name="button" value="登録" class="btn btn-primary shadow-sm">
                  </li>
                </ul>
              </form>
            </div>
          </div>
        </main>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>