<?
$appItem = \Ryir\Core\Application::getInstance();
$pageItem = $appItem->getPage();

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <? $pageItem->showHead(); ?>
    <title><? $pageItem->showProperty('title'); ?></title>


</head>

<body>
    <? $pageItem->addCss('templates/alice/assets/css/style.css'); ?> 
    <? $pageItem->addJs('templates/alice/assets/js/auth.js'); ?>
    <? $pageItem->addJs('templates/alice/assets/js/jquery-3.6.0.min.js'); ?>
    <? $pageItem->addJs('templates/alice/assets/js/script.js'); ?>
    <? $pageItem->setProperty('title', 'Home'); ?>
    <? $appItem->includeComponent('ryir:NeX', 'stis', [21, 23]);?>
    <? $appItem->includeComponent('ryir:NeX', 'stis', [21, 23]);?>