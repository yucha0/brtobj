<?php if (!defined('THINK_PATH')) exit();?><html class="brt-notouch">
<head>
    <meta charset="utf-8">
    <title>BrightObject</title>

    <link rel="stylesheet" href="/brtobj/Public/css/style.css">
    <script type="text/javascript">
        function reward_click() {
//            alert(1);
            document.getElementById('reward-show').show();
        }
    </script>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            border: 0;
        }

        html {
            height: 100%;
            background: #f5f5f5;
        }

        html, body {
            height: 100%;
            text-align: center;
            color: #333;
            /*font: 12px / 24px Hiragino Sans GB, Microsoft Yahei, SimSun, Helvetica, Arial, Sans-serif;*/
            font: 14px / 20px "Proxima Nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
            padding: 0 3px 1px 3px;
        }

        .container {
            margin: 0 auto;
            max-width: 960px;
            padding: 80px 0 30px
        }

        .container::after {
            display: table;
            clear: both;
            content: ""
        }

        @media (min-width: 960px) {
            #navi-board {
                position: fixed;
                width: 187px;
            }

            #container-left {
                height: 100px;
            }
        }

        @media (min-width: 768px) {
            #navi-board {
                position: fixed;
                width: 187px;
            }

            #container-left {
                height: 100px;
            }
        }

        @media (min-width: 480px) {

        }

        #navi-board {

            border-radius: 10px;
            background-color: white;

            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);

        }

        #content-board {
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
            margin-left: 20px;

        }

        #content-board::before {
            content: "";
            display: block;

        }

        #container-right::before {
            content: "";
            display: block;

        }

        #footer {
            height: 37px;
            vertical-align: middle;
        }

        #footer p {
            width: 30em;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
            color: black;
            margin: 0 auto;
        }

        #navi-board {
            width: 187px;;
            margin-bottom: 30px;
        }

        #navi-board .portrait {
            padding: 28px 28px 10px;
        }

        #navi-board .portrait img {
            max-width: 100px;
            border: 1px solid #eee;
            border-radius: 100%;
        }

        #navi-board .portrait img:hover {
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06)
        }

        #navi-board .blog-name {
            font-size: 20px;
            line-height: 30px;
            margin: 0 35px;
            font-weight: 400;
            text-transform: none;
            color: #444;
        }

        #navi-board .blog-name:after {
            /*content: '';*/
            /*position: absolute;*/
            /*bottom: -5px;*/
            /*left: 0;*/
            /*!*height: 1px;*!*/
            /*width: 100%;*/
            /*background: rgba(0, 0, 0, .4);*/
            /*transform: scaleX(1);*/
            /*transition: all .2s ease-in;*/
            /*-moz-transition: all .2s ease-in;*/
            /*-webkit-transition: all .2s ease-in;*/
            /*-o-transition: all .2s ease-in;*/
            /*-ms-transition: all .2s ease-in;*/
        }

        #navi-board .category-grid {
            color: rgba(0, 0, 0, .6);
            /*transition: all .2s ease-in;*/
            box-sizing: border-box;
            padding: 20px;
            color: rgba(0, 0, 0, .6);
            position: relative;
            height: 76px;

        }

        #navi-board .category-grid > div:hover {
            font-size: 1.3em;
            color: #1685a9;
            overflow: hidden;
        }

        #navi-board .category-grid:before {
            content: "";
            display: block;
        }

        #navi-board .category-grid:after {
            content: "";
            display: block;
            clear: both;
        }

        #navi-board .category-grid div {
            width: 33.333%;
            float: left;
            box-sizing: border-box;
            position: relative;
            overflow: hidden;
        }

        #navi-board .category-grid div + div {
            border-left: 1px solid #eee;
        }

        #navi-board .category-grid div span {
            display: block;
            box-sizing: content-box;
            overflow: hidden;
        }

        #navi-board .category-grid div i {
            display: inline-block;
            font-family: FontAwesome;
            font-weight: 400;
            font-style: normal;
            line-height: 1;
        }

        #navi-board .category-grid div a {
            position: absolute;
        }

        #navi-board ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        #navi-board ul li {
            border-top: 1px solid #eee;
        }

        #navi-board ul li a {
            padding: 10px 0;
            color: #888;
            display: block;
            text-decoration: none;
        }

        #navi-board ul li a:hover {
            background: #44cef6;
            color: #FFF !important;
            text-shadow: none !important
        }

        #navi-board .search-form {
            border-top: 1px solid #eee;
            margin-bottom: 0;
        }

        #navi-board .search-form input:hover {
            background: #44cef6;
            color: #fff !important;
            text-shadow: none !important;
        }

        #navi-board .search-form input:focus {
            background: #44cef6;
            color: #fff !important;
            text-shadow: none !important;
        }

        #navi-board .search-form input:focus::-webkit-input-placeholder,
        #navi-board .search-form input:hover::-webkit-input-placeholder {
            color: #fff;
            text-shadow: none !important
        }

        #navi-board .search-form input {
            border: none;
            text-align: center;
            height: 40px;
            /*color: #888;*/
            width: 100%;
            padding: 4px 6px;
            transition: all linear .2s;
            border-radius: 0px 0px 10px 10px;
            font: inherit;
            color: inherit;

        }

        #content-board {
            background: #fff;
            margin-bottom: 20px;
            border-radius: 10px;
            overflow: hidden;
            margin-left: 20px;
        }

        #content-board .index-title {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            text-transform: none;
            display: block;
            padding: 15px 30px;
            border-bottom: 1px solid #EEE;
            box-shadow: 0 2px 5px -1px rgba(0, 0, 0, .05);
            background-image: linear-gradient(rgba(200, 200, 200, 0), rgba(200, 200, 200, .12));
            color: rgba(0, 0, 0, .4);
            margin: 0 0 20px;
            font-size: 16px;
            line-height: 25px;
            font-weight: 300;
            text-align: left;
        }

        #content-board .index-list {
            padding: 0 30px 30px;
            min-height: 60vh;
        }

        #content-board .index-list .article {
            padding-bottom: 30px;
            display: block;
            list-style: none;
            box-sizing: border-box;
            overflow: hidden;
        }

        #content-board .index-list .article + .article {
            padding-top: 30px;
            border-top: 1px solid #eee;
        }

        #content-board .index-list .article h1 {
            display: block;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 400;
            color: #444;
            text-transform: none;
            font-size: 24px;
            line-height: 30px;
            margin: 0 0 10px;
            text-align: left;
        }

        #content-board .index-list .article h1 a {
            color: rgba(0, 0, 0, .8);
            text-decoration: none;
            cursor: pointer;
            background: 0 0;
        }

        #content-board .index-list .article > h1 a:hover {
            color: #1685a9;
            text-decoration: none;
        }

        #content-board .index-list .article > p {
            font-size: 14px;
            margin: 0;
            opacity: .8;
            line-height: 24px;
            letter-spacing: 1px;
            text-align: left;
            list-style: none;
            font-weight: 400;

        }

        #content-board .index-list .article > p > time {
            line-height: 35px;
            opacity: .6;
            font-size: 14px;
        }

        #pager-board {
            padding: 0;
            list-style: none;
            text-align: center;
            font-size: 0;
            margin-top: 15px;
        }

        #pager-board:before {
            content: "";
            display: table;
        }

        #pager-board:after {
            content: "";
            display: table;
            clear: both;
        }

        #pager-board > li {
            display: inline-block;
            font-size: 1rem;
            vertical-align: top;
        }

        #pager-board > li:nth-child(n+2) {
            margin-left: 5px;
        }

        #pager-board > li > span, #pager-board > li > a {
            display: inline-block;
            min-width: 16px;
            padding: 3px 5px;
            line-height: 20px;
            text-decoration: none;
            box-sizing: content-box;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, .06);
            border-radius: 4px;
        }

        #pager-board > li > a {
            /*background: #f5f5f5;*/
            background: #fff;
            color: #444;
            text-shadow: 0 1px 0 #fff
        }

        #pager-board > .pager-active > span {
            background: #00a8e6;
            color: #fff;
            border-color: transparent;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, .05);
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
            outline: none;
        }

        #pager-board > li > a:focus, #pager-board > li > a:hover {
            background-color: #fcfcfc;
            color: #444;
            outline: 0;
            border-color: rgba(0, 0, 0, .16)
        }

        #pager-board > li > a:active {
            background-color: #eee;
            color: #444
        }

        #content-board #article {
            min-height: 20vh;
            padding: 30px 20px;
            display: block;
            list-style: none;
        }

        #content-board #article:before,
        #content-board #article:after {
            content: '';
            display: table;
            clear: both;
        }

        #content-board #article .article-title {
            font-size: 24px;
            line-height: 30px;
            font-weight: 400;
            text-transform: none;
            text-align: left;
        }

        #content-board #article .article-breadcrumb {
            padding: 0;
            list-style: none;
            font-size: 0;
            margin-top: 15px;
            text-align: left;
        }

        #content-board #article .article-breadcrumb li {
            color: #333;
            font-size: 14px;
            line-height: 35px;
            opacity: .6;
            font-weight: 400;
            display: inline-block;
            vertical-align: top;
            list-style: none;
        }

        #content-board #article .article-breadcrumb li i {
            font-family: FontAwesome;
            display: inline-block;
            font-weight: 400;
            font-style: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        #content-board #article .article-breadcrumb li a {
            color: #333;
            text-decoration: none;
            cursor: pointer;
        }

        #content-board #article .article-breadcrumb li + li:before {
            content: '/';
            display: inline-block;
            margin: 0 8px;
        }

        #content-board #article p {
            font-size: 15px;
            line-height: 1.8em;
            color: #333;
            margin-bottom: 20px;
            letter-spacing: 1px;
            text-align: left;
            font-weight: 300;
        }

        #content-board #article #reward {
            padding: 20px 0;
        }

        #content-board #article #reward .reward-button {
            -webkit-appearance: none;
            margin: 0;
            /*overflow: visible;*/
            font: inherit;
            color: #444;
            text-transform: none;
            display: inline-block;
            box-sizing: border-box;
            background: #f5f5f5;
            vertical-align: middle;
            min-height: 30px;
            text-decoration: none;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, .06);
            text-shadow: 0 1px 0 #fff;
            cursor: pointer;
            padding: 15px;
            line-height: 18px;
            font-size: 20px;
            border-radius: 100%;
            color: rgba(0, 0, 0, .5);
        }

        #content-board #article #reward .reward-button:hover,
        #content-board #article #reward .reward-button:focus {
            background-color: #f5fbfe;
            /*color: #444;*/
            /*outline: 0;*/
            text-decoration: none;
            border-color: #99baca;
            color: red;
        }

        #reward-show {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: 1010;
            -webkit-overflow-scrolling: touch;
            background: rgba(0, 0, 0, .6);
            opacity: 0;
            -webkit-transition: opacity .15s linear;
            transition: opacity .15s linear;
            touch-action: cross-slide-y pinch-zoom double-tap-zoom;
            -webkit-transform: translateZ(0);
            transform: translateZ(0);
            display: none;
            overflow-y: scroll;
            text-align: center;
        }

        #reward-show .reward-dialoge {
            position: relative;
            box-sizing: border-box;
            margin: 50px auto;
            padding: 20px;
            width: 600px;
            max-width: 100%;
            max-width: calc(100% - 20px);
            background: #fff;
            opacity: 0;
            -webkit-transform: translateY(-100px);
            transform: translateY(-100px);
            -webkit-transition: opacity .3s linear, -webkit-transform .3s ease-out;
            transition: opacity .3s linear, transform .3s ease-out;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .3);
        }

        #reward-show .reward-dialoge a {
            text-decoration: none;
            cursor: pointer;
            -webkit-appearance: none;
            margin: 0;
            border: none;
            overflow: visible;
            font: inherit;
            color: inherit;
            text-transform: none;
            padding: 0;
            background: 0 0;
            display: inline-block;
            box-sizing: content-box;
            width: 20px;
            line-height: 20px;
            text-align: center;
            vertical-align: middle;
            opacity: .3;
            margin: -10px -10px 0 0;
            float: right;
        }

        #reward-show .reward-dialoge .reward-dialoge-header {
            list-style: none;
            /*margin-bottom: 15px;*/
            margin: -20px -20px 15px -20px;
            padding: 20px;
            border-bottom: 1px solid #ddd;
            border-radius: 4px 4px 0 0;
            background: #fafafa;
            text-align: left;
        }

        #reward-show .reward-dialoge .reward-dialoge-thumbnail {
            /*display: inline-block;*/
            max-width: 100%;
            box-sizing: border-box;
            /*margin: 0;*/
            padding: 4px;
            border: 1px solid #ddd;
            background: #fff;
            border-radius: 4px;
            display: inline-block;
            margin: 10px;
        }

        #reward-show .reward-dialoge a:after {
            font-family: FontAwesome;
            display: block;
            content: "\f00d";
        }

        .icon-calendar:before {
            content: "\f073";
        }

        .icon-eye:before {
            content: "\f06e";
        }

        .icon-comment:before {
            content: "\f06e";
        }

        #content-board #article-comments {
            padding: 0 20px 20px;
            text-align: left;
        }

        #content-board #article-comments h4 {
            font-size: 24px;
            line-height: 30px;
            margin: 20px 0;
            color: rgba(0, 0, 0, .6);
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 300;
            text-transform: none;
        }

        #content-board #article-comments .comments-alert {
            margin-bottom: 15px;
            padding: 10px;
            background: #ebf7fd;
            color: #2d7091;
            border: 1px solid rgba(45, 112, 145, .3);
            border-radius: 4px;
            text-shadow: 0 1px 0 #fff;
            margin-top: 15px;
            font-weight: 300;
        }

        #content-board #article-respond h2 {
            margin: 20px 0;
            color: rgba(0, 0, 0, .6);
            font-size: 24px;
            line-height: 30px;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-weight: 300;
            text-transform: none;

        }

        #content-board #article-respond #respond-form textarea {
            /*height: 30px;*/
            box-sizing: border-box;
            /*margin: 0;*/
            max-width: 100%;
            padding: 4px 6px;
            border: 1px solid #ddd;
            background: #fff;
            color: #444;
            -webkit-appearance: none;
            -webkit-transition: all linear .2s;
            transition: all linear .2s;
            /*border-radius: 4px;*/
            overflow: auto;
            vertical-align: top;
            width: 100%;
            height: 90px;
            margin-bottom: 10px;
            border-radius: 3px;
            font: inherit;
        }
        #content-board #article-respond  #respond-form .respond-grid >div>input:focus,
        #content-board #article-respond #respond-form textarea:focus {
            border-color: #99baca;
            outline: 0;
            background: #f5fbfe;
            color: #444;
        }

        #content-board #article-respond  #respond-form .respond-grid{
            text-align: right;
        }
        #content-board #article-respond  #respond-form .respond-grid:before,
        #content-board #article-respond  #respond-form .respond-grid:after
        {
            content: "";
            display: block;
            overflow: hidden;
        }

        #content-board #article-respond  #respond-form .respond-grid:after{
            clear: both;
        }
        #content-board #article-respond  #respond-form .respond-grid >div{
            display: inline-block;
            position: relative;
            max-width: 100%;
            box-sizing: border-box;
            width: 25%;
            padding-left: 10px;
        }
        #content-board #article-respond  #respond-form .respond-grid >div>i{
            position: absolute;
            top: 50%;
            width: 30px;
            margin-top: -7px;
            font-size: 14px;
            color: #999;
            text-align: center;
            pointer-events: none;
            font-family: FontAwesome;
            display: inline-block;
            font-weight: 400;
            font-style: normal;
            line-height: 1;
            -webkit-font-smoothing: antialiased;
        }
        #content-board #article-respond  #respond-form .respond-grid >div>input{
            height: 30px;
            max-width: 100%;
            padding: 4px 6px;
            border: 1px solid #ddd;
            background: #fff;
            color: #444;
            -webkit-transition: all linear .2s;
            transition: all linear .2s;
            /*border-radius: 4px;*/
            border-radius: 3px;
            vertical-align: middle;
            padding-left: 30px !important;

        }
        #content-board #article-respond  #respond-form .respond-grid >div>button {
            width:100%;
            -webkit-appearance: none;
            margin: 0;
            overflow: visible;
            font: inherit;
            color: #444;
            text-transform: none;
            display: inline-block;
            box-sizing: border-box;
            padding: 0 12px;
            background: #f5f5f5;
            vertical-align: middle;
            line-height: 28px;
            min-height: 30px;
            font-size: 1rem;
            text-decoration: none;
            text-align: center;
            border: 1px solid rgba(0, 0, 0, .06);
            border-radius: 4px;
            text-shadow: 0 1px 0 #fff;
            cursor: pointer;
            font-weight: 300;
        }

        #content-board #article-respond  #respond-form .respond-grid >div>button:hover,
        #content-board #article-respond  #respond-form .respond-grid >div>button:focus{
            background-color: #fafafa;
            color: #444;
            outline: 0;
            text-decoration: none;
            border-color: rgba(0, 0, 0, .16)
        }

        .icon-user:before{
            content:'\f007';
        }
        .icon-envelope:before{
            content: '\f0e0';
        }


    </style>
