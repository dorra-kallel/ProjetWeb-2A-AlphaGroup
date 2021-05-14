<?php 

class comm {

	private  $id_com = null ;
	private  $nom_com = null;


function __construct( string $nom_com){
			
			$this->nom_com=$nom_com;

		
		}
		function getId(): int{
			return $this->id_com;
		}
		function getnom(): string{
			return $this->nom_com;
		}
	
    function settitre(string $nom_com): void{
			$this->nom_com=$nom_com;
		}
	




}



?>