<?php

ini_set('allow_url_fopen', 1);

switch (@parse_url($_SERVER['REQUEST_URI'])['path']) {

    case '/':
    case '/index':
    case '/index.php':
        require 'index.php';
        break;

    case '/editSent':
    case '/editSent.php':
        require 'editSent.php';
        break;

    case '/editSentProses':
    case '/editSentProses.php':
        require 'editSentProses.php';
        break;

    case '/inbox':
    case '/inbox.php':
    case '/Inbox':
    case '/Inbox.php':
        require 'inbox.php';
        break;

    case '/login':
    case '/login.php':
        require 'login.php';
        break;

    case '/loginproses':
    case '/loginproses.php':
        require 'loginproses.php';
        break;

    case '/logout':
    case '/logout.php':
        require 'logout.php';
        break;

    case '/readInboxDecrypt':
    case '/readInboxDecrypt.php':
        require 'readInboxDecrypt.php';
        break;

    case '/readSent':
    case '/readSent.php':
        require 'readSent.php';
        break;

    case '/sent':
    case '/sent.php':
        require 'sent.php';
        break;

    case '/signup':
    case '/signup.php':
        require 'signup.php';
        break;

    case '/signupproses':
    case '/signupproses.php':
        require 'signupproses.php';
        break;

    case '/unsend':
    case '/unsend.php':
        require 'unsend.php';
        break;

    case '/write':
    case '/write.php':
        require 'write.php';
        break;

    case '/writeproses':
    case '/writeproses.php':
        require 'writeproses.php';
        break;

    default:
        http_response_code(404);
        echo @parse_url($_SERVER['REQUEST_URI'])['path'];
        exit('Not Found');
}
?>