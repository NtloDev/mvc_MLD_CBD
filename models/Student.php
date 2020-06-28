<?php
    class Student implements Modele
    {
        private  $id;
        private $matricule;
        private $lastname;
        private  $firstname;
        private  $mail;
        private  $phone;
        private  $birthday;
        private  $adress;
        private  $amount;


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
            $this->matricule = $tab['matricule'];
            $this->lastname = $tab['lastname'];
            $this->firstname = $tab['firstname'];
            $this->mail = $tab['mail'];
            $this->phone = $tab['phone'];
            $this->birthday = $tab['birthday'];
            $this->adress = $tab['adress'];
            $this->amount = $tab['amount'];
        }


        /**
         * Get the value of matricule
         */ 
        public function getMatricule()
        {
                return $this->matricule;
        }

        /**
         * Set the value of matricule
         *
         * @return  self
         */ 
        public function setMatricule($matricule)
        {
                $this->matricule = $matricule;

                return $this;
        }

        /**
         * Get the value of lastname
         */ 
        public function getlastname()
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setlastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }

        /**
         * Get the value of firstname
         */ 
        public function getfirstname()
        {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @return  self
         */ 
        public function setfirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }

        /**
         * Get the value of mail
         */ 
        public function getMail()
        {
                return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @return  self
         */ 
        public function setMail($mail)
        {
                $this->mail = $mail;

                return $this;
        }

        /**
         * Get the value of phone
         */ 
        public function getPhone()
        {
                return $this->phone;
        }

        /**
         * Set the value of phone
         *
         * @return  self
         */ 
        public function setPhone($phone)
        {
                $this->phone = $phone;

                return $this;
        }

        /**
         * Get the value of birthday
         */ 
        public function getBirthday()
        {
                return $this->birthday;
        }

        /**
         * Set the value of birthday
         *
         * @return  self
         */ 
        public function setBirthday($birthday)
        {
                $this->birthday = $birthday;

                return $this;
        }

        /**
         * Get the value of adress
         */ 
        public function getAdress()
        {
                return $this->adress;
        }

        /**
         * Set the value of adress
         *
         * @return  self
         */ 
        public function setAdress($adress)
        {
                $this->adress = $adress;

                return $this;
        }

        /**
         * Get the value of amount
         */ 
        public function getAmount()
        {
                return $this->amount;
        }

        /**
         * Set the value of amount
         *
         * @return  self
         */ 
        public function setAmount($amount)
        {
                $this->amount = $amount;

                return $this;
        }
    }