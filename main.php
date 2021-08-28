<?php

// HACH：Better to change the directory path to a constant
require_once __DIR__ . '/DB/MYSQL/sql.php';
require_once __DIR__ . '/UI/Amazon/search.php';
require_once __DIR__ . '/vendor/autoload.php';
use Facebook\WebDriver\Chrome\ChromeOptions;


$options = new ChromeOptions();
$options->addArguments([
    'disable-infobars',
    /* If you want to use headless, see comment out below
     */
    #'--headless',
    'start-maximized',
    'window-size=1920,1600'
]);

$mysql = new MYSQL();
var_dump($mysql->select_all());

 ?>