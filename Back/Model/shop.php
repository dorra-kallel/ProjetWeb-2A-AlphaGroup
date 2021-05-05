<?php
    class shop {
        private  $idArticle = null;
        private  $nom;
        private  $prix;
        private  $image;

        public function __construct(string $nom,int  $prix, string $image){
            //$this->idArticle = $idArticle;
            $this->nom = $nom;
            $this->prix = $prix;
            $this->image = $image;
        }

        public function getIdArticle () {
            return $this->getidArticle;
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