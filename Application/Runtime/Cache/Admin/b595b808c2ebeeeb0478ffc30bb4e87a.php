<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/brtobj/Public/css/style.css">
    <style>
        html {
            background: #f5f5f5;
            font: 14px / 20px "Proxima Nova", "Helvetica Neue", Helvetica, Arial, sans-serif;
        }

        a {
            text-decoration: none;
        }

        #navi {
            margin-top: 20px;
            margin-left:10px;
            border-radius: 10px;
            height: 521px;
            width: 160px;
            position: fixed;
            background-color: white;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
        }

        #navi .portrait {
            padding: 28px 28px 10px;
        }

        #navi .portrait img {
            max-width: 100px;
            border: 1px solid #eee;
            border-radius: 100%;
        }

        #navi .portrait img:hover {
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06)
        }

        #navi .blog-name {
            font-size: 20px;
            line-height: 30px;
            margin: 0 35px;
            font-weight: 400;
            text-transform: none;
            color: #444;
            text-align: center;
            margin-bottom: 20px;
        }

        #navi ul {
            margin: 0;
            padding: 0;
            list-style: none;

        }

        #navi-home > a,
        #navi-articles > a,
        #navi-comments > a {
            /*border-top: 1px solid #eee;*/
            list-style: none;
            margin-bottom: 0;
            padding: 10px 0;
            color: #888;
            display: block;
            text-decoration: none;
            /*padding-left: 10px;*/
        }

        #navi-comments > a {
            /*border-bottom: 1px solid #eee;*/
        }

        #navi-home ,
        #navi-articles,
        #navi-comments{
            border-top: 1px solid #eee;
        }
        #navi-comments{
            border-bottom: 1px solid #eee;
        }

        .front:before {
            font-family: FontAwesome;
            content: "\f009";
            padding-left: 14px;
        }

        .end:before {
            font-family: FontAwesome;
            content: "\f104";
            padding-left: 45px;
        }

        #navi-sub-articles a,
        #navi-sub-comments a {
            list-style: none;
            margin-bottom: 0;
            padding: 10px 0;
            color: #888;
            display: block ;
            text-decoration: none;
            padding-left: 30px;
        }

        #navi-sub-articles a {
            /*border-top: 1px solid #eee;*/
        }

        #navi > ul a:hover,
        #navi > ul a:active{
            background: #44cef6;
            color: #FFF !important;
            text-shadow: none !important
        }



        #navi .navi {
            border-left: none;
        }

        #navi .navi-active {
            border-left: 2px solid #44cef6;
            /*border-right: 2px solid #44cef6;*/
            /*box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .09);*/
        }

        #navi .navi-sub {
            display: none;
        }

        #navi .navi-sub-active {
            display: inherit;
        }

        #container-right {
            /*background: green;*/
            height: 2400px;
            margin-left: 170px;
            padding-left: 20px;
        }

        #content {
            height: 2400px;
            background-color: white;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
        }
    </style>
    <script type="text/javascript">
        function clicktest() {
            var naviHome = document.getElementById('navi-home');
            var naviArticles = document.getElementById('navi-articles');
            var naviComments = document.getElementById('navi-comments');
            var navisubArticles = document.getElementById('navi-sub-articles');
            var navisubComments = document.getElementById('navi-sub-comments');
            naviArticles.className = 'navi-active';
            naviComments.className = 'navi';
            navisubArticles.className = 'navi-sub-active';
            navisubComments.className = 'navi-sub';
        }
        function clicktest2() {
            var naviComments = document.getElementById('navi-comments');
            var naviArticles = document.getElementById('navi-articles');
            var navisubArticles = document.getElementById('navi-sub-articles');
            var navisubComments = document.getElementById('navi-sub-comments');
            naviArticles.className = 'navi';
            naviComments.className = 'navi-active';
            navisubArticles.className = 'navi-sub';
            navisubComments.className = 'navi-sub-active';
        }

        function clicktest3() {

        }
    </script>
</head>
<body>
<div id="container-left">
    <div id="navi">
        <div class="portrait">
            <img src="/brtobj/Public/pictures/8.jpg" alt="">
        </div>
        <h1 class="blog-name">yucha0</h1>
        <ul>
            <li id="navi-home">
                <a href="#" onclick="clicktest()">
                    <span class="front"></span>
                    <span>后台首页</span>
                    <span class="end"></span></a>

            </li>
            <li id="navi-articles">
                <a href="#" onclick="clicktest()">
                    <span class="front"></span>
                    <span>文章管理</span>
                    <span class="end"></span></a>
                </a>
                <ul class="navi-sub" id="navi-sub-articles">
                    <li><a href="#" onclick="clicktest3()">所有文章</a></li>
                    <li><a href="#" onclick="null">新文章</a></li>
                    <li><a href="#" onclick="null">类别</a></li>
                    <li><a href="#" onclick="null">标签</a></li>
                </ul>
            </li>
            <li id="navi-comments">
                <a href="#" onclick="clicktest2()">
                    <span class="front"></span>
                    <span>留言管理</span>
                    <span class="end"></span>
                </a>
                <ul class="navi-sub" id="navi-sub-comments">
                    <li><a href="#">所有留言</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<div id="container-right">
    <div id="content">

    </div>
</div>
</body>
</html>