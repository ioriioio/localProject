<html lang="en">
  <head>
      <title>スケジュール管理</title>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <!-- Icons-->
    <link rel="icon" type="image/ico" href="./img/favicon.ico" sizes="any" />
    <link href="node_modules/@coreui/icons/css/coreui-icons.min.css" rel="stylesheet">
    <link href="node_modules/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
    <!-- Main styles for this application-->
    <link href="/halcinema/resources/views/admin/css/style.css" rel="stylesheet">
    <link href="/halcinema/resources/views/admin/vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
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
            @if(session('msg'))
                <ul class="border-dark text-center list-group w-25 mx-auto">
                    @foreach(session('msg') as $key => $value)
                        <li class="list-group-item list-group-item-success"><span class="text-dark">{{$key}}:</span>{{$value}}</li>
                    @endforeach
                </ul>
                <p class="mx-auto w-25 text-center">{{session('flashMsg')}}</p>
            @endif
            @if(session('errorMsg'))
                <ul class="border-dark text-center list-group w-25 mx-auto">
                    @foreach(session('errorMsg') as $key => $value)
                        <li class="list-group-item list-group-item-danger"></span>{{$value}}</li>
                    @endforeach
                </ul>
                <p class="mx-auto w-25 text-center">{{session('validationMsg')}}</p>
            @endif
          <div class="col" id="app">
            <div @click="btnClick">
              <el-calendar v-model="form.date">
              </el-calendar>
            </div>

              @csrf
              <el-dialog title="スケジュール登録" :visible.sync="dialogFormVisible">
                <el-form :model="form" name="schedule">


                    <el-form-item label="上映日" :label-width="formLabelWidth">
                      <el-input v-model="form.date" autocomplete="off" disable name="日付"></el-input>
                    </el-form-item>

                    <el-form-item label="映画名" :label-width="formLabelWidth">
                      <el-input v-model="form.name" autocomplete="off" name="映画名"></el-input>
                    </el-form-item>

                    <el-form-item label="上映時間" :label-width="formLabelWidth">
                      <el-time-picker
                              is-range
                              v-model="form.time"
                              range-separator="~"
                              start-placeholder="上映開始時間"
                              end-placeholder="上映終了時間"
                              value-format="H:m:s"
                              placeholder="作業時間を入力してください"
                              name="始終"
                      >
                      </el-time-picker>
                    </el-form-item>

                    <el-form-item label="スクリーン" :label-width="formLabelWidth">
                      <el-select v-model="form.region" placeholder="スクリーンを選択してください" name="スクリーン番号">
                        <el-option label="スクリーン1" value="screen1"></el-option>
                        <el-option label="スクリーン2" value="screen2"></el-option>
                      </el-select>
                    </el-form-item>

                </el-form>
                  <div slot="footer" class="dialog-footer">
                    <el-button @click="dialogFormVisible = false">取消</el-button>
                    <el-button type="primary" @click="onsubmit">確定</el-button>
                  </div>
              </el-dialog>

          </div>
        </main>

        <script src="https://unpkg.com/vue/dist/vue.js"></script>
        <!-- import JavaScript -->
        <script src="https://unpkg.com/element-ui/lib/index.js"></script>

        <script src="http://unpkg.com/element-ui/lib/umd/locale/ja.js"></script>
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <script type="application/javascript">
          ELEMENT.locale(ELEMENT.lang.ja);

            const add = new Vue({
              el:"#app",
              data:function () {
                  return  {
                    dialogFormVisible: false,
                    form: {
                      date:'',
                      name: '',
                      time: '',
                      region: '',
                      delivery: false,
                      type: [],
                      resource: '',
                      desc: ''
                    },
                    formLabelWidth: '120px'
                  }
              },
              methods:{
                btnClick:function () {
                    var target = $(event.target).attr('class');
                    var tagname = $(event.target).prop('tagName');
                    if (tagname != 'DIV' || target == 'el-calendar__header' || target == 'el-calendar__title' || target == 'el-calendar__body') {
                      this.dialogFormVisible = false;
                    }
                    else{
                      this.dialogFormVisible = true;
                      let a = this.form.date.getFullYear();
                      let b = this.form.date.getMonth();
                      let c = this.form.date.getDate();
                      this.form.date = a +"-"+ (b+1) + "-" + c;
                    }
                },
                onsubmit(){
                  document.schedule.action="scheduleConfirm";
                  document.schedule.method="get";
                  document.schedule.submit();
                }
              }
            });
        </script>
  </body>
</html>