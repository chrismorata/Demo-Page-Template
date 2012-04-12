<?php
require_once('../_resources/includes/Demo.class.php');

$demo = new Demo("Title");
$demo->setDescription("Description");
$demo->addCSS('demo.css');
$demo->addJS('demo.js');

$demo->startDemo();
?>
<!-- demo goes here-->
<?
$demo->endDemo();

$demo->displaySource($demo->content, 'html');
$demo->displaySource($demo->css[0], 'css');
$demo->displaySource($demo->js[0], 'js');

$demo->renderDemo();
?>

    