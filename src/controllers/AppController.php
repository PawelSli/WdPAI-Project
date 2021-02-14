<?php

class AppController {

    private $request;
    private $url;

    public function __construct()
    {
        $this->url = "http://$_SERVER[HTTP_HOST]";
        $this->request = $_SERVER['REQUEST_METHOD'];
    }

    protected function isGet(): bool{
        return $this->request==='GET';
    }

    protected function isPost(): bool{
        return $this->request==='POST';
    }

    public function come(){
        session_start();
        $url = "http://$_SERVER[HTTP_HOST]";
        if (!isset($_SESSION["user_email"]))
        {
            header("Location: {$url}/login");
        }
    }

    public function logout(){
        session_start();
        session_destroy();
        session_unset();
        $url = "http://$_SERVER[HTTP_HOST]";
        $this->render('login');
    }

    protected function render(string $template = null, array $variables = [])
    {
        $templatePath = 'public/views/'. $template.'.php';
        $output = 'File not found';
                
        if(file_exists($templatePath)){
            extract($variables);
            
            ob_start();
            include $templatePath;
            $output = ob_get_clean();
        }
        print $output;
    }
}