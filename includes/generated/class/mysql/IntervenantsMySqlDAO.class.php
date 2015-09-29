<?php
/**
 * Class that operate on table 'intervenants'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
class IntervenantsMySqlDAO implements IntervenantsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return IntervenantsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM intervenants WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM intervenants';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM intervenants ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param intervenant primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM intervenants WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param IntervenantsMySql intervenant
 	 */
	public function insert($intervenant){
		$sql = 'INSERT INTO intervenants (mdp, login) VALUES (?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($intervenant->mdp);
		$sqlQuery->set($intervenant->login);

		$id = $this->executeInsert($sqlQuery);	
		$intervenant->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param IntervenantsMySql intervenant
 	 */
	public function update($intervenant){
		$sql = 'UPDATE intervenants SET mdp = ?, login = ? WHERE id = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($intervenant->mdp);
		$sqlQuery->set($intervenant->login);

		$sqlQuery->setNumber($intervenant->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM intervenants';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByMdp($value){
		$sql = 'SELECT * FROM intervenants WHERE mdp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLogin($value){
		$sql = 'SELECT * FROM intervenants WHERE login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByMdp($value){
		$sql = 'DELETE FROM intervenants WHERE mdp = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLogin($value){
		$sql = 'DELETE FROM intervenants WHERE login = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return IntervenantsMySql 
	 */
	protected function readRow($row){
		$intervenant = new Intervenant();
		
		$intervenant->id = $row['id'];
		$intervenant->mdp = $row['mdp'];
		$intervenant->login = $row['login'];

		return $intervenant;
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
	 * @return IntervenantsMySql 
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