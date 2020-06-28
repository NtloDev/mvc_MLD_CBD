<?php
    class Room implements Modele
    {
        private $id;
        private $name_room;
        private $name_bulding;


        public function __construct($tab =null)
        {
            if ($tab != null) {
                $this->hydrate($tab);
            }
        }
        //redefinition
        public function hydrate($tab)
        {
            $this->id = $tab['id'];
            $this->name_room = $tab['name_room'];
            $this->name_bulding = $tab['name_bulding'];

        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of name_room
         */ 
        public function getName_room()
        {
                return $this->name_room;
        }

        /**
         * Set the value of name_room
         *
         * @return  self
         */ 
        public function setName_room($name_room)
        {
                $this->name_room = $name_room;

                return $this;
        }

        /**
         * Get the value of name_bulding
         */ 
        public function getName_bulding()
        {
                return $this->name_bulding;
        }

        /**
         * Set the value of name_bulding
         *
         * @return  self
         */ 
        public function setName_bulding($name_bulding)
        {
                $this->name_bulding = $name_bulding;

                return $this;
        }


    }