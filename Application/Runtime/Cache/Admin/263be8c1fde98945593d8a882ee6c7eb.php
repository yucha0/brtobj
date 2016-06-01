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
            /*margin-top: 20px;*/
            /*margin-left: 10px;*/
            border-radius: 10px;
            height: 558px;
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
        #navi-msgs > a,
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
        #navi-msgs,
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
        #navi-sub-msgs a,
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
            background: #ebf7fd;
            /*color: #FFF !important;*/
            /*text-shadow: none !important;*/

            /*background: #fcfcfc;*/
            /*outline: 0;*/
            /*border-color: rgba(0, 0, 0, .16);*/
        }

        #navi .navi {
            border-left: none;
        }

        #navi .navi-active {
            border-left: 2px solid #2d7091;
            /*border-right: 2px solid #44cef6;*/
            /*box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .09);*/
        }

        #navi .navi-a-active {
            background: #ebf7fd;
            /*color: #FFF !important;*/
            /*text-shadow: none !important;*/
            /*box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .09);*/
            /*border-bottom: 2px solid #44cef6;*/
            /*border-top: 1px solid #44cef6;*/
            /*border-right: 1px solid #44cef6;*/
            /*border-bottom: 1px solid #44cef6;*/
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

        #one-glance
        {
            width: 100%;
            text-align: left;
            padding: 0px 10px;
            background: #ebf7fd;
            color: #2d7091;
            border-collapse: collapse;
            border-spacing: 0;
            border: 1px solid rgba(45, 112, 145, .3);
            /*margin-left: 20px;*/
            overflow: hidden;
        }

        #one-glance thead{
            border-bottom: 2px solid rgba(45, 112, 145, .2);
        }

        #one-glance td {
            border: 1px solid rgba(45, 112, 145, .2);
            text-align: left;
            padding: 5px 20px;
            /*font-size: 18px;*/
        }
        #one-glance th{
            border: 1px solid rgba(45, 112, 145, .2);
            text-align: center;
            padding: 10px 20px;
            text-align: left;
        }

        #one-glance td a {
            color: #777;
        }

        #one-glance td a:hover,
        #one-glance td a:focus
        {
            color: black;
        }

        #pager{
            margin-top: 20px;
            text-align: right;
        }
        #pager a{
            display: inline-block;
            min-width: 16px;
            padding: 3px 5px;
            line-height: 20px;
            text-decoration: none;
            box-sizing: content-box;
            text-align: center;
            /*border: 1px solid rgba(0, 0, 0, .06);*/
            border-radius: 4px;
            background-color: #ebf7fd;
            color: #2d7091;
            font-size: 1rem;
            margin: 1px;
        }
        #pager .current{
            display: inline-block;
            min-width: 16px;
            padding: 3px 5px;
            line-height: 20px;
            text-decoration: none;
            box-sizing: content-box;
            text-align: center;
            border: 1px solid #2d7091;
            border-radius: 4px;
            color: #2d7091;
            background-color: #ebf7fd;
        }
        #pager .first{
            display: none;
        }
        #pager .end{
            display: none;
        }
    </style>
    <script type="text/javascript">
        var broken = false;
        function show(id) {
            if (broken) {
                broken = false;
                return;
            }
            var subs = document.getElementById('navi-root').getElementsByTagName('ul');
            for (var i = 0; i < subs.length; i++) {
                subs[i].style.display = "none";
            }
            var as = document.getElementById('navi-root').getElementsByTagName('a');
            for (var i = 0; i < as.length; i++) {
                as[i].className = "none";
            }
            document.getElementById('navi-home').className = 'navi';
            document.getElementById('navi-articles').className = 'navi';
            document.getElementById('navi-msgs').className = 'navi';
            document.getElementById('navi-comments').className = 'navi';
            var parent = document.getElementById(id);
            parent.className = 'navi-active';

            var sub = document.getElementById(id).getElementsByTagName('ul');
            if (sub.length > 0) {
                sub[0].style.display = 'block';
                var parenta = sub[0].getElementsByTagName('a');
                parenta[0].className = 'navi-a-active';

            } else {
                var parenta = parent.getElementsByTagName('a');
                parenta[0].className = 'navi-a-active';
            }
        }

        function subshow(id) {
            var as = document.getElementById('navi-sub-articles').getElementsByTagName('a');
            for (var i = 0; i < as.length; i++) {
                as[i].className = "none";

            }
            as[id].className = 'navi-a-active';

            broken = true;
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
            <ul id="navi-root">
                <li id="navi-home" onclick="show('navi-home')">
                    <a href="#">
                        <span class="front"></span>
                        <span>后台首页</span>
                        <span class="end"></span>
                    </a>
                </li>
                <li id="navi-articles" class="navi-active" onclick="show('navi-articles')">
                    <a href="#">
                        <span class="front"></span>
                        <span>文章管理</span>
                        <span class="end"></span>
                    </a>
                    <ul class="navi-sub" style="display: block" id="navi-sub-articles">
                        <li><a href="/brtobj/index.php/Admin" class="navi-a-active" onclick="subshow(0)">所有文章</a></li>
                        <li><a href="#2" onclick="subshow(1)">新文章</a></li>
                        <li><a href="#3" onclick="subshow(2)">类别</a></li>
                        <li><a href="#4" onclick="subshow(3)">标签</a></li>
                    </ul>
                </li>
                <li id="navi-msgs" onclick="show('navi-msgs')">
                    <a href="#">
                        <span class="front"></span>
                        <span>留言管理</span>
                        <span class="end"></span>
                    </a>
                    <ul class="navi-sub" id="navi-sub-msgs">
                        <li><a href="#">所有留言</a></li>
                    </ul>
                </li>
                <li id="navi-comments" onclick="show('navi-comments')">
                    <a href="#">
                        <span class="front"></span>
                        <span>评论管理</span>
                        <span class="end"></span>
                    </a>
                    <ul class="navi-sub" id="navi-sub-comments">
                        <li><a href="#">所有评论</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="container-right">
        <div id="content">
            <div class="content-title">
                <a href="#">所有文章</a>
            </div>
            <div style="padding: 20px 20px; text-align: left">
                <table id="one-glance">
                    <thead>
                    <tr>
                        <th>序号</th>
                        <th>文章标题</th>
                        <th>发布时间</th>
                        <th>状态</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $k=>$vo): ?><tr class="gradeU">
                            <td><?php echo ($vo["id"]); ?></td>
                            <td><?php echo ($vo["title"]); ?></td>
                            <td><?php echo (date( "Y-m-d  H:i:s",$vo["ctime"])); ?></td>
                            <td>
                                <?php if($vo["status"] == 1): ?>显示
                                    <?php else: ?>
                                    <span style="color:red;">回收</span><?php endif; ?>
                            </td>
                            <td>
                                <a href="/brtobj/index.php/Home/Article/index/id/<?php echo ($vo["id"]); ?>" target="_blank">查看</a>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <a href="/brtobj/index.php/Admin/Articles/xianshi/id/<?php echo ($vo["id"]); ?>" onclick="return shifou();">显示</a>
                                <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                <a href="/brtobj/index.php/Admin/Articles/delete/id/<?php echo ($vo["id"]); ?>" onclick="return shifou();">回收</a>
                            </td>
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <div id="pager">
                    <?php echo ($page); ?>
                </div>
            </div>

        </div>
    </div>
    <!--<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>-->
</div>
</body>
</html>