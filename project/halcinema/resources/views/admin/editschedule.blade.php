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
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/schedule.css">
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
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
                <a class="nav-link" href="admin.html">
                  <i class="nav-icon icon-speedometer"></i> Dashboard
                  <span class="badge badge-primary">NEW</span>
                </a>
              </li>
              <li class="nav-title">機能</li>
              <li class="nav-item">
                <a class="nav-link" href="upmovie.html">
                  <i class="nav-icon icon-drop"></i> 映画登録</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="schedule.html">
                  <i class="nav-icon icon-pencil"></i> スケジュール登録</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="community.html">
                  <i class="nav-icon icon-pencil"></i> 掲示板管理</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userlist.html">
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
            <h2>スケジュール編集</h2>
            <!--ここに書く-->
            <form  class="form-inline" >

              <img src="img\weak_schedule_excel_437-600x776.png">
              <ul>
                  <li class="text">
                      映画名<br>
                      <input id="" type="butoon" name="" >
                  </li>
                  <li class="text">
                      スクリーンID<br>
                      <input id="" type="text" name="">
                  </li>
                  <li class="text">
                      スケジュールID<br>
                      <input type="text" name="" >
                    </li>
                  <li class="text">
                      日付<br>
                    <input type="date" name="calendar" max="9999-12-31">

                  </li>
                  <li class="text">
                    上映時間<br>
                    <input type="time" name="" value="">
                  </li>
                  <li class="text">
                    上映開始時間<br>
                    <input type="time" name="" value="">
                  </li>
                  <li class="text">
                    上映終了時間<br>
                    <input type="time" name="" value="">

                  </li>

                  <li>
                    <input id="button" type="submit" name="button" value="登録">
                  </li>
              </ul>
            </form>

          </div>
        </main>
