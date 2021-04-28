<?php 

class espece {

	private  $id = null ;
	private  $nom_famille = null;
		private  $nature= null;
		private  $nourriture = null;

function __construct( string $nom_famille, string $nature, string $nourriture){
			
			$this->nom_famille=$nom_famille;
			$this->nature=$nature;
			$this->nourriture=$nourriture;
		
		}
		function getId(): int{
			return $this->id;
		}
		function getnom_famille(): string{
			return $this->nom_famille;
		}
		function getnature(): string{
			return $this->nature;
		}
		function getnourriture(): string{
			return $this->nourriture;
		}
    function setnom_famille(string $nom_famille): void{
			$this->nom_famille=$nom_famille;
		}
		function setnature(string $nature): void{
			$this->nature;
		}
		function setLogin(string $nourriture): void{
			$this->nourriture=$nourriture; }




}



?>