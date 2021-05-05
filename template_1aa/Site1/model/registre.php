<?php 

class register {

	private  $id = null ;
	private  $cin = null;
		private  $bdate= null;
		private  $email = null;
		private  $name = null;
		private  $sexe = null;
		private  $type = null;
		private  $num = null;

		



function __construct( string $cin, string $bdate, string $email, string $name ,string $sexe ,string $type,string $num ){
			
			$this->cin=$cin;
			$this->bdate=$bdate;
			$this->email=$email;
			$this->name=$name;
			$this->sexe=$sexe;
			$this->type=$type;
			$this->num=$num;


		
		}
		function getId(): int{
			return $this->id;
		}
		function getcin(): string{
			return $this->cin;
		}
		function getbdate(): string{
			return $this->bdate;
		}
		
		function getemail(): string{
			return $this->email;
		}
		function getname(): string{
			return $this->name;
		}
		function getsexe(): string{
			return $this->sexe;
		}
		function gettype(): string {
			return $this->type;
		}
		function getnum(): string{
			return $this->num;
		}




		
		function setcin(string $cin): void{
			$this->cin;
		}
		function setbdate(string $bdate): void{
			$this->bdate;
		}
		function setemail(string $email): void{
			$this->email; 
		}
		function setsexe(string $sexe): void{
			$this->sexe;
		}
		function setname(string $name): void{
			$this->name;
		}
		function settype(string $type): void{
			$this->type; 
		}
		function setnum(string $num): void{
			$this->num=$num; }
			
}
	








?>