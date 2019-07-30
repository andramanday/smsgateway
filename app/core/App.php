<<<<<<< HEAD
<?php

class App{
	protected $controller = 'message';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{

		
		  $url = $this->parseURL();
		  //var_dump($url);
    	
    	//controllers
  		if( file_exists('app/controllers/' . $url[0] . '.php') ){
  			$this->controller = $url[0];
  			unset($url[0]);

  		}

  		require_once 'app/controllers/' . $this->controller . '.php';
  		$this->controller = new $this->controller;

  		//method
  		if( isset($url[1])){
  			if( method_exists($this->controller, $url[1]) ){
  				$this->method = $url[1];
  				unset($url[1]);
  			}
  		}

  		// parameters
  		if( !empty($url) ) {
  			$this->params  = array_values($url);
  		}

  		// Jalanan controller & method, serta parameter jika ada
		  call_user_func_array([$this->controller, $this->method], $this->params);
		  
  	}

  	public function parseURL()
  	{
  		if (isset($_GET['url']))
  		{
  			$url = rtrim($_GET['url'], '/');
  			$url = filter_var($url, FILTER_SANITIZE_URL);
  			$url = explode('/', $url);
  			return $url;
  		}
  	}
}
=======
<?php

class App{
	protected $controller = 'message';
	protected $method = 'index';
	protected $params = [];

	public function __construct()
	{

		
		  $url = $this->parseURL();
		  //var_dump($url);
    	
    	//controllers
  		if( file_exists('app/controllers/' . $url[0] . '.php') ){
  			$this->controller = $url[0];
  			unset($url[0]);

  		}

  		require_once 'app/controllers/' . $this->controller . '.php';
  		$this->controller = new $this->controller;

  		//method
  		if( isset($url[1])){
  			if( method_exists($this->controller, $url[1]) ){
  				$this->method = $url[1];
  				unset($url[1]);
  			}
  		}

  		// parameters
  		if( !empty($url) ) {
  			$this->params  = array_values($url);
  		}

  		// Jalanan controller & method, serta parameter jika ada
		  call_user_func_array([$this->controller, $this->method], $this->params);
		  
  	}

  	public function parseURL()
  	{
  		if (isset($_GET['url']))
  		{
  			$url = rtrim($_GET['url'], '/');
  			$url = filter_var($url, FILTER_SANITIZE_URL);
  			$url = explode('/', $url);
  			return $url;
  		}
  	}
}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
