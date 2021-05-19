<?php 

class camp {

	private  $idalbum = null ;
	private  $titre = null;
		private  $discription= null;
		private  $endroit = null;
		private  $date = null;
		private  $image = null;
	
		private  $image2 = null;
		private  $image3 = null;
		private  $prixrondo = null;
		private  $prixcamp = null;
		private  $prixgrp = null;
		

		



function __construct( string $titre, string $discription ,string $endroit,string $date,string $image, string $image2,string $image3,int $prixrondo,int $prixcamp,int $prixgrp ){
			
			$this->titre=$titre;
			$this->discription=$discription;
			$this->endroit=$endroit;
			$this->date=$date;
			$this->image=$image;
			$this->image2=$image2;
			$this->image3=$image3;
			$this->prixrondo=$prixrondo;
			$this->prixcamp=$prixcamp;
			$this->prixgrp=$prixgrp;
			
			


		
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
		function getimage2(): string{
			return $this->image2;
		}
		function getimage3(): string{
			return $this->image3;
		}
		function getprixcamp(): string{
			return $this->prixcamp;
		}
		function getprixrondo(): string{
			return $this->prixrondo;
		}
		function getprixgrp(): string{
			return $this->prixgrp;
		}
		
	    
	    
		
    function settitre(string $titre): void{
			$this->titre=$titre;
		}
		function setdiscription(string $discription): void{
			$this->discription;
		}
		
		
		function setendroit(string $endroit): void{
			$this->endroit=$endroit; 
		}
		function setdate(string $date): void{
			$this->date=$date; 
		}
		function setimage(string $image): void{
			$this->image=$image; 
		}
			function setimage2(string $image2): void{
				$this->image2=$image2;
			}
		
		function setimage3(string $image3): void{
			$this->image3=$image3; 
		}
		function setprixrondo(int $prixrondo): void{
			$this->prixrondo=$prixrondo; 
		}
		function setprixcamp(int $prixcamp): void{
			$this->prixcamp=$prixcamp; 
		}
		function setprixgrp(int $prixgrp): void{
			$this->prixgrp=$prixgrp; 
		}
		

	
}



?>