<?php
/**
 * Class that operate on table 'personnel'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
class PersonnelMySqlDAO implements PersonnelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return PersonnelMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM personnel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM personnel';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM personnel ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param personnel primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM personnel WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param PersonnelMySql personnel
 	 */
	public function insert($personnel){
		$sql = 'INSERT INTO personnel (mdp, login) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($personnel->mdp);
		$sqlQuery->set($personnel->login);

		$id = $this->executeInsert($sqlQuery);	
		$personnel->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param PersonnelMySql personnel
 	 */
	public function update($personnel){
		$sql = 'UPDATE personnel SET mdp = ?, login = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($personnel->mdp);
		$sqlQuery->set($personnel->login);

		$sqlQuery->setNumber($personnel->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM personnel';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMdp($value){
		$sql = 'SELECT * FROM personnel WHERE mdp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLogin($value){
		$sql = 'SELECT * FROM personnel WHERE login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMdp($value){
		$sql = 'DELETE FROM personnel WHERE mdp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLogin($value){
		$sql = 'DELETE FROM personnel WHERE login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return PersonnelMySql 
	 */
	protected function readRow($row){
		$personnel = new Personnel();
		
		$personnel->id = $row['id'];
		$personnel->mdp = $row['mdp'];
		$personnel->login = $row['login'];

		return $personnel;
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
	 * @return PersonnelMySql 
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