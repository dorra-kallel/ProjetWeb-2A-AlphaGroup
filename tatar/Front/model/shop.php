<?php
    class Shop {

        private  $idArticle ;
        private  $nom;
        private  $prix;
        private  $image;
        private  $catg;

        public function __construct($nom, $prix, $image, $catg){
            //$this->idArticle = $idArticle;
            $this->nom = $nom;
            $this->prix = $prix;
            $this->image = $image;
            $this->$catg = $catg;
        }

        public function getIdArticle () {
            return $this->idArticle;
        }

        public function getNom (){
            return $this->nom ;
        }

        public function getImage (){
            return $this->image ;
        }

        public function getPrix (){
            return $this->prix ;
        }

        public function getCategorie (){
            return $this->catg ;
        }

        public function setIdArticle ($id) {
            return $this->idArticle = $id;
        }

        public function setCategorie($catg){
            $this->catg = $catg;
        }
        public function setNom ($nom){
            $this->nom = $nom;
        }

        public function setImage ($image){
            $this->image = $image;
        }

        public function setPrix ($prix){
            $this->prix = $prix;
        }
    }