<?php if (!defined('THINK_PATH')) exit();?><html class="brt-notouch">
<head>
    <meta charset="utf-8">
    <title>BrightObject</title>

    <link rel="stylesheet" href="/brtobj/Public/css/style.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            border: 0;
        }

        html {
            height: 100%;
            /*background: #f5f5f5;*/
            background-color: #ededed;
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
            background-color: #fdffe7;

            box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);

        }

        #content-board {
            border-radius: 10px;
            background-color: #fdffe7;
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
            background-color: #fdffe7;
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
            border: 1px solid #ccc;
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
            border-left: 1px solid #ccc;
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
            border-top: 1px solid #ccc;
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
            border-top: 1px solid #ccc;
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
            background-color: #fdffe7;
        }

        #content-board {
            background: #fdffe7;
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
            border-bottom: 1px solid #ccc;
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
            border-top: 1px solid #ccc;
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

        #pager-board{
            padding: 0;
            list-style: none;
            text-align: center;
            font-size: 0;
            margin-top: 15px;

        }
        #pager-board:before{
            content: "";
            display: table;
        }
        #pager-board:after{
            content: "";
            display: table;
            clear: both;
        }
        #pager-board>li{
            display: inline-block;
            font-size: 1rem;
            vertical-align: top;
        }
        #pager-board>li:nth-child(n+2){
            margin-left: 5px;
        }

        #pager-board>li>span ,#pager-board>li>a{
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

        #pager-board>li>a {
            /*background: #f5f5f5;*/
            background: #fff;
            background-color: #fdffe7;
            color: #444;
            text-shadow: 0 1px 0 #fff
        }

        #pager-board>.pager-active>span{
            background: #00a8e6;
            color: #fff;
            border-color: transparent;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, .05);
            text-shadow: 0 -1px 0 rgba(0, 0, 0, .1);
            outline: none;
        }

        #pager-board>li > a:focus, #pager-board>li > a:hover {
            background-color: #fcfcfc;
            color: #444;
            outline: 0;
            border-color: rgba(0, 0, 0, .16)
        }

        #pager-board>li> a:active {
            background-color: #ccc;
            color: #444
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
            <h1 class="blog-name">yucha0</h1>

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
                <input type="text" placeholder="Search">
            </form>
        </div>
    </div>

    <div id="container-right" class="brt-width-large-4-5 brt-width-medium-3-4">
        <div id="content-board">
            <!--<div class="content">-->
            <h4 class="index-title">最新文章</h4>
            <div class="index-list">


                <article class="article">
                    <h1><a href="http://blog.ikyxxs.com/index.php/2016/05/09/696/"
                           data-slimstat-clicked="false" data-slimstat-type="2"
                           data-slimstat-tracking="false" data-slimstat-async="false"
                           data-slimstat-callback="false">untitled</a></h1>
                    <p>Don’t let anything stop you from chasing dreams, stop your work or play or fall in love. ——《Front
                        of the Class》
                        <time><br>2016年5月9日</time>
                    </p>
                </article>
                <article class="article"><h1><a href="http://blog.ikyxxs.com/index.php/2016/05/09/695/"
                                                data-slimstat-clicked="false" data-slimstat-type="2"
                                                data-slimstat-tracking="false" data-slimstat-async="false"
                                                data-slimstat-callback="false">untitled</a></h1>
                    <p>生活从来都不容易。当你觉得容易的时候，肯定是有人在替你承担属于你的那份不易。 —— 知乎「哪一幕让你觉得生活不容易？」 周防李四
                        <time><br>2016年5月9日</time>
                    </p>
                </article>
                <article class="article"><h1><a
                        href="http://blog.ikyxxs.com/index.php/2016/05/06/%e4%bf%ae%e5%a4%8delasticsearch%e7%9a%84unassigned-shards/"
                        data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                        data-slimstat-async="false" data-slimstat-callback="false">修复Elasticsearch的Unassigned shards</a>
                </h1>
                    <p>
                        <a href="http://blog.ikyxxs.com/index.php/2016/05/06/%e4%bf%ae%e5%a4%8delasticsearch%e7%9a%84unassigned-shards/"
                           data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                           data-slimstat-async="false" data-slimstat-callback="false"></a>
                        <time><br>2016年5月6日</time>
                    </p>
                </article>
                <article class="article"><h1><a
                        href="http://blog.ikyxxs.com/index.php/2016/04/28/intellij-idea%e4%b8%8blombok%e7%9a%84%e5%ae%89%e8%a3%85%e5%92%8c%e4%bd%bf%e7%94%a8/"
                        data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                        data-slimstat-async="false" data-slimstat-callback="false">IntelliJ IDEA下Lombok的安装和使用</a></h1>
                    <p>安装Lombok 点击 File→Settings→Plugins→Browse repositories... 搜索框中输入lombok 找到Lombok Plugin并安装 &nbsp;
                        使用Lombok 点击 File→Setting...
                        <time><br>2016年4月28日</time>
                    </p>
                </article>
                <article class="article"><h1><a href="http://blog.ikyxxs.com/index.php/2016/04/26/669/"
                                                data-slimstat-clicked="false" data-slimstat-type="2"
                                                data-slimstat-tracking="false" data-slimstat-async="false"
                                                data-slimstat-callback="false">untitled</a></h1>
                    <p>In Zootopia, anyone can be anything. —— 《Zootopia》 Judy
                        <time><br>2016年4月26日</time>
                    </p>
                </article>
                <article class="article"><h1><a href="http://blog.ikyxxs.com/index.php/2016/04/15/645/"
                                                data-slimstat-clicked="false" data-slimstat-type="2"
                                                data-slimstat-tracking="false" data-slimstat-async="false"
                                                data-slimstat-callback="false">untitled</a></h1>
                    <p>人活着本来就没什么意义 但只有活下去 才能找到有趣的事物 就像你找到了这朵花 就像我找到了你 —— 《火影忍者》 岸本齐史
                        <time><br>2016年4月15日</time>
                    </p>
                </article>
                <article class="article"><h1><a
                        href="http://blog.ikyxxs.com/index.php/2016/04/15/%e5%88%a0%e9%99%a4git%e4%b8%8a%e6%8c%87%e5%ae%9a%e6%96%87%e4%bb%b6%e7%9a%84%e6%89%80%e6%9c%89%e5%8e%86%e5%8f%b2%e7%89%88%e6%9c%ac/"
                        data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                        data-slimstat-async="false" data-slimstat-callback="false">删除Git上指定文件的所有历史版本</a></h1>
                    <p>git filter-branch --force --index-filter 'git rm --cached --ignore-unmatch 文件名' --prune-empty
                        --tag-name-filter cat -- -...
                        <time><br>2016年4月15日</time>
                    </p>
                </article>
                <article class="article"><h1><a
                        href="http://blog.ikyxxs.com/index.php/2016/04/13/activiti%e5%8d%81%e5%88%86%e9%92%9f%e6%95%99%e7%a8%8b/"
                        data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                        data-slimstat-async="false" data-slimstat-callback="false">Activiti十分钟入门教程</a></h1>
                    <p>此文为翻译，原文地址：7.3. Getting started: 10 minute tutorial (v 5.19.0) 7.3. 入门: 10分钟教程
                        在这个章节，我们会通过一个（非常简单的）业务流程来介绍Activiti的一些基本概...
                        <time><br>2016年4月13日</time>
                    </p>
                </article>
                <article class="article"><h1><a href="http://blog.ikyxxs.com/index.php/2016/04/07/generate-uberjar/"
                                                data-slimstat-clicked="false" data-slimstat-type="2"
                                                data-slimstat-tracking="false" data-slimstat-async="false"
                                                data-slimstat-callback="false">generate uberjar</a></h1>
                    <p>//Test.groovy class Test{ static void main(def args) { } } //build.gradle apply plugin: 'groovy'
                        apply plugin: 'applicat...
                        <time><br>2016年4月7日</time>
                    </p>
                </article>
                <article class="article"><h1><a
                        href="http://blog.ikyxxs.com/index.php/2016/04/07/no-property-mainclassname-class/"
                        data-slimstat-clicked="false" data-slimstat-type="2" data-slimstat-tracking="false"
                        data-slimstat-async="false" data-slimstat-callback="false">No such property: mainClassName for
                    class</a></h1>
                    <p>错误： No such property: mainClassName for class:
                        org.gradle.api.internal.project.DefaultProject_Decorated &nbsp; &nbsp; 解决...
                        <time><br>2016年4月7日</time>
                    </p>
                </article>


            </div>
            <!--</div>-->
        </div>
        <ul id="pager-board">
            <li class="pager-active"><span>1</span></li>
            <li><a href="http://blog.ikyxxs.com/index.php/page/2/" data-slimstat-clicked="false"
                   data-slimstat-type="2" data-slimstat-tracking="false" data-slimstat-async="false"
                   data-slimstat-callback="false">2</a></li>
            <li><a href="http://blog.ikyxxs.com/index.php/page/3/" data-slimstat-clicked="false"
                   data-slimstat-type="2" data-slimstat-tracking="false" data-slimstat-async="false"
                   data-slimstat-callback="false">3</a></li>
            <li><a href="http://blog.ikyxxs.com/index.php/page/4/" data-slimstat-clicked="false"
                   data-slimstat-type="2" data-slimstat-tracking="false" data-slimstat-async="false"
                   data-slimstat-callback="false">4</a></li>
            <li><a href="http://blog.ikyxxs.com/index.php/page/2/" data-slimstat-clicked="false"
                   data-slimstat-type="2" data-slimstat-tracking="false" data-slimstat-async="false"
                   data-slimstat-callback="false">»</a></li>
        </ul>
    </div>
</div>

<!--<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>-->
</div>
<!--<footer id="footer">-->
    <!--<p> Brtobj 版权所有&copy; 2016</p>-->
<!--</footer>-->
</body>
</html>