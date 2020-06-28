<?php
    class RoomDao extends Manager{


        public function __construct()
        {
            $this->tablename = "room";
            $this->classname = "room";
        }

        public function Add($obj){
            $sql = "INSERT INTO ".$this->tablename." VALUES (:mum,:id_bulding)";
            $query = $this->connexion->prepare($sql) ;
            $query->bindParam(':mum',$this->mum) ;
            $query->bindParam(':id_bulding',$this->id_bulding) ;
            return  $this->executeUpdate($query);
        }

        public function delete($id)
        {
            $sql = "DELETE FROM " .$this->tabName."WHERE id =".$this->id;
            $query = $this->connexion->prepare($sql) ;
            return $this->executeUpdate($query);
        }

        public function update($obj){
            $sql = "UPDATE ".$this->tablename." VALUES (:mum,:id_bulding)";
            $query = $this->connexion->prepare($sql) ;
            $query->bindParam(':mum',$this->mum) ;
            $query->bindParam(':id_bulding',$this->id_bulding) ;
            return  $this->executeUpdate($query);
        }


    }