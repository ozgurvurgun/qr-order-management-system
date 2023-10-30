<?php

use \CompartSoftware\System\Core\Router;

Router::run('/api/shop/product', 'shop/apis/GetProduct@index', 'post');
