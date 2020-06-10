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
    <link rel="stylesheet" href="/halcinema/resources/views/admin/css/movieregistrationscreen.css">
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/halcinema/resources/views/admin/css/style.css" rel="stylesheet">
    <link href="/halcinema/resources/views/admin/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
      <script href="/halcinema/resources/views/admin/js/jquery-3.3.1.min.js"></script>
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
                <ul class="m-0 p-0 text-success border border-success col-5 mx-auto">
                    @foreach(session('flashMsg') as $key=>$value)
                        <li class="m-0 p-0">{{$key}}：{{$value}}</li>
                    @endforeach
                </ul>
                <p class="col-5 mx-auto">以上を追加しました。</p>
            @endif
                <div class="col container w-50">
                    <form method="POST" action="upmovieConfirm" enctype="multipart/form-data">
                        @csrf
                      <ul>
                          <h2>映画登録画面</h2>
                          <li>
                              映画タイトル名<br>
                              <input id="name" type="text" name="title"  class="form-control" @isset($back) value="{{$back['title']}}" @endisset required>
                          </li>
                          <li>
                              監督名<br>
                              <input id="email" type="text" name="director" class="form-control"  @isset($back) value="{{$back['director']}}" @endisset required>
                          </li>
                          <li>
                              主役<br />
                              <input type="text" class="form-control" name="actor" @isset($back) value="{{$back['actor']}}" @endisset required>
                          </li>
                          <li>
                            写真
                              <br>
                              <div class="input-group">
                                  <input type="file" name="image"  accept="image/png, image/jpeg" required>
                                  @isset($msg)
                                    <span class="text-danger">{{$msg}}</span>
                                  @endisset
                              </div>
                            </li>
                          <li>
                              上映時間<br>
                              <select name="time" id="" class="w-25 text-center">
                                  @for($i = 1; $i<= 24 ; $i++)
                                    <option value="{{$i}}"  @isset($back) @if($back['time'] == $i) selected @endif @endisset>{{$i}}</option>
                                  @endfor
                              </select>
                              :
                              <select name="minute" id="" class="w-25 text-center">
                                  @for($i = 1; $i<=60; $i++)
                                      <option value="{{$i}}"  @isset($back) @if($back['minute'] == $i) selected @endif @endisset>{{$i}}</option>
                                  @endfor
                              </select>

                          </li>
                          <li>
                            制作年月日<br>
                            <input type="date" name="screen_time"  @isset($back) value="{{$back['screen_time']}}" @endisset required>
                          </li>

                          <li>
                            あらすじ<br>
                            <textarea row="9" cols="70" class="form-control" name="info" @isset($back)value="{{$back['info']}}" @endisset required>@isset($back) {{$back['info']}} @endisset</textarea>
                          </li>
                          <li class="text-center mt-1">
                              <input id="button" type="submit" name="button" value="登録" class="btn btn-primary shadow-sm">
                          </li>
                      </ul>
                  </form>
                </div>
              </main>
        <script>

        </script>
        <script type="text/javascript" src="/halcinema/resources/views/admin/js/main.js" class="view-script"></script>
        <script type="text/javascript" src="/halcinema/resources/views/admin/vender/js/Chart.min.js" class="view-script"></script>
        <script type="text/javascript" src="/halcinema/resources/views/admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js" class="view-script"></script>