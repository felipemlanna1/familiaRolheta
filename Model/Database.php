<?php
namespace FamiliaRolheta\Arquivos\Model;
use \PDO;
use \PDOException;
class Database
{
    private $host = "localhost";
    private $db_name = "familia_rolheta";
    private $username = "root";
    private $password = "";
    public $conn;
    public function dbSet()
    {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>