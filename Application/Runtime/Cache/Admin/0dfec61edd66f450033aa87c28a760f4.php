<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brtobj 后台登陆</title>
    <!--&lt;!&ndash;<link href="/brtobj/Public/css/bootstrap.css" rel="stylesheet">&ndash;&gt;-->
    <!--&lt;!&ndash;<link href="/brtobj/Public/font-awesome/css/font-awesome.css" rel="stylesheet">&ndash;&gt;-->

    <!--&lt;!&ndash;<link href="/brtobj/Public/css/animate.css" rel="stylesheet">&ndash;&gt;-->
    <!--&lt;!&ndash;<link href="/brtobj/Public/css/style.css" rel="stylesheet">&ndash;&gt;-->
    <!--<script type="text/javascript" src="/brtobj/Public/js/jquery.min.js"></script>-->
    <!--<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>-->
    <!--<script type="text/javascript" src="/brtobj/Public/js/wp-sli.js"></script>-->
    <!--<script type="text/javascript" src="/brtobj/Public/js/wp.js"></script>-->


</head>
<style>
    * {
        margin: 0;
        padding: 0;
        outline: 0;
        border: 0;
    }

    html {
        height: 100%;
        background: #ededed;
    }

    html,body {
        height: 100%;
        text-align: center;
        color: #333;
        font: 12px / 24px Hiragino Sans GB, Microsoft Yahei, SimSun, Helvetica, Arial, Sans-serif;
        padding: 0 3px 1px 3px;
    }

    .login-wrapper {
        display: table;
        width: 100%;
        height: 99%;
        min-height: 99%;
    }

    .login-wrapper-inner {
        display: table-cell;
        vertical-align: middle;

    }

    form {
        width: 20em;
        border-radius: 10px;
        background-color: #fdffe7;
        margin: 0 auto;
        padding-top: 40px;
        padding-bottom: 20px;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
    }

    input {
        border-radius: 3px;
        height: 30px;
        max-width: 100%;
        padding: 4px 6px;
        border: 1px solid #ddd;
        background: #fff;
        color: #444;
        transition: all linear .2s;
        padding-left: 30px !important;
        box-sizing: border-box;
        margin-bottom: 7px;
        -webkit-appearance: none;
    }

    button {
        background: #f5f5f5;
        width: 50px;
        height: 50px;
        border: 1px solid rgba(0, 0, 0, .06);
        border-radius: 25px;
        text-shadow: 0 1px 0 #fff;
        line-height: 18px;
        font-size: 20px;
        color: rgba(0, 0, 0, .5);
    }

    #footer {
        display: table-row;
        height: 37px;
    }

    #footer p {
        width: 30em;
        border-radius: 10px;
        background-color: white;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, .02), 0 4px 10px rgba(0, 0, 0, .06);
        color: black;
        margin: 0 auto;
        z-index: 2;
    }

    input:focus {
        border-color: #99baca;
        outline: 0;
        background: #f5fbfe;
        color: #444
    }

    button:focus, button:hover {
        background-color: #f5fbfe;
        color: #444;
        /*outline: 0;*/
        text-decoration: none;
        border-color: #99baca;
        color:red;
    }
</style>
<body>

<div class="login-wrapper">
    <div class="login-wrapper-inner">
        <form action="/brtobj/index.php/Admin/Login/checkLogin" method="post">
            <div>
                <input type="text" name="username" placeholder="用户名">
            </div>
            <div>
                <input type="password" name="password" placeholder="密码">
            </div>

            <div>
                <button type="submit">入</button>
            </div>
        </form>
    </div>
    <!--<footer id="footer">-->
        <!--<p> Brtobj 版权所有&copy; 2016</p>-->
    <!--</footer>-->
    <!--<script type="text/javascript" src="/brtobj/Public/js/canvas.js"></script>-->
</div>
</body>
</html>