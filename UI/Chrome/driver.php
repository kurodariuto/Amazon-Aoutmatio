<?php 
require_once __DIR__ . '/../../vendor/autoload.php';
use Facebook\WebDriver\Chrome\ChromeDriver;

/*Need to install chromedriver and also need to path the pass
  Pay attention to the permissios of usr/local/bin
  DowonLod：https://chromedriver.chromium.org/downloads
*/
$driverPath = realpath("/usr/local/bin/chromedriver");
putenv("webdriver.chrome.driver=" . $driverPath);
$driver = ChromeDriver::start();

 ?>