<?php 

class album {

	private  $idalbum = null ;
	private  $titre = null;
		private  $prix= null;
		private  $image = null;

function __construct( string $titre, float $prix, string $image){
			
			$this->titre=$titre;
			$this->prix=$prix;
			$this->image=$image;
		
		}
		function getId(): int{
			return $this->idalbum;
		}
		function gettitre(): string{
			return $this->titre;
		}
		function getprix(): float{
			return $this->prix;
		}
		function getimage(): string{
			return $this->image;
		}
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setprix(float $prix): void{
			$this->prix;
		}
		function setLogin(string $image): void{
			$this->image=$image; }




}



?>