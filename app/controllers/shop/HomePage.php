<?php

namespace CompartSoftware\App\Controller;

use CompartSoftware\System\Core\Controller;

class HomePage extends Controller
{
    public bool $url_check = false;
    public string $shop_id;
    public string $shop_routing_name;
    public string $shop_name;
    public function index(string $id)
    {
        $shops = $this->model('shop/Shop')->get_shops();
        foreach ($shops as  $value) {
            if ($id === $value['shop_routing_name']) {
                $this->url_check = true;
                $this->shop_id = $value['id'];
                $this->shop_routing_name = $value['shop_routing_name'];
                $this->shop_name = $value['shop_name'];
                break;
            }
        }

        if ($this->url_check) {
            $category =  $this->model('shop/Shop')->get_category($this->shop_id);
            $this->view('shop/HomePage', [
                'shop_routing_name' => $this->shop_routing_name,
                'shop_name' => $this->shop_name,
                'product_categories' => $category
            ]);
        } else {
            $this->view('404', [
                'shop_name'
            ]);
        }
    }
}
