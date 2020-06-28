<?php


    class Router
    {
        
        private $ctrl;
        
        public function route()
        {
            
            //genered inclures dynamique
            spl_autoload_register(function($class){
                $patthModels=ROOT."Models/".$class.".php";
                $patthDao=ROOT."dao/".$class.".php";
                $patthLibs=ROOT."libs/".$class.".php";
                if (file_exists($patthModels)) {
                    require_once($patthModels);
                }elseif(file_exists($patthDao)){
                    require_once($patthDao);
                }elseif(file_exists($patthLibs)){
                    require_once($patthLibs);
                }
            });



            if (isset($_GET['url'])) {

                $url = explode('/',filter_var($_GET['url']),FILTER_SANITIZE_URL);
                $fileController = ucfirst(strtolower($url[0]))."Controller";
                $folderController = ROOT.'controllers/'.$fileController.'.php';
                if (file_exists($folderController))
                {
                    //instancier un Objet Controller
                    require_once($folderController);
                    $controller = new $fileController;
                    $action = isset($url[1])?$url[1] :'index';
                    if (method_exists($controller,$action)) {
        
                        $controller->$action();
                    }else
                    {
                        require_once(ROOT.'controllers/AdminController.php');
                        $controller = new AdminController;
                        $controller->index();
                    }
                }
                else
                {
                        require_once(ROOT.'controllers/AdminController.php');
                        $controller = new AdminController;
                        $controller->index();
                }
            }
            else
            {
                require_once(ROOT.'controllers/AdminController.php');
                $controller = new AdminController;
                $controller->index();
    }
        }
    }