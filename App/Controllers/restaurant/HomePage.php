<?php

namespace CompartSoftware\App\Controller;
use CompartSoftware\System\Core\Controller;

class HomePage extends Controller
{
    public function index(string $id)
    {
        $restaurants = ["sopung-cafe", "eylul-cafe", "smyrna-cafe"];
        if (in_array($id, $restaurants)) {
            $this->view('restaurant/HomePage', [
                'restaurant_id' => $id
            ]);
        }
        else{
            $this->view('404', [
                'restaurant_id' => $id
            ]);
        }
    }
}
