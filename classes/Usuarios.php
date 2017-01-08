<?php

require_once 'Crud.php';

class Usuarios extends Crud{
	
	protected $table = 'usuarios';
	private   $email;
	private   $emailRecuperacao;
	private   $nome;
	private   $empresa;
	private   $senha;
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function setEmailRecuperacao($emailRecuperacao){
		$this->emailRecuperacao = $emailRecuperacao;
	}	

	public function setEmpresa($empresa){
		$this->empresa = $empresa;
	}

	public function getEmpresa(){
		return $this->empresa;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getNome(){
		return $this->nome;
	}

    public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function validarSenha(){
		try {
			echo 'Entrei no validar senha';
			echo 'Email -- ' . $this->email;
			echo 'Senha -- ' . $this->senha;
			$sql  = "SELECT * FROM $this->table WHERE email = :email and senha = :senha";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':email',            $this->email);
			$stmt->bindParam(':senha',            $this->senha);
			$stmt->execute();
			return $stmt->fetch();
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function insert(){

		$sql  = "INSERT INTO $this->table ( nome,  email,  emailRecuperacao,  senha,  empresa) 
		             VALUES               (:nome, :email, :emailRecuperacao, :senha, :empresa)";
		try {
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':email',            $this->email);
			$stmt->bindParam(':nome',             $this->nome);
			$stmt->bindParam(':empresa',          $this->empresa);
			$stmt->bindParam(':emailRecuperacao', $this->emailRecuperacao);
			$stmt->bindParam(':senha',            $this->senha);
			return $stmt->execute(); 
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function update($id){

		$sql  = "UPDATE $this->table SET nome             = :nome, 
		 								 empresa		  = :empresa,
		                                 email            = :email, 
										 emailRecuperacao = :emailRecuperacao, 
										 senha            = :senha 
								   WHERE id = :id";
		try {
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':nome', $this->senha);
			$stmt->bindParam(':email', $this->email);
			$stmt->bindParam(':empresa', $this->empresa);
			$stmt->bindParam(':emailRecuperacao', $this->emailRecuperacao);
			$stmt->bindParam(':id', $id);
			return $stmt->execute();
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}

	}

}