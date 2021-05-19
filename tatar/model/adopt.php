<?php 

class adoption {

	private  $id_adopt = null ;
	private  $id_animal = null;
		private  $id_user= null;
		private  $nom_user = null;

function __construct( int $id_animal, int $id_user, string $nom_user){
			
			$this->id_animal=$id_animal;
			$this->id_user=$id_user;
			$this->nom_user=$nom_user;
		
		}
		function getId_adopt(): int{
			return $this->id_adopt;
		}
		function getid_animal(): int{
			return $this->id_animal;
		}
		function getid_user(): int{
			return $this->id_user;
		}
		function getnom_user(): string{
			return $this->nom_user;
		}
    function setid_animal(int $id_animal): void{
			$this->id_animal=$id_animal;
		}
		function setid_user(int $id_user): void{
			$this->id_user;
		}
		function setLogin(string $nom_user): void{
			$this->nom_user=$nom_user; }




}



?>