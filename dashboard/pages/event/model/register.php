<?php 

class register {

	private  $id = null ;
	private  $cin = null;
		private  $bdate= null;
		private  $email = null;
		private  $sexe = null;
	
		private  $name = null;
		private  $num = null;
		

		



function __construct( string $cin, string $bdate, string $num ,string $email,string $sexe,string $name ){
			
			$this->cin=$cin;
			$this->bdate=$bdate;
			$this->email=$email;
			$this->sexe=$sexe;
	
			$this->num=$num;
			$this->name=$name;

			
			


		
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
		function getname(): string{
			return $this->name;
		}
		
		
		function getnum(): string{
			return $this->num;
		}
		function getemail(): string{
			return $this->email;
		}
		function getsexe(): string{
			return $this->sexe;
		}
		
	    
		
    function setcin(string $cin): void{
			$this->cin=$cin;
		}
		function setbdate(string $bdate): void{
			$this->bdate;
		}
		
		function setnum(string $num): void{
			$this->num;
		}
		function setname(string $name): void{
			$this->name;
		}
		function setemail(string $email): void{
			$this->email=$email; 
		}
		function setsexe(string $sexe): void{
			$this->sexe=$sexe; 
		}
	
		

	}
	
	







?>
