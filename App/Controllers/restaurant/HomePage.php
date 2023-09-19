<?php

namespace CompartSoftware\App\Controller;

use CompartSoftware\System\Core\Controller;

class HomePage extends Controller
{
    public function index(string $id)
    {
        $this->view('restaurant/HomePage', [
            'restaurant_id' => $id
        ]);

        echo  $this->model('admin/admin')->index();
    }
}
