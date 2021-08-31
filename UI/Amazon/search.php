<?php 

// HACH：Better to change the directory path to a constant
require_once __DIR__ . '/../Chrome/driver.php';
require_once __DIR__ . '/../../vendor/autoload.php';
use Facebook\WebDriver\WebDriverExpectedCondition;

class SearchAction {
	private $url_list = [];
	private $url = 'https://www.amazon.co.jp/dp/';

	private function create_url($url_value) {
		return $this->url.$url_value;
	}
	public function getUrlList() {
		return $this->url_list;
	}
	public function setUrlList($list) {
		if (!is_array($list)) {
			throw new Exception('This is error. Please put a character array in argument');
		}
		$this->url_list = array_map(array($this, 'create_url'), $list);
	}
	public function serach_screenshot_all($url_list) {
		global $driver;
		if (!is_array($url_list)) {
			throw new Exception('This is error. Please put a character array in argument');
		}
		foreach ($url_list as $url) {
			$driver->get($url);
			$driver->wait(3)->until(
				WebDriverExpectedCondition::urlIs($url)
			);
			$img_name = str_replace('https://www.amazon.co.jp/dp/', '', $url);
			var_dump($url);
			$file = './img/'.$img_name.'.png';
			$driver->takeScreenshot($file);
		}$driver->quit();
	}
}

 ?>