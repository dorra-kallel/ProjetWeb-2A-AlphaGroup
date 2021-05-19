<?php
    class Categorie {

        private  $id ;
        private  $nom;
        private $image;

        public function __construct($nom, $image){
            $this->nom = $nom;
            $this->image = $image;
        }

        public function getId () {
            return $this->id;
        }

        public function getNom (){
            return $this->nom ;
        }

        public function getImage (){
            return $this->image ;
        }


        public function setImage($image){
            $this->image = $image;
        }

        public function setId($id){
            $this->id = $id;
        }
        public function setNom ($nom){
            $this->nom = $nom;
        }

    }