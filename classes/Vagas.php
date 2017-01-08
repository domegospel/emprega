<?php

require_once 'Crud.php';

class Vagas extends Crud{
	
	protected $table = 'vagas';
	
	private   $nomeContato;      
	private   $nomeEmpresa;   
	private   $email;          
	private   $emailContato;   
	private   $cidade;     	  
	private   $vaga; 
	private   $area; 
	private   $descricao;   
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function setEmailContato($emailContato){
		$this->emailContato = $emailContato;
	}	

	public function setNomeEmpresa($nomeEmpresa){
		$this->nomeEmpresa = $nomeEmpresa;
	}

	public function getNomeEmpresa(){
		return $this->nomeEmpresa;
	}

	public function setNomeContato($nomeContato){
		$this->nomeContato = $nomeContato;
	}

	public function getNomeContato(){
		return $this->nomeContato;
	}

	public function setCidade($cidade){
		$this->cidade = $cidade;
	}

	public function getCidade(){
		return $this->cidade;
	}

	public function setVaga($vaga){
		$this->vaga = $vaga;
	}

	public function getVaga(){
		return $this->vaga;
	}

	public function setArea($area){
		$this->area = $area;
	}

	public function getArea(){
		return $this->area;
	}

	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}

	public function getDescricao(){
		return $this->descricao;
	}

	public function buscaVaga(){
		try {
            $hoje         = date('Y-m-d H:i:s');
            $ultimaSemana = date('Y-m-d H:i:s', strtotime('-1 year'));			
			$cidadeBusca  = "%" . $this->cidade . "%";
			$vagaBusca    = "%" . $this->vaga . "%";
			$areaBusca    = "%" . $this->area . "%";
			
/*			echo 'hoje..: ' . $hoje . ' ultima semana..: ' . $ultimaSemana;  */
			$sql  = "SELECT * FROM $this->table WHERE cidade LIKE :cidade
			                                      AND vaga   LIKE :vaga  
												  AND area   LIKE :area
												  AND dataVaga <= :hoje
												  AND dataVaga >= :ultimaSemana";

			$stmt = DB::prepare($sql);
			$stmt->bindParam(':cidade', 		$cidadeBusca);
			$stmt->bindParam(':vaga',   		$vagaBusca);
			$stmt->bindParam(':area', 			$areaBusca);			
			$stmt->bindParam(':hoje', 			$hoje);			
			$stmt->bindParam(':ultimaSemana', 	$ultimaSemana);			
			$stmt->execute();
			return $stmt->fetchAll();
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function insert(){
		
		$sql  = "INSERT INTO $this->table (  nomeContato,  nomeEmpresa,  email,  emailContato, 
		                                          cidade,         vaga,   area,     descricao )  
		             VALUES               ( :nomeContato, :nomeEmpresa, :email, :emailContato, 
		                                         :cidade,        :vaga,  :area,    :descricao )";
		try{
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':nomeContato',  $this->nomeContato);
			$stmt->bindParam(':nomeEmpresa',  $this->nomeEmpresa);
			$stmt->bindParam(':email',        $this->email);
			$stmt->bindParam(':emailContato', $this->emailContato);
			$stmt->bindParam(':cidade',       $this->cidade);
			$stmt->bindParam(':vaga',         $this->vaga);
			$stmt->bindParam(':area', 		  $this->area);
			$stmt->bindParam(':descricao',    $this->descricao);
			$stmt->execute();
			return $mens = "Vaga Inserida - Deve estar disponível em até 12 horas"; 
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function update($id){
		$sql  = "UPDATE $this->table SET  nomeContato	= :nomeContato,  
										  nomeEmpresa   = :nomeEmpresa,  
										  email         = :email,  
										  emailContato  = :emailContato, 
		                                  cidade		= :cidade,         
										  vaga			= :vaga,   
										  area			= :area,     
										  descricao		= :descricao 
								   WHERE  id 			= :id";
        try {    
 	 		$stmt = DB::prepare($sql);
			$stmt->bindParam(':nomeContato',  $this->nomeContato);
			$stmt->bindParam(':nomeEmpresa',  $this->nomeEmpresa);
			$stmt->bindParam(':email',        $this->email);
			$stmt->bindParam(':emailContato', $this->emailContato);
			$stmt->bindParam(':cidade',       $this->cidade);
			$stmt->bindParam(':vaga',         $this->vaga);
			$stmt->bindParam(':area', 		  $this->area);
			$stmt->bindParam(':descricao',    $this->descricao);
			$stmt->bindParam(':id', 		  $id);
			return $stmt->execute();
		    }
		catch(PDOException $e) 
			{
			   echo 'Error: ' . $e->getMessage();
 			   	
			}

	}
}