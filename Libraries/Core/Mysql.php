<?php
    class Mysql extends Conexion{
        private $connection;
        private $strQuery;
        private $arrValues;

        public function __construct(){
            parent::__construct();
            $this->connection = $this->getConnection();
        }

        public function insert(string $query, array $arrValues){
            $this->strQuery = $query;
            $this->arrValues = $arrValues;
            $lastInsert = 0;

            if($this->connection)
            {
                $insert = $this->connection->prepare($this->strQuery);
                $resInsert = $insert->execute($this->arrValues);
                if($resInsert)
                {
                    $lastInsert = $this->connection->lastInsertId();
                    return $lastInsert;
                }
                else
                {
                    $lastInsert = 0;
                    return $lastInsert;
                }
                
            }
        }

        public function select(string $query){
            $this->strQuery = $query;
            if($this->connection){
                $result = $this->connection->prepare($this->strQuery);
                $result->execute();
                $data = $result->fetch(PDO::FETCH_ASSOC);
                return $data;
            }
        }

        public function selectAll(string $query){
            $this->strQuery = $query;
            if($this->connection){
                $result = $this->connection->prepare($this->strQuery);
                $result->execute();
                $data = $result->fetchAll(PDO::FETCH_ASSOC);
                return $data;
            }
        }

        public function update(string $query, array $arrValues){
            $this->strQuery = $query;
            if($this->connection){
                $this->arrValues = $arrValues;
                $update = $this->connection->prepare($this->strQuery);
                $resUpdate = $update->execute($this->arrValues);
                return $resUpdate;
            }
        }

        public function delete(string $query){
            $this->strQuery = $query;
            if($this->connection){
                $delete = $this->connection->prepare($this->strQuery);
                $resDelete = $delete->execute();
                return $resDelete;
            }
        }


    }
?>