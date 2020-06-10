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
        <li>a</li>
    </ol>
    <div class="col container w-50 border mt-5">
        <h2 class="text-center">確認</h2>
        <dl class="d-flex align-items-center flex-wrap">
            <dt class="w-50">映画タイトル</dt>
                <dd class="w-50">{{$contents['title']}}</dd>
            <dt class="w-50">監督名</dt>
                <dd class="w-50">{{$contents['director']}}</dd>
            <dt class="w-50">主役</dt>
                <dd class="w-50">{{$contents['actor']}}</dd>
            <dt class="w-50">画像</dt>
                <dd class="w-50">{{$imageName}}</dd>
            <dt class="w-50">上映時間</dt>
                <dd class="w-50">{{$contents['time']}}:{{$contents['minute']}}</dd>
            <dt class="w-50">制作年月日</dt>
                <dd class="w-50">{{$contents['screen_time']}}</dd>
            <dt class="w-50">あらすじ</dt>
                <dd class="w-50">{{$contents['info']}}</dd>
        </dl>
        <form action="upmovieinsert" method="post" class="d-flex align-items-center flex-wrap">
            @csrf
            <input type="hidden" value="{{$contents['title']}}" name="title">
            <input type="hidden" value="{{$contents['director']}}" name="director">
            <input type="hidden" value="{{$contents['actor']}}" name="actor">
{{--            <input type="file" value="{{$contents['image']}}" name="image" style="display: none">--}}
            <input type="hidden" value="{{$imageName}}" name="image">
            <input type="hidden" value="{{$contents['time']}}" name="time">
            <input type="hidden" value="{{$contents['minute']}}" name="minute">
            <input type="hidden" value="{{$contents['screen_time']}}" name="screen_time">
            <input type="hidden" value="{{$contents['info']}}" name="info">
            <button name="back" formaction="upmovie" class="btn btn-light text-center">戻る</button>
            <button class="btn btn-primary text-center" formaction="upmovieInsert">確認</button>

        </form>
    </div>
</main>
<script>

</script>
<script type="text/javascript" src="/halcinema/resources/views/admin/js/main.js" class="view-script"></script>
<script type="text/javascript" src="/halcinema/resources/views/admin/vender/js/Chart.min.js" class="view-script"></script>
<script type="text/javascript" src="/halcinema/resources/views/admin/vendors/@coreui/coreui-plugin-chartjs-custom-tooltips/js/custom-tooltips.min.js" class="view-script"></script>