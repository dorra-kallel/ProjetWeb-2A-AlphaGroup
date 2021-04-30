<?php
    class article {
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

        public function getIdArticle(): int{
            return $this->getidArticle;
        }

        public function getNom(): string{
            return $this->nom ;
        }

        public function getImage(): string{
            return $this->image ;
        }

        public function getPrix (): int{
            return $this->prix ;
        }

        public function setNom (string $nom){
            $this->nom = $nom;
        }

        public function setImage (string $image){
            $this->image = $image;
        }

        public function setPrix (int $prix){
            $this->prix = $prix;
        }
    }