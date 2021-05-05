<?php 

class camp {

	private  $idalbum = null ;
	private  $titre = null;
		private  $discription= null;
		private  $image = null;
		private  $age = null;
		private  $date = null;
		private  $prix = null;
		private  $endroit = null;

		



function __construct( string $titre, string $discription, string $endroit, string $date ,string $image ,int $prix,int $age ){
			
			$this->titre=$titre;
			$this->discription=$discription;
			$this->image=$image;
			$this->endroit=$endroit;
			$this->date=$date;
			$this->prix=$prix;
			$this->age=$age;


		
		}
		function getId(): int{
			return $this->idalbum;
		}
		function gettitre(): string{
			return $this->titre;
		}
		function getdiscription(): string{
			return $this->discription;
		}
		
		function getendroit(): string{
			return $this->endroit;
		}
		function getdate(): string{
			return $this->date;
		}
		function getimage(): string{
			return $this->image;
		}
		function getprix(): int {
			return $this->prix;
		}
		function getage(): int{
			return $this->age;
		}
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setdiscription(string $discription): void{
			$this->discription;
		}
		function setendroit(string $endroit): void{
			$this->endroit;
		}
		function setdate(string $date): void{
			$this->date;
		}
		function setLogin(string $image): void{
			$this->image=$image; 
		}
		function setprix(int $prix): void{
			$this->prix=$prix; }
			function setage(int $age): void{
				$this->age=$age; }

}
	








?>