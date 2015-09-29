<?php
/**
 * Class that operate on table 'ordinateur'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */

class OrdinateurMySqlDAO implements OrdinateurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return OrdinateurMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM ordinateur WHERE idOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM ordinateur';
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM ordinateur ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param ordinateur primary key
 	 */
	public function delete($idOrdinateur){
		$sql = 'DELETE FROM ordinateur WHERE idOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->setNumber($idOrdinateur);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param OrdinateurMySql ordinateur
 	 */
	public function insert($ordinateur){
		$sql = 'INSERT INTO ordinateur (refOrdinateur, CarteMere, Processeur, MemoireVive, DisqueDur, CarteReseau, Lecteur, CarteGraphique, CarteSon, Alimentation, numSerieOrdinateur, dateAchatOrdinateur, fournisseurOrdinateur, garantieOrdinateur, extentionGarantieOrdinateur) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($ordinateur->refOrdinateur);
		$sqlQuery->set($ordinateur->carteMere);
		$sqlQuery->set($ordinateur->processeur);
		$sqlQuery->set($ordinateur->memoireVive);
		$sqlQuery->set($ordinateur->disqueDur);
		$sqlQuery->set($ordinateur->carteReseau);
		$sqlQuery->set($ordinateur->lecteur);
		$sqlQuery->set($ordinateur->carteGraphique);
		$sqlQuery->set($ordinateur->carteSon);
		$sqlQuery->set($ordinateur->alimentation);
		$sqlQuery->set($ordinateur->numSerieOrdinateur);
		$sqlQuery->set($ordinateur->dateAchatOrdinateur);
		$sqlQuery->set($ordinateur->fournisseurOrdinateur);
		$sqlQuery->set($ordinateur->garantieOrdinateur);
		$sqlQuery->set($ordinateur->extentionGarantieOrdinateur);

		$id = $this->executeInsert($sqlQuery);	
		$ordinateur->idOrdinateur = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param OrdinateurMySql ordinateur
 	 */
	public function update($ordinateur){
		$sql = 'UPDATE ordinateur SET refOrdinateur = ?, CarteMere = ?, Processeur = ?, MemoireVive = ?, DisqueDur = ?, CarteReseau = ?, Lecteur = ?, CarteGraphique = ?, CarteSon = ?, Alimentation = ?, numSerieOrdinateur = ?, dateAchatOrdinateur = ?, fournisseurOrdinateur = ?, garantieOrdinateur = ?, extentionGarantieOrdinateur = ? WHERE idOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		
		$sqlQuery->set($ordinateur->refOrdinateur);
		$sqlQuery->set($ordinateur->carteMere);
		$sqlQuery->set($ordinateur->processeur);
		$sqlQuery->set($ordinateur->memoireVive);
		$sqlQuery->set($ordinateur->disqueDur);
		$sqlQuery->set($ordinateur->carteReseau);
		$sqlQuery->set($ordinateur->lecteur);
		$sqlQuery->set($ordinateur->carteGraphique);
		$sqlQuery->set($ordinateur->carteSon);
		$sqlQuery->set($ordinateur->alimentation);
		$sqlQuery->set($ordinateur->numSerieOrdinateur);
		$sqlQuery->set($ordinateur->dateAchatOrdinateur);
		$sqlQuery->set($ordinateur->fournisseurOrdinateur);
		$sqlQuery->set($ordinateur->garantieOrdinateur);
		$sqlQuery->set($ordinateur->extentionGarantieOrdinateur);

		$sqlQuery->setNumber($ordinateur->idOrdinateur);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM ordinateur';
		$sqlQuery = new SqlQuery($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryByRefOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE refOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCarteMere($value){
		$sql = 'SELECT * FROM ordinateur WHERE CarteMere = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByProcesseur($value){
		$sql = 'SELECT * FROM ordinateur WHERE Processeur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByMemoireVive($value){
		$sql = 'SELECT * FROM ordinateur WHERE MemoireVive = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDisqueDur($value){
		$sql = 'SELECT * FROM ordinateur WHERE DisqueDur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCarteReseau($value){
		$sql = 'SELECT * FROM ordinateur WHERE CarteReseau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByLecteur($value){
		$sql = 'SELECT * FROM ordinateur WHERE Lecteur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCarteGraphique($value){
		$sql = 'SELECT * FROM ordinateur WHERE CarteGraphique = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByCarteSon($value){
		$sql = 'SELECT * FROM ordinateur WHERE CarteSon = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAlimentation($value){
		$sql = 'SELECT * FROM ordinateur WHERE Alimentation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByNumSerieOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE numSerieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateAchatOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE dateAchatOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByFournisseurOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE fournisseurOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByGarantieOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE garantieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByExtentionGarantieOrdinateur($value){
		$sql = 'SELECT * FROM ordinateur WHERE extentionGarantieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}


	public function deleteByRefOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE refOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCarteMere($value){
		$sql = 'DELETE FROM ordinateur WHERE CarteMere = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByProcesseur($value){
		$sql = 'DELETE FROM ordinateur WHERE Processeur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByMemoireVive($value){
		$sql = 'DELETE FROM ordinateur WHERE MemoireVive = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDisqueDur($value){
		$sql = 'DELETE FROM ordinateur WHERE DisqueDur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCarteReseau($value){
		$sql = 'DELETE FROM ordinateur WHERE CarteReseau = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByLecteur($value){
		$sql = 'DELETE FROM ordinateur WHERE Lecteur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCarteGraphique($value){
		$sql = 'DELETE FROM ordinateur WHERE CarteGraphique = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByCarteSon($value){
		$sql = 'DELETE FROM ordinateur WHERE CarteSon = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAlimentation($value){
		$sql = 'DELETE FROM ordinateur WHERE Alimentation = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByNumSerieOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE numSerieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateAchatOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE dateAchatOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByFournisseurOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE fournisseurOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByGarantieOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE garantieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByExtentionGarantieOrdinateur($value){
		$sql = 'DELETE FROM ordinateur WHERE extentionGarantieOrdinateur = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return OrdinateurMySql 
	 */
	protected function readRow($row){
		$ordinateur = new Ordinateur();
		
		$ordinateur->idOrdinateur = $row['idOrdinateur'];
		$ordinateur->refOrdinateur = $row['refOrdinateur'];
		$ordinateur->carteMere = $row['CarteMere'];
		$ordinateur->processeur = $row['Processeur'];
		$ordinateur->memoireVive = $row['MemoireVive'];
		$ordinateur->disqueDur = $row['DisqueDur'];
		$ordinateur->carteReseau = $row['CarteReseau'];
		$ordinateur->lecteur = $row['Lecteur'];
		$ordinateur->carteGraphique = $row['CarteGraphique'];
		$ordinateur->carteSon = $row['CarteSon'];
		$ordinateur->alimentation = $row['Alimentation'];
		$ordinateur->numSerieOrdinateur = $row['numSerieOrdinateur'];
		$ordinateur->dateAchatOrdinateur = $row['dateAchatOrdinateur'];
		$ordinateur->fournisseurOrdinateur = $row['fournisseurOrdinateur'];
		$ordinateur->garantieOrdinateur = $row['garantieOrdinateur'];
		$ordinateur->extentionGarantieOrdinateur = $row['extentionGarantieOrdinateur'];

		return $ordinateur;
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
	 * @return OrdinateurMySql 
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