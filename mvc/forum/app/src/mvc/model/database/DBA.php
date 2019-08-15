<?php

namespace App\Database;
use \PDO;

/**
* Class: DBA
* 
* Holds all database table objects used in this project.
*
* @package      App
* @subpackage   Database
* @author       Ivan Filho <ivanfilho21@gmail.com>
*
* Created: July 20, 2019.
* Last Modified: July 20, 2019.
*/

class DBA
{
    private static $instance = null;

    public static function getInstance()
    {
        if (self::$instance === null) {
            return new self();
        }
        return self::$instance;
    }

    public function getTable($name)
    {
        $table = false;
        foreach ($this->tables as $t) {
            if ($t->getName() === $name) {
                $table = $t;
                break;
            }
        }
        return $table;
    }

    private function __construct()
    {
        $pdo = $this->getPDOConnection();
        $this->tables[] = new \UserDAO($pdo);
        $this->tables[] = new \BoardDAO($pdo);
        $this->tables[] = new \CategoryDAO($pdo);
        $this->tables[] = new \TopicDAO($pdo);
        $this->tables[] = new \PostDAO($pdo);

        $this->createTables();

        /*# Default values
        $date = \IvanFilho\Date\Date::getCurrentDate();
        
        #$u = new \User(0, 3, "admin", "", md5("prec"), $date);
        #$this->getTable("users")->insert($u);

        $c = new \Category(0, "Categoria", $date);
        $this->getTable("categories")->insert($c);

        $b = new \Board(0, 1, 1, "Board de Exemplo", "Descrição da Board.", $date);
        $this->getTable("boards")->insert($b);*/
    }

    private function createTables()
    {
        foreach ($this->tables as $t) {
            $t->create();
        }
    }

    private function getPDOConnection()
    {
        $pdo = null;

        try {
            $pdo = new PDO("mysql:dbname=" .DB_NAME .";host=" .DB_HOST, DB_USER, DB_PASS);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die($e->getMessage());
        }

        return $pdo;
    }
}