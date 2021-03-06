<?php
header("Access-Control-Allow-Origin: *");
$urlarr = parse_url($_SERVER["REQUEST_URI"]);
include_once 'goauth_server/load.php';

//路由
switch ($urlarr['path']) {

    // 请求小程序码
    case '/qrcode':
        require 'goauth_server/qrcode.php';
        exit;
        break;

    // 验证
    case '/verify':
        require 'goauth_server/verify.php';
        exit;
        break;

    // Test
    case '/goauth':
        require 'goauth_server/test.php';
        exit;
        break;

    // 获取来源域名信息
    case '/getreferer':
        require 'goauth_server/getreferer.php';
        exit;
        break;

    // 获取openid
    case '/login':
        require 'goauth_server/login.php';
        exit;
        break;
}

echo 'GoAuth SERVER';