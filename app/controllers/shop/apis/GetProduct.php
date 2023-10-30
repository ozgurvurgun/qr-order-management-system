<?php

namespace CompartSoftware\App\Controller;

use CompartSoftware\System\Core\Controller;

class GetProduct extends Controller
{

    public function index()
    {
        $category_id = trim($_POST['category_id']);
        $products = $this->model('shop/Shop')->get_products($category_id);
        if ($products) {
           echo json_encode($products);
        }
        else{
            echo "228"; //228 -> product not found
        }
    }
}
