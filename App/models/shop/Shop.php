<?php

namespace CompartSoftware\App\Model;

use CompartSoftware\System\Core\Model;

class Shop extends Model
{
    public function get_shops()
    {
        return $this->db->query('SELECT * FROM shops')->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function get_category(string $id)
    {
        return $this->db->query('SELECT id, category_name, category_photo, active FROM categories WHERE shops_id = ' . $id . '')->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function get_products(string $id)
    {
        return $this->db->query('SELECT id, product_name, product_price, product_picture, active FROM products WHERE category_id = ' . $id . '')->fetchAll(\PDO::FETCH_ASSOC);
    }
}
