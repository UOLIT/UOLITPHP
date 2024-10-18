<?php
    include_once('core/file/dbconfig.php');

    class Connection extends Dbconfig {
        public $connectionString;
        public $dataSet;
        private $sqlQuery;

        protected $conn;

        public function __construct() {
            $this->connectionString = NULL;
            $this->sqlQuery = NULL;
            $this->dataSet = NULL;
        }

        public function dbConnect() {
            $this->config();
            try {
                $dsn = "mysql:host=$this->HostName;dbname=$this->Database";
                $this->conn = new PDO($dsn, $this->UserName, $this->Password);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
?>
