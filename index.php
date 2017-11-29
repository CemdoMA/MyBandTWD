<?php

//configuration settings
require 'includes/config.php';



//initialisation
require 'includes/bootstrap.php';

// head
$templateParser->assign('myTitle', $title);
$templateParser->display('head.tpl');
// header

$templateParser->display('header.tpl');

isset($_GET['url']) ? $action = $_GET['url'] : $action = 'home';

switch ($action) {
    case 'home':
        require_once 'model/getarticles.php';
        $templateParser->assign('result_list', $result_list);
        include 'model/getpagination.php';
        $templateParser->assign('page', $page);
        $templateParser->assign('number_of_pages', $result);
        include 'model/getdata.php';
        $templateParser->assign('article_list', $result);

        $templateParser->display('home.tpl');

        break;
    case 'information':
        require_once 'model/getinformation.php';
        $templateParser->assign('information_list', $information_list);
        $templateParser->display('information.tpl');
        break;
    case 'episodes':
        require_once 'model/getepisodes.php';
        $templateParser->assign('episodes_list', $episodes_list);
        $templateParser->display('episodes.tpl');
        break;
    case 'contact':
        //contact
        $templateParser->display('contact.tpl');
        break;
}

// footer
$templateParser->display('footer.tpl');

?>