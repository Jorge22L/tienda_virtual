<?php 
    class Conexion {
        private $host = DB_HOST;
        private $user = DB_USER;
        private $password = DB_PASS;
        private $db = DB_NAME;
        private $charset = DB_CHARSET;
        private $connect; //objetos conexión

        public function __construct()
        {
            $connection_string = "mysql:host=$this->host;dbname=$this->db; charset=$this->charset";

            try {
                $this->connect = new PDO($connection_string, $this->user, $this->password);
                $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                $this->connect = null;
                echo "Error de conexión: " . $e->getMessage();
            }
        }

        public function getConnection() {
            return $this->connect;
        }
    }

?>