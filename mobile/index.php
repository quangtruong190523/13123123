<html lang="vi" class="translated-ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>ngọc rồng</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png">
    <link rel="icon" type="images/png" href="../images/favicon.png" sizes="32x32">
    <link href="css/home.css" rel="stylesheet">
    <!-- <script src="https://hm.baidu.com/hm.js?9f17499d52a0632c6ef195be90bb2f13"></script> -->
    <script>
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
            window.location.href = window.location.href.replace(
                "//" + location.host + location.pathname,
                "//" + location.host + "/ngocrongbeta/web/index.php"
            );
        }

        // var _hmt = _hmt || [];
        // (function() {
        //     var hm = document.createElement("script");
        //     // hm.src = "https://hm.baidu.com/hm.js?9f17499d52a0632c6ef195be90bb2f13";
        //     console.log(hm.src);
        //             var s = document.getElementsByTagName("script")[0];
        //     s.parentNode.insertBefore(hm, s);
        // })();


        // if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
        //     window.location.href = window.location.href.replace(
        //       "//" + location.host + location.pathname,
        //       "//" + location.host + "/mobile"+location.pathname
        //     );
        //   }

        // var _hmt = _hmt || [];
        // (function() {
        //     var hm = document.createElement("script");
        //     hm.src = "https://hm.baidu.com/hm.js?9f17499d52a0632c6ef195be90bb2f13";
        //     var s = document.getElementsByTagName("script")[0];
        //     s.parentNode.insertBefore(hm, s);
        // })();
    </script>
    <style>
        /* #MOBILE_COM_HEADER,
    #COMMON_NAV {
        display: none !important;
    } */
    .call-btn{
        display: none;
    }
        .active_nv {
            color: red !important;
            font-weight: bold;
        }

        .m-super-page-wrap {
            margin-bottom: -2px;
        }

        .com-header {
            display: flex;
            /* position: fixed; */
            top: 0;
            left: 0;
            width: 100%;
            height: 0.9rem;
            background: #148fe3;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            z-index: 999;
        }

        .com-header .logowrap {
            display: flex;
            width: 2.4rem;
            margin-left: 0.12rem;
            margin-top: 0.06rem;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .com-header .icon {
            position: relative;
            left: 0.1rem;

            height: 0.68rem;
        }

        .com-header .logo {
            width: 1.72rem;
            height: 0.62rem;
            background-position: -0.15rem -0.19rem;
            -webkit-transform: scale(.7);
            -moz-transform: scale(.7);
            -ms-transform: scale(.7);
            transform: scale(.7);
        }

        .com-header .sandbox {
            position: relative;
            top: -0.52rem;
            width: 2.7rem;
            height: 1.98rem;
            background-position: -0.15rem -1.3rem;
            -webkit-transform: scale(.4);
            -moz-transform: scale(.4);
            -ms-transform: scale(.4);
            transform: scale(.4);
        }

        .com-header .down-load {
            margin-top: 0.06rem;
            width: 2.18rem;
            height: 0.76rem;
            background-position: -0.15rem -3.63rem;
            -webkit-transform: scale(.8);
            -moz-transform: scale(.8);
            -ms-transform: scale(.8);
            transform: scale(.8);
        }

        .common-nav {
            width: 100%;
            height: 0.8rem;
            border-top: 0.04rem solid #fffaeb;
            border-bottom: 0.04rem solid #fffaeb;
            background: url(data:image/jpeg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAA8AAD/4QONaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA1LjYtYzE0MiA3OS4xNjA5MjQsIDIwMTcvMDcvMTMtMDE6MDY6MzkgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6OWFkZTY0ZDItNzZmNy00NzQ5LWE5MDItNjA5MWRjZDBlMDAwIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjNERDZCQ0EzM0E1QzExRTlBODAxRTE1ODg5ODMzMEQwIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjNERDZCQ0EyM0E1QzExRTlBODAxRTE1ODg5ODMzMEQwIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCBDQyAyMDE3IChXaW5kb3dzKSI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjk5OWY0MDQyLWM5YzItMzI0Zi05MmU4LTk3M2M4MWJmODZjZCIgc3RSZWY6ZG9jdW1lbnRJRD0iYWRvYmU6ZG9jaWQ6cGhvdG9zaG9wOjhhMDMyMzM0LTM5NmUtMTFlOS1hYTZiLWQxMmMzZTdkMmM5OSIvPiA8L3Jk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) no-repeat top/100% 0.8rem;
        }

        .common-nav ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 0.06rem;
            width: 7.38rem;
            margin: auto;
        }

        .common-nav ul {
            display: -webkit-box;
            display: -webkit-flex;
            display: -moz-box;
            display: -ms-flexbox;
            display: flex;
            padding-top: 0.06rem;
            width: 100%;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -moz-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .common-nav ul li:nth-of-type(1) {
            background: url(//mnweb.mini1.cn/activity/miniweb/m/images/tabs1.png) no-repeat center/2.46rem 0.6rem;
        }

        .common-nav ul li {
            width: 2.46rem;
            height: 0.6rem;
            line-height: 0.6rem;
            text-align: center;
        }

        .common-nav ul li a {
            display: block;
            width: 100%;
            height: 100%;
            color: #974c27;
            font-size: .24rem;
            font-weight: 700;
        }

        .common-nav ul li:nth-of-type(2) {
            background: url(//mnweb.mini1.cn/activity/miniweb/m/images/tabs2.png) no-repeat center/2.46rem 0.6rem;
        }

        .common-nav ul li:nth-of-type(3) {
            background: url(//mnweb.mini1.cn/activity/miniweb/m/images/tabs3.png) no-repeat center/2.46rem 0.6rem;
        }
    </style>
    <link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.69JJaQ5G5xA.L.W.O/d=0/rs=AN8SPfpC36MIoWPngdVwZ4RUzeJYZaC7rg/m=el_main_css">
</head>

<body>
    <div class="m-super-page-wrap">
        <!-- -->
        <header class="com-header">
            <section class="logowrap">
                <img src="../images/logoDB1.png" class="icon" alt="">
                <!-- <div class="logo text_int css_sp"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">thế giới thu nhỏ</font></font></div> -->
            </section>
            <aside class="text_int css_sp sandbox">
            </aside>
            <a href="javascript:;" id="" class="down-load css_sp text_int">
                <!-- logo256.png -->
                <img src="../images/logo256.png" class="icon" alt="">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;color:white">Fanpage</font>
                </font>
            </a>
        </header>
        <nav class="common-nav">
            <ul>
                <li><a href="">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">trang chủ</font>
                        </font>
                    </a></li>
                <li><a href="javascript:;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Giới thiệu</font>
                        </font>
                    </a></li>
                <li><a href="javascript:;">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">diễn đàn</font>
                        </font>
                    </a></li>
            </ul>
        </nav>
        <div class="banner-img">
            <!-- banner -->
            <img src="../images/banner_2_1.png" class="bannerimg" alt="">
            <div class="content-wrap">
                <div class="flex-wrap">
                    <!-- / <img src="../images/logoDB1.png" class="logo" alt=""> -->
                    <a class="gotoGuanwang" href="javascript:;">
                        <!-- <img class="guanwang-btn" src="http://image.mini1.cn/d/20211014/0268f62cf601344076a5d2f8f255453f.png" alt=""> -->
                        <!-- <span class="goto-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhập trang web chính thức</font></font></span> -->
                    </a>
                </div>
                <img src="../images/pegi12.jpg" class="y12 top-gift" alt="">
            </div>
            <!--    -->
            <section class="tool-wrap">
                <!-- <img src="http://image.mini1.cn/d/20211014/85fb02a9d4b7e3d56b719aa0c5307b6c.png" class="playbtn" id="player" alt="">

                <img src="https://mnweb.mini1.cn/activity/miniweb/superHome/images/downbtn8dd81c9db4ce1f71b413c2150ff508b1.png" class="downbtn" id="downloadBtn" alt=""> -->
            </section>
        </div>
        <!--  -->
        <section class="sec-wrap">
            <i class="mifeng"></i>
            <img src="../images/goku-bulma-gohan-vegeta-dragon-ball-goku-37696e7fca7328fbc4b53978a611c757.png" class="shang" alt="">
            <section class="aside1 comaside">
                <p class="title-top">
                    <span class="t1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Text 1</font>
                        </font>
                    </span><span class="t2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Giới Thiệu</font>
                        </font>
                    </span>
                </p>
                <p style="font-size: 10.5px;padding:0 15 0 25px;color:#905900;">Ngọc Rồng Online là Trò Chơi Trực Tuyến với cốt truyện xoay quanh bộ truyện tranh 7 viên Ngọc Rồng. Người chơi sẽ hóa thân thành một trong những anh hùng của 3 hành tinh: Trái Đất, Xayda, Namếc. Cùng luyện tập, tăng cường sức mạnh và kỹ năng. Đoàn kết cùng chiến đấu chống lại các thế lực hung ác. Cùng nhau tranh tài</p>

            </section>
            <section class="aside2 comaside">
                <p class="title-top">
                    <span class="t1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Text 2</font>
                        </font>
                    </span><span class="t2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Tộc người</font>
                        </font>
                    </span>
                </p>
                <ul class="icon-list">
                    <li>
                        <img onclick="select_nv(1)" src="../images/icon220211021.png">
                        <p class="active_nv" id="traidat_nv">Trái Đất</p>
                    </li>
                    <li>
                        <img onclick="select_nv(2)" src="../images/icon220211021.png">
                        <p id="namec_nv">Naméc</p>
                    </li>
                    <li>
                        <img onclick="select_nv(3)" src="../images/icon220211021.png">
                        <p id="xayda_nv">Xayda</p>
                    </li>
                </ul>
            </section>
            <section class="aside3 comaside">
                <p class="title-top">
                    <span class="t1">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Text 3</font>
                        </font>
                    </span><span class="t2">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Nhân Vật</font>
                        </font>
                    </span>
                </p>
                <ul class="icon-list" id="traidat">

                    <li>
                        <img style="width: 80px" src="../images/nv/734.png">
                        <p>Gohan</p>
                    </li>
                    <li>
                        <img style="width: 80px" src="../images/nv/519.png">
                        <p>Krillin</p>
                    </li>
                    <li>
                        <img style="width: 80px" src="../images/nv/518.png">
                        <p>Yamcha</p>
                    </li>
                </ul>
                <ul class="icon-list" id="namec" style="display:none">

                    <li>
                        <img style="width: 55px;padding-top: 15px;" src="../images/nv/350.png">
                        <p>Ốc tiêu</p>
                    </li>
                    <li>
                        <img style="width: 80px" src="../images/nv/523.png">
                        <p>Piccolo</p>
                    </li>
                    <li>
                        <img style="width: 85px" src="../images/nv/524.png">
                        <p>Yami</p>
                    </li>
                </ul>
                <ul class="icon-list" id="xayda" style="display:none">

                    <li>
                        <img style="width: 70px" src="../images/nv/520.png">
                        <p>Cađic</p>
                    </li>
                    <li>
                        <img style="width: 70px" src="../images/nv/521.png">
                        <p>Rađic</p>
                    </li>
                    <li>
                        <img style="width: 70px" src="../images/nv/522.png">
                        <p>Kakalot</p>
                    </li>
                </ul>
            </section>
        </section>

        <!-- 第三部分 -->
        <section class="section3-bg">
            <div class="xianqian">
                <p class="desc">
                    <font style="vertical-align: inherit;">
                        <span style="font-weight: bold;">1 Đăng ký tài khoản :</span> <span> Ngọc Rồng Online sử dụng Tài Khoản riêng...</span>
                        <br>


                        <span style="font-weight: bold;">2 Hướng dẫn điều khiển :</span> <span>Đối với máy bàn phím: Dùng phím mũi tên, phím số, để điều khiển nhân vật...</span>
                        <br>


                        <span style="font-weight: bold;">3 Thông tin căn bản :</span> <span> Đậu thần dùng để tăng KI và HP ngay lập tức...</span>
                        <br>
                    </font>
                </p>

                <section class="wenan-wrap">
                    <ul class="icon-list">
                        <li>
                            <img src="https://ngocrongonline.com/gif/xayda_tusat.gif">
                            <p>Tự phát nổ</p>
                        </li>
                        <li>
                            <img src="https://ngocrongonline.com/gif/TD_Kame.gif">
                            <p>Kamejoko</p>
                        </li>
                        <li>
                            <img src="https://ngocrongonline.com/gif/Namec_kame.gif">
                            <p>Masenko</p>
                        </li>
                        <li>
                            <img src="https://ngocrongonline.com/gif/XD_Kame.gif">
                            <p>Antomic</p>
                        </li>
                        <li>
                            <img src="https://ngocrongonline.com/gif/xayda_bienhinh.gif">
                            <p>Biến hình</p>
                        </li>
                        <li>
                            <img src="https://ngocrongonline.com/gif/TD_kaioshen.gif">
                            <p>Kaioken</p>
                        </li>
                    </ul>
                </section>
                <!-- <a class="xianqianbtn" href="https://www.mini1.cn/experience/">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Đơn đăng ký đủ điều kiện dịch vụ trước</font>
                    </font>
                </a> -->
            </div>
        </section>
        <!-- 第四部分 -->
        <div class="section4-bg">
            <div class="slidebg"></div>
            <div id="slideBox" class="slideBox">
                <div class="bd">
                    <div class="tempWrap" style="overflow:hidden; position:relative;">
                        <ul style="width: 2520px; position: relative; overflow: hidden; padding: 0px; margin: 0px; transition-duration: 200ms; transform: translate(-1440px, 0px) translateZ(0px);">
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                            <li style="display: table-cell; vertical-align: top; width: 360px;">
                                <img src="../images/banner_2_1.png">
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="hd">
                    <ul>
                        <li class="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">1</font>
                            </font>
                        </li>
                        <li class="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">2</font>
                            </font>
                        </li>
                        <li class="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">3</font>
                            </font>
                        </li>
                        <li class="on">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">4</font>
                            </font>
                        </li>
                        <li class="">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">5</font>
                            </font>
                        </li>
                    </ul>
                </div>
            </div>
            <!--  -->
            <div class="qunzu"></div>
        </div>
        <!--  -->
        <!--  -->
        <div class="diamask2">
            <!-- <div class="gift-wrap">
                <i class="close-btn"></i>
                <ul class="giftbg">
                    <li>
                        <img src="http://image.mini1.cn/d/20211015/dada912f9fb69c85814959c94dd6067b.png" alt="">
                        <p>
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">mọi người hahahaha</font>
                            </font>
                        </p>
                    </li>
                </ul> -->
                <!--  -->
                <!-- <p class="code-show">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                            Mã kích hoạt: </font>
                    </font><span class="copy-code">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Giới thiệu về gói phúc lợi chính thức</font>
                        </font>
                    </span>
                </p> -->
                <!--  -->
                <!-- <div class="intro-wrap">
                    <p>
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Giới thiệu về gói phúc lợi chính thức</font>
                        </font>
                    </p>
                </div> -->
                <!--  -->
                <!-- <button class="copybtn">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">sao chép mã kích hoạt</font>
                    </font>
                </button>
            </div> -->
        </div>
        <!--  -->
        <div class="diamask">
            <!-- <div class="dia" id="dia">
                <div class="video-con" id="video-con" data-video="<iframe frameborder=&quot;0&quot; src=&quot;https://v.qq.com/txp/iframe/player.html?vid=g35046wtv4e&quot; allowFullScreen=&quot;true&quot;></iframe>"></div>
                <a class="dia-close" href="javascript:;" title="Khép kín">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">x</font>
                    </font>
                </a>
            </div> -->
        </div>
    </div>

    <script src="https://static-www.mini1.cn/assets/js/common_hf@1.0.2.js"></script>
    <script src="https://pkg.mini1.cn/zepto@1.2.0/dist/zepto.min.js"></script>
    <script src="//cdn-activity.mini1.cn/mnshare/js/TouchSlide.1.1.js"></script>
    <script src="https://mnweb.mini1.cn/activity/miniwtool/minicallapp@1.0.5.min.js"></script>
    <script type="text/javascript" src="https://mnweb.mini1.cn/activity/miniweb/superHome/js/index2.23f7daf623a488fd1ef7.js"></script>
    <script>
                     function select_nv(id) {
            switch (id) {
                case 1:
                    document.getElementById('traidat').style.display = "flex";
                    document.getElementById('namec').style.display = "none";
                    document.getElementById('xayda').style.display = "none";

                    document.getElementById('traidat_nv').classList.add("active_nv");
                    document.getElementById('namec_nv').classList.remove("active_nv");
                    document.getElementById('xayda_nv').classList.remove("active_nv");
                    break;
                case 2:
                    document.getElementById('traidat').style.display = "none";
                    document.getElementById('namec').style.display = "flex";
                    document.getElementById('xayda').style.display = "none";

                    document.getElementById('traidat_nv').classList.remove("active_nv");
                    document.getElementById('namec_nv').classList.add("active_nv");
                    document.getElementById('xayda_nv').classList.remove("active_nv");
                    break;
                case 3:
                    document.getElementById('traidat').style.display = "none";
                    document.getElementById('namec').style.display = "none";
                    document.getElementById('xayda').style.display = "flex";

                    document.getElementById('traidat_nv').classList.remove("active_nv");
                    document.getElementById('namec_nv').classList.remove("active_nv");
                    document.getElementById('xayda_nv').classList.add("active_nv");
                    break;
                default:
                    break;
            }
        }
                </script>
    <div class="call-btn1" style="
    position: fixed;
    top: auto;
    bottom: 0px;
    left: 50%;
    z-index: 100;
    width: 210px;
    font-size: 15px;
    font-weight: 500;
    line-height: 20px;
    text-align: center;
    color: rgb(255, 255, 255);
    background: #f70;
    border: none;
    border-radius: 18px;
    transform: translate(-50%, -50px);
    box-shadow: rgb(18 18 18 / 25%) 0px 2px 5px;
    transition: transform 0.3s ease 0.3s;z-index: 999;
  ">
  <div>
  <img style="margin: 1px;"  width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
       <img  style="margin: 1px;" width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
       <img  style="margin: 1px;" width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
       <img  style="margin: 1px;" width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
       <img  style="margin: 1px;" width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
       <img  style="margin: 1px;" width="60px" height="40px" src="https://ngocrongonline.com/images/jar.png" class="" alt="">
  </div>
      
    </div>
    <!-- <div id="goog-gt-" class="skiptranslate VIpgJd-yAWNEb-L7lbkb" dir="ltr">
        <div style="padding: 8px;">
            <div>
                <div class="VIpgJd-yAWNEb-l4eHX"><img src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20" alt="Google Dịch"></div>
            </div>
        </div>
        <div style="padding: 8px; float: left; width: 100%;">
            <h1 class="VIpgJd-yAWNEb-r4nke VIpgJd-yAWNEb-mrxPge">Văn bản gốc</h1>
        </div>
        <div style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-nVMfcd-fmcmS"></div>
        </div>
        <div class="VIpgJd-yAWNEb-cGMI2b" style="padding: 8px;">
            <div class="VIpgJd-yAWNEb-Z0Arqf-PLDbbf"><span class="VIpgJd-yAWNEb-Z0Arqf-hSRGPd">Đóng góp bản dịch hay hơn</span></div>
            <div class="VIpgJd-yAWNEb-fw42Ze-Z0Arqf-haAclf">
                <hr style="color: #ccc; background-color: #ccc; height: 1px; border: none;">
                <div class="VIpgJd-yAWNEb-Z0Arqf-H9tDt"></div>
            </div>
        </div>
        <div class="VIpgJd-yAWNEb-jOfkMb-Ne3sFf" style="display: none;"></div>
    </div> -->





</body>

</html>