<<<<<<< HEAD
<?php

class Controller{
  public function view($view, $data = []){
    if (empty($_SESSION['session_login'])){
      require_once 'app/views/login/index.php';
    }else{
      require_once 'app/views/' . $view . '.php';
    }
  }

  public function model($model){
  	require_once 'app/models/' . $model . '.php';
  	return new $model;
  }
}
=======
<?php

class Controller{
  public function view($view, $data = []){
    if (empty($_SESSION['session_login'])){
      require_once 'app/views/login/index.php';
    }else{
      require_once 'app/views/' . $view . '.php';
    }
  }

  public function model($model){
  	require_once 'app/models/' . $model . '.php';
  	return new $model;
  }
}
>>>>>>> 1a877eb8066d2295c3c1f7774ec464b5cbd42538
