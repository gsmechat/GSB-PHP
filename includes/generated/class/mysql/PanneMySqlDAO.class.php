<?php
/**
 * Class that operate on table 'Panne'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
class PanneMySqlDAO implements PanneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PanneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM Panne WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM Panne';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM Panne ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param panne primary key
 	 */
	public function delete($idPanne){
		$sql = 'DELETE FROM Panne WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPanne);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PanneMySql panne
 	 */
	public function insert($panne){
		$sql = 'INSERT INTO Panne (datePanne, typeMaterielPanne, urgencePanne, peripheriquePanne, DescriptifPane, IdOrdinateurPanne, identifiantConnect) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($panne->datePanne);
		$sqlQuery->set($panne->typeMaterielPanne);
		$sqlQuery->set($panne->urgencePanne);
		$sqlQuery->set($panne->peripheriquePanne);
		$sqlQuery->set($panne->descriptifPane);
		$sqlQuery->set($panne->idOrdinateurPanne);
		$sqlQuery->set($panne->identifiantConnect);

		$id = $this->executeInsert($sqlQuery);	
		$panne->idPanne = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PanneMySql panne
 	 */
	public function update($panne){
		$sql = 'UPDATE Panne SET datePanne = ?, typeMaterielPanne = ?, urgencePanne = ?, peripheriquePanne = ?, DescriptifPane = ?, IdOrdinateurPanne = ?, identifiantConnect = ? WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($panne->datePanne);
		$sqlQuery->set($panne->typeMaterielPanne);
		$sqlQuery->set($panne->urgencePanne);
		$sqlQuery->set($panne->peripheriquePanne);
		$sqlQuery->set($panne->descriptifPane);
		$sqlQuery->set($panne->idOrdinateurPanne);
		$sqlQuery->set($panne->identifiantConnect);

		$sqlQuery->setNumber($panne->idPanne);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM Panne';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDatePanne($value){
		$sql = 'SELECT * FROM Panne WHERE datePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeMaterielPanne($value){
		$sql = 'SELECT * FROM Panne WHERE typeMaterielPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrgencePanne($value){
		$sql = 'SELECT * FROM Panne WHERE urgencePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPeripheriquePanne($value){
		$sql = 'SELECT * FROM Panne WHERE peripheriquePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescriptifPane($value){
		$sql = 'SELECT * FROM Panne WHERE DescriptifPane = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdOrdinateurPanne($value){
		$sql = 'SELECT * FROM Panne WHERE IdOrdinateurPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdentifiantConnect($value){
		$sql = 'SELECT * FROM Panne WHERE identifiantConnect = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDatePanne($value){
		$sql = 'DELETE FROM Panne WHERE datePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeMaterielPanne($value){
		$sql = 'DELETE FROM Panne WHERE typeMaterielPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrgencePanne($value){
		$sql = 'DELETE FROM Panne WHERE urgencePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPeripheriquePanne($value){
		$sql = 'DELETE FROM Panne WHERE peripheriquePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescriptifPane($value){
		$sql = 'DELETE FROM Panne WHERE DescriptifPane = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdOrdinateurPanne($value){
		$sql = 'DELETE FROM Panne WHERE IdOrdinateurPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdentifiantConnect($value){
		$sql = 'DELETE FROM Panne WHERE identifiantConnect = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PanneMySql 
	 */
	protected function readRow($row){
		$panne = new Panne();
		
		$panne->idPanne = $row['idPanne'];
		$panne->datePanne = $row['datePanne'];
		$panne->typeMaterielPanne = $row['typeMaterielPanne'];
		$panne->urgencePanne = $row['urgencePanne'];
		$panne->peripheriquePanne = $row['peripheriquePanne'];
		$panne->descriptifPane = $row['DescriptifPane'];
		$panne->idOrdinateurPanne = $row['IdOrdinateurPanne'];
		$panne->identifiantConnect = $row['identifiantConnect'];

		return $panne;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return PanneMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor::executeInsert($sqlQuery);
	}
}
?>