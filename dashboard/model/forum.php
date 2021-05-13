<?php 

class forum {

	private  $idforum = null ;
	private  $titre = null;
		private  $description= null;
		private  $image = null;
		private  $comu = null;

		


function __construct( string $titre, string $description, string $image, string $comu){
			
			$this->titre=$titre;
			$this->description=$description;
			$this->image=$image;
			$this->comu=$comu;

			
		
		}
		function getId(): int{
			return $this->idforum;
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
		function getcomu(): string{
			return $this->comu;
		}
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setdescription(string $description): void{
			$this->description;
		}
		function setcomu(string $comu): void{
			$this->comu=$comu;
		}
		function setLogin(string $image): void{
			$this->image=$image; }




}



?>