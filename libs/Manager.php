<?php
    abstract class Manager implements IDao{
        private $pdo = null;
        protected $tablename;
        protected $classname;

        private function getConnexion()
        {
            if ($this->pdo ==null) {
                // $servername = 'localhost';
                // $username = 'root';
                // $password = '';
                try {
                  $this->pdo = new PDO("mysql:host=localhost;dbname=mvc_mld_cbd",'root','');
                  $this->pdo->exec('set names utf8');
                  $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                  $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
                    // echo "Connected successfully";
                } catch(PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
                }
            }
        }

        private function CloseConnexion()
        {
            if ($this->pdo !=null) {
                $this->pdo =null;
            }
        }
        public function executeUpdate($sql)
        {
            $this->getConnexion();
            $numbreLine = $this->pdo->exec($sql);
            $this->CloseConnexion();
        }

        public function executeSelect($sql)
        {
            $this->getConnexion();
            // traitement
            $return = $this->pdo->query($sql);
            $tabs = [];
            foreach ($return as $tab) {
                $tabs []= new $this->classname($tab);
            }
            $this->CloseConnexion();
            return $tabs;
        }

        public function findAll()
        {
            $sql = "select * from " .$this->tablename;
            return $data = $this->executeSelect($sql);
        }



    }