<?php
 
class Application
{
	private $controller = null;
	private $action = null;
 
	public function __construct()
	{
		$cancontroll = false;
		$url = "";
		if (isset($_GET['url'])) {
			$url = rtrim($_GET['url'], '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
		}
		$params = explode('/', $url);
		$counts = count($params);
		$this->controller = "home";
		if(isset($params[0])) {
			if($params[0]) $this->controller = $params[0];
		}
		if (file_exists('./application/controller/' . $this->controller . '.php')) {
			require './application/controller/' . $this->controller . '.php';
			$this->controller = new $this->controller();
			$this->action = "index"; 
			if(isset($params[1])) {
				if($params[1]) $this->action = $params[1];
			}
			if (method_exists($this->controller, $this->action)) {
				$cancontroll = true;
				switch ($counts) {
					case '0':
					case '1':
					case '2':
						$this->controller->{$this->action}();
						break;
				}	
			}
		}
		if($cancontroll === false) echo "<!DOCTYPE html><html><head><meta charset='utf-8'></head><body><h1>Oops!!! 잘못된 접근입니다.</h1></body></html>";
	}
}
?>