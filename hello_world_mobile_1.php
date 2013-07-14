<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ADMIN
 * Date: 7/14/13
 * Time: 3:48 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" >

    <title> Hello World Javascript </title>

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
    <![endif]-->


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.css" />

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

    <script src="http://code.jquery.com/mobile/1.3.1/jquery.mobile-1.3.1.min.js"></script>

</head>

<body>

<div data-role="page" id="home">
    <div data-role="header">
        <h1>Hello World Mobile</h1>
    </div>
    <div data-role="content">
        <div style="text-align: center;">
            <h2>Hello World Mobile</h2>
            <img src="css/images/logo.png" width="200" alt="Logo">
        </div>
        <p>Welcome to Mobile Web Applications</p>
    </div>
    <div data-role="footer" data-position="fixed" data-id="nav">
        <div data-role="navbar">
            <ul>
                <li><a href="#home" class="ui-btn-active ui-state-persist">Home</a></li>
                <li><a href="#products">Products</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>

</body>
</html>

