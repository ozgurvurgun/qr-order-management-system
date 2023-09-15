<?php

namespace CompartSoftware\System\Database;

class Database
{
    protected $db;
    private $hostname;
    private $username;
    private $password;
    private $databaseName;
    public function __construct()
    {
        //bu yol dosya direkt çalıştırılacağında kullanılır
        require __DIR__ . '/../../env.php';
        $this->hostname = $DB_HOST;
        $this->username = $DB_USER;
        $this->password = $DB_PASSWORD;
        $this->databaseName = $DB_NAME;
        try {
            $this->db = new \PDO("mysql:host=$this->hostname;dbname=$this->databaseName;", "$this->username", "$this->password");
            $this->db->query('SET CHARACTER SET utf8');
            // echo "connected";
        } catch (\PDOException $e) {
            echo '<pre><span style="color:red">CONNECTION ERROR: </span>' . $e->getMessage() . '</pre>';
        }
    }
}
