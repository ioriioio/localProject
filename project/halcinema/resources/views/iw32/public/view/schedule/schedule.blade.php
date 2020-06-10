<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="/halcinema/resources/views/iw32/public/view/schedule/style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Main styles for this application-->
    <link href="css/style.css" rel="stylesheet">
    <link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
    
        <!-- Global site tag (gtag.js) - Google Analytics-->
        <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
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
    
    <script type="text/javascript">
            $(function(){
                var now = new Date();
                var year = now.getFullYear();
                var mon = now.getMonth()+1; //１を足すこと
                var day = now.getDate();
                var hour = now.getHours();
                var min = now.getMinutes();
                var sec = now.getSeconds();
            
                //出力用
                var s = year + "/" + mon + "/" + day;

            })
    </script>

    <title></title>
</head>
    <body>

    <div class="header-container sticky-top">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
                <a class="navbar-brand" href="/halcinema/public" >HAlシネマ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/halcinema/public" style="">ホーム <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" style="">上映時間 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Ucommunity">掲示板</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <a href="./../../view/register.html"><button type="button" class="btn btn-danger" style="margin-right: 1rem;">
                            会員登録
                        </button></a>
                        <input class="form-control mr-sm-2" type="search" placeholder="気になる映画を検索" aria-label="Search">
                        <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">検索</button>
                    </form>
                </div>
            </nav>
        </div>


        <main class="main">
            <!-- Breadcrumb-->
            <!-- <ol class="breadcrumb">
                <h1>上映スケジュール</h1>
            </ol> -->
            <div class="col" id="app">
              <div @click="btnClick" class='click'>
                <el-calendar v-model="form.date">
                </el-calendar>
              </div>
  
              <!-- <el-dialog title="スケジュール確認" :visible.sync="dialogFormVisible">
                <el-p id="selectday"></el-p>
              </el-dialog> -->
  
            </div>
          </main>
          
          <script src="https://unpkg.com/vue/dist/vue.js"></script>
          <!-- import JavaScript -->
          <script src="https://unpkg.com/element-ui/lib/index.js"></script>
  
          <script src="http://unpkg.com/element-ui/lib/umd/locale/ja.js"></script>

          <script type="application/javascript">            
            ELEMENT.locale(ELEMENT.lang.ja);
  
              const add = new Vue({
                el:"#app",
                data:function () {
                    return  {
                      dialogFormVisible: false,
                      workTime:'',
                      form: {
                        date:'',
                        name: '',
                        region: '',
                        date1: '',
                        date2: '',
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
                    this.dialogFormVisible = true;
                    let a = this.form.date.getFullYear();
                    let b = this.form.date.getMonth();
                    let c = this.form.date.getDate();
  
                    this.form.date = a +"/"+ (b+1) + "/" + c;
                    send_date = this.form.date

                    window.location.href = "/halcinema/public/calendarAjax?date="+send_date  ;


                    //ajaxでのデータ送信
                    
                  }
                }
              })
            
            // function plotres(response, prefix) {
            //     for (var key in response){
            //         if (typeof response[key] == "object") {
            //             if (Array.isArray(response[key])){
            //                 response[key].forEach(function(item){
            //                     plotres(item,prefix+"　"+key);
            //                 });
            //             }
            //             else{
            //                 plotres(response[key],prefix+"　"+key);
            //             }
            //         }
            //         else{
            //             $('.screen2').append("キー："+key+"　値："+response[key]+"<br />");
            //         }
            //     }
            // }
        </script>

        @if(session('date'))
            <h2 id="selectday">{{session('date')}}</h2>
        @else
            <h2 id="selectday">{{$date}}</h2>
        @endif

<div id="schedule">             
    <section id="schedule_1">
        
            <div class="tabs">
                <input id="all" type="radio" name="tab_item" checked>
                <label class="tab_item" for="all">SCREEN1</label>
                <input id="programming" type="radio" name="tab_item">
                <label class="tab_item" for="programming">SCREEN2</label>
                <input id="design" type="radio" name="tab_item">

                <div class="tab_content" id="all_content">
                    <div id="main_sc" class="screen1">
                        @if(session('screen1'))
                            @forelse(session('screen1') as $data1)
                            <div id="sc_vi"> 
                                <img src="/halcinema/storage/app/halcinema/resources/views/image/{{$data1['title']}}.jpg">
                                <div id="sc_1">
                                    <label href="" id="mv_title">{{$data1['title']}}</label>
                                    <p> <br>
                                        監督： {{$data1['director_name']}}<br>
                                        主演： {{$data1['main_actor']}}
                                    </p>
                                </div>
                                <div id="sc_time">
                                    <p>{{mb_substr($data1['start_time'],0,5)}} 〜 {{mb_substr($data1['end_time'],0,5)}}</p>
                                </div>
                            </div>
                        @empty
                            <div id="sc_vi">  
                                <p>上映予定が登録されていません</p>
                            </div>
                        @endforelse
                    @else

                        @forelse($screen1 as $data1)
                            <div id="sc_vi"> 
                                <img src="/halcinema/storage/app/halcinema/resources/views/image/{{$data1['title']}}.jpg">
                                <div id="sc_1">
                                    <label href="" id="mv_title">{{$data1['title']}}</label>
                                    <p> <br>
                                        監督： {{$data1['director_name']}}<br>
                                        主演： {{$data1['main_actor']}}
                                    </p>
                                </div>
                                <div id="sc_time">
                                    <p>{{mb_substr($data1['start_time'],0,5)}} 〜 {{mb_substr($data1['end_time'],0,5)}}</p>
                                </div>
                            </div>
                        @empty
                            <div id="sc_vi">  
                                <p>上映予定が登録されていません</p>
                            </div>
                    @endforelse

                    @endif
                    </div>
                </div>
                <div class="tab_content" id="programming_content">
                    <div id="main_sc" class="screen2">
                        @if(session('screen2'))
                            @forelse(session('screen2') as $data2)
                                <div id="sc_vi"> 
                                    <img src="/halcinema/storage/app/halcinema/resources/views/image/{{$data2['title']}}.jpg">
                                    <div id="sc_1">
                                        <label href="" id="mv_title">{{$data2['title']}}</label>
                                        <p> <br>
                                            監督： {{$data2['director_name']}}<br>
                                            主演： {{$data2['main_actor']}}
                                        </p>
                                    </div>
                                    <div id="sc_time">
                                        <p>{{mb_substr($data2['start_time'],0,5)}} 〜 {{mb_substr($data2['end_time'],0,5)}}</p>
                                    </div>
                                </div>
                            @empty
                                <div id="sc_vi">  
                                    <p>上映予定が登録されていません</p>
                                </div>
                            @endforelse
                        @else
                            @forelse($screen2 as $data2)
                                <div id="sc_vi"> 
                                    <img src="/halcinema/storage/app/halcinema/resources/views/image/{{$data2['title']}}.jpg">
                                    <div id="sc_1">
                                        <label href="" id="mv_title">{{$data2['title']}}</label>
                                        <p> <br>
                                            監督： {{$data2['director_name']}}<br>
                                            主演： {{$data2['main_actor']}}
                                        </p>
                                    </div>
                                    <div id="sc_time">
                                        <p>{{mb_substr($data2['start_time'],0,5)}} 〜 {{mb_substr($data2['end_time'],0,5)}}</p>
                                    </div>
                                </div>
                            @empty
                                <div id="sc_vi">  
                                    <p>上映予定が登録されていません</p>
                                </div>
                            @endforelse
                        @endif
                    </div>
                </div>
          
                
            </section>
        </div>
    </body>
</html>
