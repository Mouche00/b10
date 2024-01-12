<?php 
/**
 * App Core Class
 * Creates URL & loads core controller 
 * URL Format - /controller/method/params
 */

class Core 
{
    protected $currentController = 'ClientRouter';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        $url = $this->getUrl();

        if(count($url) > 1) {

            // Name of controller is always an uppercase file
            $controller = ucwords($url[0]);
            if($controller == "Admin" || $controller == "Client") {
                $controller = $controller . "Router";
                if (file_exists("../app/controllers/$controller.php")) {
                    $this->currentController = $controller;
                    unset($url[0]);
                }

            } else {

                if (file_exists("../app/controllers/$controller.php")) {
                    $this->currentController = $controller;
                    unset($url[0]);
                }

            }

        } else if(count($url) == 1) {
            $url[1] = $url[0];
        }


        require_once "../app/controllers/{$this->currentController}.php";
        $this->currentController = new $this->currentController;

        if (isset($url[1]) && method_exists($this->currentController, $url[1])) {
            $this->currentMethod = $url[1];
            unset($url[1]);
        }

        // Other parts of the url are unset, all remaining parts are parameters
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}