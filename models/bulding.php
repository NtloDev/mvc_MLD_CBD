<?php
    class Bulding implements Modele
    {
        private $id;
        private $num_bulding;

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
         * Get the value of num_bulding
         */
        public function getNum_bulding()
        {
                return $this->num_bulding;
        }

        /**
         * Set the value of num_bulding
         *
         * @return  self
         */
        public function setNum_bulding($num_bulding)
        {
                $this->num_bulding = $num_bulding;

                return $this;
        }
    }