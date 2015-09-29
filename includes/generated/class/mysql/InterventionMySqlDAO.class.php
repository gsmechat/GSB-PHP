<?php
/**
 * Class that operate on table 'intervention'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
class InterventionMySqlDAO implements InterventionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return InterventionMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM intervention WHERE idIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM intervention';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM intervention ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param intervention primary key
 	 */
	public function delete($idIntervention){
		$sql = 'DELETE FROM intervention WHERE idIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idIntervention);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param InterventionMySql intervention
 	 */
	public function insert($intervention){
		$sql = 'INSERT INTO intervention (dateIntervention, machineIntervention, composantSelectIntervention, idPanneIntervention, RCCIntervention, infoIntervention, idintervenant) VALUES (?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($intervention->dateIntervention);
		$sqlQuery->set($intervention->machineIntervention);
		$sqlQuery->set($intervention->composantSelectIntervention);
		$sqlQuery->setNumber($intervention->idPanneIntervention);
		$sqlQuery->set($intervention->rCCIntervention);
		$sqlQuery->set($intervention->infoIntervention);
		$sqlQuery->set($intervention->idintervenant);

		$id = $this->executeInsert($sqlQuery);	
		$intervention->idIntervention = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param InterventionMySql intervention
 	 */
	public function update($intervention){
		$sql = 'UPDATE intervention SET dateIntervention = ?, machineIntervention = ?, composantSelectIntervention = ?, idPanneIntervention = ?, RCCIntervention = ?, infoIntervention = ?, idintervenant = ? WHERE idIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($intervention->dateIntervention);
		$sqlQuery->set($intervention->machineIntervention);
		$sqlQuery->set($intervention->composantSelectIntervention);
		$sqlQuery->setNumber($intervention->idPanneIntervention);
		$sqlQuery->set($intervention->rCCIntervention);
		$sqlQuery->set($intervention->infoIntervention);
		$sqlQuery->set($intervention->idintervenant);

		$sqlQuery->setNumber($intervention->idIntervention);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM intervention';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByDateIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE dateIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMachineIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE machineIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByComposantSelectIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE composantSelectIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdPanneIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE idPanneIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByRCCIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE RCCIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByInfoIntervention($value){
		$sql = 'SELECT * FROM intervention WHERE infoIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByIdintervenant($value){
		$sql = 'SELECT * FROM intervention WHERE idintervenant = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByDateIntervention($value){
		$sql = 'DELETE FROM intervention WHERE dateIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMachineIntervention($value){
		$sql = 'DELETE FROM intervention WHERE machineIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByComposantSelectIntervention($value){
		$sql = 'DELETE FROM intervention WHERE composantSelectIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdPanneIntervention($value){
		$sql = 'DELETE FROM intervention WHERE idPanneIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByRCCIntervention($value){
		$sql = 'DELETE FROM intervention WHERE RCCIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByInfoIntervention($value){
		$sql = 'DELETE FROM intervention WHERE infoIntervention = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByIdintervenant($value){
		$sql = 'DELETE FROM intervention WHERE idintervenant = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return InterventionMySql 
	 */
	protected function readRow($row){
		$intervention = new Intervention();
		
		$intervention->idIntervention = $row['idIntervention'];
		$intervention->dateIntervention = $row['dateIntervention'];
		$intervention->machineIntervention = $row['machineIntervention'];
		$intervention->composantSelectIntervention = $row['composantSelectIntervention'];
		$intervention->idPanneIntervention = $row['idPanneIntervention'];
		$intervention->rCCIntervention = $row['RCCIntervention'];
		$intervention->infoIntervention = $row['infoIntervention'];
		$intervention->idintervenant = $row['idintervenant'];

		return $intervention;
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
	 * @return InterventionMySql 
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