<?php

// HACH：Better to change the directory path to a constant
require_once __DIR__ . '/DB/MYSQL/sql.php';
require_once __DIR__ . '/DB/MYSQL/fomatter.php';
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
$db_formatter = new DbFormatter();
$db_formatter->setDbList($mysql->select_all(), 'asin');
$db_formatter_list = $db_formatter->getDbList();

$search_action = new SearchAction();
$search_action->setUrlList($db_formatter_list);

// XXX：The link below does not work properly due to age restrictions
$search_action->serach_all($search_action->getUrlList());

 ?>