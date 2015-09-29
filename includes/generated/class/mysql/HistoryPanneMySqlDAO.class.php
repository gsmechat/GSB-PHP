<?php
/**
 * Class that operate on table 'HistoryPanne'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
class HistoryPanneMySqlDAO implements HistoryPanneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return HistoryPanneMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM HistoryPanne WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM HistoryPanne';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM HistoryPanne ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param historyPanne primary key
 	 */
	public function delete($idPanne){
		$sql = 'DELETE FROM HistoryPanne WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idPanne);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param HistoryPanneMySql historyPanne
 	 */
	public function insert($historyPanne){
		$sql = 'INSERT INTO HistoryPanne (datePanne, typeMaterielPanne, urgencePanne, peripheriquePanne, DescriptifPane, IdOrdinateurPanne, identifiantConnect) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($historyPanne->datePanne);
		$sqlQuery->set($historyPanne->typeMaterielPanne);
		$sqlQuery->set($historyPanne->urgencePanne);
		$sqlQuery->set($historyPanne->peripheriquePanne);
		$sqlQuery->set($historyPanne->descriptifPane);
		$sqlQuery->set($historyPanne->idOrdinateurPanne);
		$sqlQuery->set($historyPanne->identifiantConnect);

		$id = $this->executeInsert($sqlQuery);	
		$historyPanne->idPanne = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param HistoryPanneMySql historyPanne
 	 */
	public function update($historyPanne){
		$sql = 'UPDATE HistoryPanne SET datePanne = ?, typeMaterielPanne = ?, urgencePanne = ?, peripheriquePanne = ?, DescriptifPane = ?, IdOrdinateurPanne = ?, identifiantConnect = ? WHERE idPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($historyPanne->datePanne);
		$sqlQuery->set($historyPanne->typeMaterielPanne);
		$sqlQuery->set($historyPanne->urgencePanne);
		$sqlQuery->set($historyPanne->peripheriquePanne);
		$sqlQuery->set($historyPanne->descriptifPane);
		$sqlQuery->set($historyPanne->idOrdinateurPanne);
		$sqlQuery->set($historyPanne->identifiantConnect);

		$sqlQuery->setNumber($historyPanne->idPanne);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM HistoryPanne';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDatePanne($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE datePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTypeMaterielPanne($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE typeMaterielPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByUrgencePanne($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE urgencePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByPeripheriquePanne($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE peripheriquePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDescriptifPane($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE DescriptifPane = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdOrdinateurPanne($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE IdOrdinateurPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdentifiantConnect($value){
		$sql = 'SELECT * FROM HistoryPanne WHERE identifiantConnect = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDatePanne($value){
		$sql = 'DELETE FROM HistoryPanne WHERE datePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByTypeMaterielPanne($value){
		$sql = 'DELETE FROM HistoryPanne WHERE typeMaterielPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByUrgencePanne($value){
		$sql = 'DELETE FROM HistoryPanne WHERE urgencePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByPeripheriquePanne($value){
		$sql = 'DELETE FROM HistoryPanne WHERE peripheriquePanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDescriptifPane($value){
		$sql = 'DELETE FROM HistoryPanne WHERE DescriptifPane = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdOrdinateurPanne($value){
		$sql = 'DELETE FROM HistoryPanne WHERE IdOrdinateurPanne = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdentifiantConnect($value){
		$sql = 'DELETE FROM HistoryPanne WHERE identifiantConnect = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return HistoryPanneMySql 
	 */
	protected function readRow($row){
		$historyPanne = new HistoryPanne();
		
		$historyPanne->idPanne = $row['idPanne'];
		$historyPanne->datePanne = $row['datePanne'];
		$historyPanne->typeMaterielPanne = $row['typeMaterielPanne'];
		$historyPanne->urgencePanne = $row['urgencePanne'];
		$historyPanne->peripheriquePanne = $row['peripheriquePanne'];
		$historyPanne->descriptifPane = $row['DescriptifPane'];
		$historyPanne->idOrdinateurPanne = $row['IdOrdinateurPanne'];
		$historyPanne->identifiantConnect = $row['identifiantConnect'];

		return $historyPanne;
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
	 * @return HistoryPanneMySql 
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