<?php
    class StudentDao extends Manager{


        public function __construct()
        {
            $this->tablename = "student";
            $this->classname = "student";
        }

        public function Add($obj){
            $sql = "INSERT INTO ".$this->tablename."(marticule,lastName,mail,phone,birthday,adress,amount,housing,id_room) VALUES ($SetMatricule,$GetlastName,$Getmail,$Getphone,$Getbirthday,$Getadress,$Getamount,$Gethousing,$Getid_room)";
            return  $this->executeUpdate($sql);
        }

    }