<?php
  namespace Core\Persist;

  class Db {
    private $dbl = 'localhost';
    private $db = 'logger';
    private $user = 'logger';
    private $password = 'vwtqb[jy7d:d?tzEjN-BDrGH}2Q3S';
    // private $user = 'mvp';
    // private $password = 'BTdY8*KFh":wM2db';
    private $conn = null;
    private $statement = null;

    public function __construct() {
      try {
        $this->conn =  new \PDO(
          "mysql:dbname=$this->db;host=$this->dbl",
          $this->user,
          $this->password
        );
        // set the \PDO error mode to exception
        $this->conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      }
      catch(\PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }

    public static function db(): Db {
      return new Db();
    }

    public function prepareQuery(string $sql) {
      $this->statement = $this->conn->prepare($sql);
      return $this;
    }

    public function queryDB(array $data = array()) {
      $this->statement->execute($data);
      return $this;
    }

    public function getDataArray() {
      return $this->statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function rowCount(): int {
      return $this->statement->rowCount();
    }
  }
?>
