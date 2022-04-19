<?php

class CoreModel {

        protected $id;
        protected $name;        
        protected $created_at;
        protected $updated_at;
        

        /**
         * Get the value of description
         */ 
        public function getID()
        {
            return $this->id;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setID($id)
        {
            $this->id = $id;

            return $this;
        }

        //! on ne met pas de paramétre car on ne doit pas, ici, modifier. on ne fait qu'obtenir l'info (get)
        public function getName(){

            return $this ->name;
        }

        //! c'est ici que ce fait l'initialisation, donc on peut mettre un paramétre
        public function setName($name){

            $this->name = $name;

            return $this;

        }

        public function getCreatedAt(){

            return $this ->created_at;
        }


        public function setCreatedAt($created_at){

            $this->created_at = $created_at;

            return $this;

        }

        public function getUpdatedAt(){

            return $this ->updated_at;
        }


        public function setUpdatedAt($updated_at){

            $this->updated_at = $updated_at;

            return $this;

        }



}