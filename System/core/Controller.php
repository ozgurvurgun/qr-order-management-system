<?php

namespace CompartSoftware\System\Core;

class Controller
{
    public function view(string $name, array $data = []): void
    {
        /*   $data = [
             'name'    => 'ozgur',
             'surname' => 'vurgun'
             ];
        */
        extract($data);
        /*  echo $name;
            echo $surname;
        */
        $view_files = glob('App/Views/*.php');
        foreach ($view_files as $file) {
            $fileName =  explode('/', $file);
            if (strtolower($fileName[2]) == strtolower($name . '.php')) {
                $fileName = $fileName[2];
                break;
            }
        }
        require_once 'App/Views/' . $fileName;
    }

    /**
     * @return mixed class
     */
    public function model(string $name)
    {
        $model_files = glob('App/Model/*.php');
        foreach ($model_files as $file) {
            $fileName =  explode('/', $file);
            if (strtolower($fileName[2]) == strtolower($name . '.php')) {
                $fileName = $fileName[2];
                break;
            }
        }
        require_once 'App/Model/' . $fileName;
        $className = 'App\Model\\' . $name;
        return new $className();
    }
}
