<?php
	class Utilisateur{
		private ?int $id = null;
		private ?string $name = null;
		private ?string $firstname = null;
		private ?string $email = null;
		private ?string $login = null;
		private ?string $password = null;
		
		function __construct(string $name, string $firstname, string $email, string $login, string $password){
			
			$this->name=$name;
			$this->firstname=$firstname;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;
		}
		
		function getId(): int{
			return $this->id;
		}
		function getName(): string{
			return $this->name;
		}
		function getFirstname(): string{
			return $this->firstname;
		}
		function getLogin(): string{
			return $this->login;
		}
		function getEmail(): string{
			return $this->email;
		}
		function getPassword(): string{
			return $this->password;
		}

		function setName(string $name): void{
			$this->nom=$nom;
		}
		function setFirstname(string $firstname): void{
			$this->prenom;
		}
		function setLogin(string $login): void{
			$this->login=$login;
		}
		function setEmail(string $email): void{
			$this->email=$email;
		}
		function setPassword(string $password): void{
			$this->password=$password;
		}
	}
?>