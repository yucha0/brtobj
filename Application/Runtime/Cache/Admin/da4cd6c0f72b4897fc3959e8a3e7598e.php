<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/brtobj/Public/css/style.css">
    <style>
        html {
            background: #ededed;
            /*font: 14px / 20px "Proxima Nova", "Helvetica Neue", Helvetica, Arial, sans-serif;*/
        }

        a {
            text-decoration: none;
        }

        #container {
            /*width: 90%;*/
            margin: 0 auto;
        }

        #navi {
            margin-top: 40px;
            /*margin-left: 10px;*/
            border-radius: 10px;
            height: 521px;
            width: 187px;
            position: fixed;
            background-color: #fdffe7;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
            text-align: center;
            margin-left: 20px;
        }

        #navi .portrait {
            padding: 28px 28px 10px;
        }

        #navi .portrait img {
            max-width: 100px;
            border: 1px solid #ccc;
            border-radius: 100%;
        }

        #navi .portrait img:hover {
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06)
        }

        #navi .blog-name {
            font-size: 20px;
            line-height: 30px;
            margin: 0 35px;
            /*font-weight: 400;*/
            text-transform: none;
            /*color: #444;*/
            color: #777;
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
            /*border-top: 1px solid #ccc;*/
            list-style: none;
            margin-bottom: 0;
            padding: 10px 0;
            /*color: #888;*/
            color: #777;
            display: block;
            text-decoration: none;
            /*padding-left: 10px;*/
        }

        #navi-home,
        #navi-articles,
        #navi-comments {
            border-top: 1px solid #ccc;
        }

        #navi-comments {
            border-bottom: 1px solid #ccc;
        }

        .front:before {
            font-family: FontAwesome;
            content: "\f009";
            /*padding-left: 10px;*/
        }

        .end:before {
            font-family: FontAwesome;
            content: "\f104";
            padding-left: 65px;
        }

        #navi-sub-articles a,
        #navi-sub-comments a {
            text-align: left;
            list-style: none;
            margin-bottom: 0;
            padding: 10px 0;
            /*color: #888;*/
            color: #777;
            display: block;
            text-decoration: none;
            padding-left: 37px;
        }

        #navi-sub-articles a {
            /*border-top: 1px solid #ccc;*/
        }

        #navi > ul a:hover,
        #navi > ul a:active {
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
            /*height: 2400px;*/
            margin-left: 207px;
            padding-left: 20px;
        }

        #content {
            margin-top: 20px;
            border-radius: 10px;
            min-height: 600px;
            background-color: #fdffe7;
            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
            text-align: center;
            margin-right: 20px;
            overflow: hidden;
        }

        .content-title {
            /*font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;*/
            text-transform: none;
            display: block;
            padding: 15px 30px;
            border-bottom: 1px solid #ccc;
            box-shadow: 0 2px 5px -1px rgba(0, 0, 0, .05);
            background-image: linear-gradient(rgba(200, 200, 200, 0), rgba(200, 200, 200, .12));
            /*color: rgba(0, 0, 0, .4);*/
            color: #777;
            margin: 0 0 20px;
            /*font-size: 16px;*/
            /*line-height: 25px;*/
            /*font-weight: 400;*/
            text-align: left;
        }

        .content-title a {
            text-decoration: none;
            /*cursor: ;*/
            /*color: inherit;*/
            color: #777;
            font-size: 18px;
        }

        #one-glance,
        #server-info {
            text-align: left;
            padding: 0px 10px;
            background: #ebf7fd;
            color: #2d7091;
            border-collapse: collapse;
            border: 1px solid rgba(45, 112, 145, .3);
            margin-left: 20px;
            overflow: hidden;
        }
        #server-info td{
            padding: 10px 20px;
        }

        #one-glance td {
            /*border :1px solid rgba(45, 112, 145, .2);*/
            text-align: center;
            padding: 10px 20px;
        }

        #one-glance td a {
            color: #777;
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
    </script>
</head>
<body>
<div id="container">
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
            <div class="content-title">
                <a href="#">后台首页</a>
            </div>
            <div style="padding: 20px 20px; text-align: left">
                <span style="margin-left: 20px;margin-bottom: 10px;  display: block; color: #777;">一览:</span>
                <table id="one-glance">
                    <tr>
                        <td>文章数量</td>
                        <td>评论数量</td>
                        <td>留言数量</td>
                        <td>浏览人数</td>
                        <td>在线人数</td>
                    </tr>
                    <tr>
                        <td><a href="#">100</a></td>
                        <td><a href="#">100</a></td>
                        <td><a href="#">100</a></td>
                        <td><a href="#">1000</a></td>
                        <td><a href="#">1000</a></td>
                    </tr>
                </table>
            </div>
            <div style="padding: 20px 20px; text-align: left">
                <span style="margin-left: 20px;margin-bottom: 10px;  display: block; color: #777;">服务器状态:</span>
                <table id="server-info">
                    <tr>
                        <td>服务器IP</td>
                        <td>192.168.1.1</td>
                    <tr>
                        <td>服务器域名</td>
                        <td>localhost</td>
                    </tr>
                    <tr>
                        <td>服务器WEB端口</td>
                        <td>80</td>
                    </tr>
                    <tr>
                        <td>服务器时间</td>
                        <td>2016/025/24 19:50:00</td>
                    </tr>
                    <tr>
                        <td>当前文件路径</td>
                        <td>http://localhost/brtobj/index.php/Admin/Index/Index.html#</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!--<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>-->
</div>
</body>
</html>