<?php 

class album {

	private  $idalbum = null ;
	private  $titre = null;
		private  $description= null;
		private  $image = null;
		private  $etat = null;
		private  $famille = null;



function __construct( string $titre, string $description, string $image, int $etat, string $famille){
			
			$this->titre=$titre;
			$this->description=$description;
			$this->image=$image;
			$this->etat=$etat;
			$this->famille=$famille;


		
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
		function getetat(): int{
			return $this->etat;
		}
		function getfamille(): string{
			return $this->famille;
		}
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setdescription(string $description): void{
			$this->description;
		}
		function setLogin(string $image): void{
			$this->image=$image; }


			function setetat(int $etat): void{
				$this->etat=$etat; }
				function setfamille(int $famille): void{
					$this->famille=$famille; }
	




}



?>