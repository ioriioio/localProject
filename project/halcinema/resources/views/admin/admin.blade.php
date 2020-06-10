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
    <link href="/halcinema/node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="/halcinema/node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="/halcinema/node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/halcinema/node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
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
    <link href="/halcinema/resources/views/admin/css/calendar.css" type="text/css" rel="stylesheet">
    <script src="underscore-min.js" type="text/javascript"></script>
    <script src="js/calendar.js" type="text/javascript"></script>
    <script src="bootstrap.js" type="text/javascript"></script>  <!-- Bootstrap 3 -->
<!-- 日本語化用 -->
<script src="js/language/ja-JP.js" type="text/javascript"></script>
  </head>
  <body class="app header-fixed sidebar-fixed aside-menu-fixed sidebar-lg-show">
  @csrf
        <header class="app-header navbar">
          <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="admin">
              <h3>HALシネマ　管理者システム</h3>
          </a>
          <a class="float-right" href="login">ログアウト</a>
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
              <li></li>
          </ol>
          <div class="col">
            <h2>更新履歴</h2>
            {{$histories->links()}}
            <table class="table">
              <tr>
                <th>更新内容</th>
                <th>更新日</th>
                <th>更新者</th>
              </tr>
            @foreach($histories as $con)
              <tr>
                <td>{{$con->content}}</td>
                <td>{{$con->update_at}}</td>
                <td>admin</td>
              </tr>
              @endforeach
            </table>
          </div>
        </main>