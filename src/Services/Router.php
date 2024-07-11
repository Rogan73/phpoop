<?php

namespace App\Services;

Class Router
{
   private static $list = [];

    public static function page($uri, $page_name){
        self::$list[] = [
            'uri' => $uri,
            'page' => $page_name
        ];
        
    }

    public static function post($uri,  $class, $method, $formdata=false, $files=false){

            self::$list[] = [
                'uri' => $uri,
                'class' => $class,
                'method' => $method,
                'post' => true,
                'formdata' => $formdata,
                'files' => $files
            ];

    }


    public static function enable(){
        //print_r(self::$list);

        $query = $_GET['q'] ?? '';
        

        foreach(self::$list as $item){
             

                if($item['uri'] == '/'.$query){

                  

                    if (isset($item['post']) && $item['post']===true && $_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        // post
                        $action = new $item['class']();
                        $method = $item['method'];

                        if($item['formdata'] && $item['files']){
                            $action->$method($_POST, $_FILES);
                            die();
                        }elseif($item['formdata'] && !$item['files']){
                            $action->$method($_POST);
                        }else{
                            $action->$method();
                        }                       
                        die();
                    }else{

                    require_once  'views/pages/' . $item['page'] . '.php';
                    
                    die();

                    }


                }
    

        }  //foreach


        
            self::error('404');
       

    }

    public static function error($error){
     require_once 'views/errors/'.$error.'.php';
    }

    
    public static function redirect($uri){
        header('Location: '.'/phpoop'. $uri);
        die();
       }

    // public static function route()
    // {   
    //     $uri = $_SERVER['REQUEST_URI'];
    //     $uri = explode('?', $uri)[0];
    //     $uri = explode('#', $uri)[0];
    //     $uri = trim($uri, '/');
    //     $uri = explode('/', $uri);
    //     return $uri;
    // }    
}

?>