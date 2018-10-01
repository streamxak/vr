<?php
	class router {
		
		private $routes;
		
		public function __construct() {
			$routesPath = ROOT.'/config/routes.php';
			$this->routes = include($routesPath);
		}
		
		//Получаем строку запроса
		private function getURI() {
			if(!empty($_SERVER['REQUEST_URI'])) {
				return trim($_SERVER['REQUEST_URI'], '/');
			}
		}
		
		public function run() {
			
			//Проверим существование строки запроса в routes.php
			foreach($this->routes as $uriPattern => $path) {
				
				if (preg_match("~$uriPattern~", $this->getURI())) {
					
					//Получаем внутренние адреса из внешнего
					$internalRoute = preg_replace("~$uriPattern~", $path, $this->getURI());
					
					$segments = explode('/', $internalRoute);
					
					//Получаем название контроллера (1й элемент массива)
					$controllerName = array_shift($segments);
					//Получаем название экшена (2й элемент массива)
					$actionName = array_shift($segments);
					
					//Получаем остальные значения массива - парамерты
					$params = $segments;
					
					//Подключаем файл контроллера
					$controllerFile = ROOT.'/controller/'.$controllerName.'.php';
					if (file_exists($controllerFile)) {
						include_once($controllerFile);
					}
					
					//Создаем объект, вызываем экшн
					$controllerObject = new $controllerName;
					$result = call_user_func_array(array($controllerObject, $actionName), $params);
					if ($result != null) {
						break;
					}
				}
			}
			
		}
	}
?>