</head>
<body>
<div class="container">
    <div id="container-left" class="brt-width-large-1-5 brt-width-medium-1-4">
        <div id="navi-board">
            <div class="portrait">
                <img src="/brtobj/Public/pictures/8.jpg" alt="">
            </div>
            <h1 class="blog-name">BrightObject</h1>

            <div class="category-grid">
                <div>
                    <span>60</span>
                    <span><i>&#xf15c;</i></span>
                    <a href="#"></a>
                </div>
                <div>
                    <span>14</span>
                    <span><i>&#xf15c;</i></span>
                    <a href="#"></a>
                </div>
                <div>
                    <span>38</span>
                    <span><i>&#xf15c;</i></span>
                    <a href="#"></a>
                </div>
            </div>
            <ul>
                <li>
                    <a href="#" style="">Works</a></li>
            </ul>
            <form class="search-form" method="get" action="#">
                <input stype="text" placeholder="Search">
            </form>
        </div>

    </div>

    <div id="container-right" class="brt-width-large-4-5 brt-width-medium-3-4">
        <div id="content-board">
            <article id="article">
                <h1 class="article-title">index\php\phpstorm调试教程 </h1>

                <ul class="article-breadcrumb">
                    <li><i class="icon-calendar"></i> 2016-04-26</li>
                    <li><i class="icon-eye"></i> 22</li>
                    <li><i class="icon-comment"></i> <a
                            href="http://blog.ikyxxs.com/index.php/2016/04/26/669/#respond"
                            data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                            data-slimstat-async="false" data-slimstat-callback="false">0</a></li>
                </ul>

                <p>In Zootopia, anyone can be anything.</p>
                <p style="text-align: right;">—— 《Zootopia》 Judy</p>
                <div id="reward">

                    <a class="reward-button" href="#reward-show" data-slimstat-clicked="false"
                       data-slimstat-type="2" data-slimstat-tracking="false"
                       data-slimstat-async="false" data-slimstat-callback="false"
                       onclick="reward_click()"
                    >赏</a>

                    <div id="reward-show">
                        <div class="reward-dialoge">
                            <a data-slimstat-clicked="false"
                               data-slimstat-type="0" data-slimstat-tracking="true"
                               data-slimstat-async="false" data-slimstat-callback="true">

                            </a>
                            <div class="reward-dialoge-header">感谢打赏!</div>
                            <div class="reward-dialoge-thumbnail">
                                <img src="/brtobj/Public/pictures/8.jpg">
                                <div class="uk-thumbnail-caption">微信</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="tags uk-clearfix">-->
                <!--<div class="tags uk-float-left"></div>-->
                <!--<div class="uk-float-right"></div>-->
                <!--</div>-->


            </article>
            <div id="article-comments">
                <h4>评论</h4>

                <div class="comments-alert">
                    <p>还没有任何评论，你来说两句吧</p>
                </div>

                <div id="article-respond">
                    <h2 id="reply-title" class="comments-title">发表评论
                    </h2>
                    <form action="#" method="post" id="respond-form">
                        <textarea placeholder="内容..." tabindex="1"></textarea>
                        <div class="respond-grid">

                            <div>
                                <i class="icon-user"></i>
                                <input id="author" type="text" tabindex="2" value="" name="author" placeholder="昵称*">
                            </div>
                            <div>
                                <i class="icon-envelope"></i>
                                <input id="email" type="text" tabindex="3" value="" name="email" placeholder="邮箱*"
                                       >
                            </div>
                            <div >
                                <button name="submit" type="submit" id="submit" tabindex="4">回复
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>
</div>
<footer id="footer">
    <p> Brtobj 版权所有&copy; 2016</p>
</footer>
</body>
</html>