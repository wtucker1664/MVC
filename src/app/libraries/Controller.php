<?php
/*
    Base Controller
    Loads the models and views
*/
class Controller {
    // load model
    public function model($model) {
        if(file_exists('../app/models/' . $model . '.php')) {
            require_once '../app/models/' . $model . '.php';
        }else{
            die('Model does not exist');
        }

        return new $model();
    }

    public function view($view, $data = []) {
        if(file_exists('../app/views/' . $view . '.php')) {
            require_once '../app/views/' . $view . '.php';
        }else{
            die('View does not exist');
        }
        
    }
}