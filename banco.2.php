<?php
class Banco {
	private $pdo;
	private $numRows;
	private $resultado;

	public function __construct($host, $dbname, $dbuser, $dbpass) {
		try {
			$this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $dbuser, $dbpass);
		} catch(PDOException $e) {
			echo "Falhou: ".$e->getMessage();
		}
	}
	public function query($sql) {
		$query = $this->pdo->query($sql);
		$this->numRows = $query->rowCount();
		$this->resultado = $query->fetchAll();
	}
	public function result() {
		return $this->resultado;
	}
	public function numRows() {
		return $this->numRows;
	}
	public function insert($table, $data) {
		if(!empty($table) && ( is_array($data) && count($data) > 0)) {
			$sql = "INSERT INTO ".$table." SET ";
			$array = array();
			foreach($data as $chave => $valor) {
				$dados[] = $chave." = '".addslashes($valor)."'";
			}
			$sql .= implode(", ", $dados);
			echo $sql;
		}
	}
	public function update($table, $data, $where = array(), $where_cond = "AND") {
		if(!empty($table) && ( is_array($data) && count($data) > 0) && is_array($where)) {
			$sql = "UPDATE ".$table." SET ";
			$array = array();
			foreach($data as $chave => $valor) {
				$dados[] = $chave." = '".addslashes($valor)."'";
			}
			$sql .= implode(", ", $dados);
			if(count($where) > 0) {
				$array = array();
				foreach($where as $chave => $valor) {
					$dados[] = $chave." = '".addslashes($valor)."'";
				}
			$sql .= " WHERE ".implode(" ".$where_cond." ", $dados);
			}
			echo $sql;
		}
	}
	public function delete($table, $data, $where, $where_cond = "AND") {
		if(!empty($table) && ( is_array($where) && count($where) > 0)) {
			$sql = "DELETE FROM ".$table;
			$array = array();
			foreach($where as $chave => $valor) {
				$dados[] = $chave." = '".addslashes($valor)."'";
			}
			$sql .= " WHERE ".implode(" ".$where_cond." ", $dados);
		}
		echo $sql;
	}
}


?>