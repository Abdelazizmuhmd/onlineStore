<?php
require_once("../modal/Modal.php");
abstract class Controller
{
    protected $model;
    public function __construct($model) {
        $this->model = $model;
    }
}
?>
