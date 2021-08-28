<?php
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

/* Need to set argument

   ※The following is the DB information   
   --- --- --- --- --- ---

   First argument：HOST
   Second argument：USER
   Third argument：PASS
   Fourth argument：DB
   Fifth argument：TABLE
*/

$mysql = new MYSQL();
var_dump($mysql->select_all());

 ?>