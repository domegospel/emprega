<?php

require_once 'DB.php';

abstract class Crud extends DB{

	protected $table;

	abstract public function insert();
	abstract public function update($id);

	public function find($id){
		try {
			$sql  = "SELECT * FROM $this->table WHERE id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function findAll(){
		try {
			$sql  = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
			}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

	public function delete($id){
		try {
			$sql  = "DELETE FROM $this->table WHERE id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			return $stmt->execute(); 
				}
		catch(PDOException $e) 
			{
			echo 'Error: ' . $e->getMessage();
			}
	}

}