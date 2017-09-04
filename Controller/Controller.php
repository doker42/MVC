<?php

class Controller
{
  protected $view_vars = [];
  protected $uses = [];
  
  public function __construct()
  {
    $model = str_replace('Controller', '', get_class($this));
    $this->useModel($model);
    foreach ($this->uses as $model)
    {
      $this->useModel($model);
    }

  }
  
  protected function useModel($model_name)
  {
    $model_name .= 'Model';
    $this->$model_name = new $model_name;
  }
  
  protected function set($name, $value)
  {
    $this->view_vars[$name] = $value;
  }
  
  protected function render($template)
  {
    $template .= '.php';
    if (!is_file('./Template/'.$template)) return false;
    $view_vars = $this->view_vars;
    require_once('./Template/layout.php');
  }
  
}