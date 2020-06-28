<?php

class Controller
{
    
    protected $folder;
    protected $view;


    public function  render(array $data=[])
    {
        extract($data);
        $pathView = ROOT.'views/'.$this->folder.'/'.$this->view.'.php';
        $pathLayout = ROOT.'views/layaout/default.php';

        ob_start();
        require_once($pathView);
        $container = ob_get_clean();
        require_once($pathLayout);
    }

    // public function  loadModel(string $model)
    // {
    //     $model = $model;
    //     require_once ROOT.$model.'.php';
    //     $this->$model = new $model();
    // }
}


