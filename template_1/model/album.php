<?php 

class album {

	private  $idalbum = null ;
	private  $titre = null;
		private  $description= null;
		private  $image = null;

function __construct( string $titre, string $description, string $image){
			
			$this->titre=$titre;
			$this->description=$description;
			$this->image=$image;
		
		}
		function getId(): int{
			return $this->idalbum;
		}
		function gettitre(): string{
			return $this->titre;
		}
		function getdescription(): string{
			return $this->description;
		}
		function getimage(): string{
			return $this->image;
		}
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setdescription(string $description): void{
			$this->description;
		}
		function setLogin(string $image): void{
			$this->image=$image; }




}



?>