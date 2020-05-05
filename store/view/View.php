<?php
abstract class  View{
    protected $model;
    protected $controller;

    public function __construct($controller, $model) {
        $this->model = $model;
    }
	
    public abstract function output();
}?>
