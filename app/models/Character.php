<?php

class Character extends CoreModel {


        //! dans le CoreModel avec extends
        // private $id;
        // private $name;
        private $description;
        private $picture;
        // private $created_at;
        // private $updated_at;
        private $type_id;

        //method pour récuperer les donner depuis la BDD

        public function findAll(){

            // 1 connexion à la BDD
            $pdo = Database::getPDO();
            // 2 préparer la requête : sqlrquete est un meilleur nom
            $sqlrequete = "SELECT * FROM `character`";
            // 3 envoyer la requête
            $pdoStatement = $pdo->query($sqlrequete);

            // 4 récupération de la requete après avoir vérifié sur adminer que les données voulues sont les bonnes. On l'a sous la forme d'un objet.
            $character = $pdoStatement->fetchAll(PDO::FETCH_CLASS, Character::class);
            //var_dump($character); //!Ici j'ai bien tous les persos

            // on return l'objet pour l'utiliser
            return $character;
        }

        // getter et setter, pour ?? bien assez bien expliqué.

        /**
         * Get the value of description
         */ 
        public function getDescription()
        {
            return $this->description;
        }

        /**
         * Set the value of description
         *
         * @return  self
         */ 
        public function setDescription($description)
        {
            $this->description = $description;

            return $this;
        }

        //! on ne met pas de paramétre car on ne doit pas, ici, modifier. on ne fait qu'obtenir l'info (get)
        public function getPicture(){

            return $this ->picture;
        }

        //! c'est ici que ce fait l'initialisation, donc on peut mettre un paramétre
        public function setPicture($picture){

            $this->picture = $picture;

            return $this;

        }


        public function setTypeID(){

            return $this->type_id;
        }

}