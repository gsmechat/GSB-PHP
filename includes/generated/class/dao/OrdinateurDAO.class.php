<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
interface OrdinateurDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Ordinateur 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param ordinateur primary key
 	 */
	public function delete($idOrdinateur);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Ordinateur ordinateur
 	 */
	public function insert($ordinateur);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Ordinateur ordinateur
 	 */
	public function update($ordinateur);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByRefOrdinateur($value);

	public function queryByCarteMere($value);

	public function queryByProcesseur($value);

	public function queryByMemoireVive($value);

	public function queryByDisqueDur($value);

	public function queryByCarteReseau($value);

	public function queryByLecteur($value);

	public function queryByCarteGraphique($value);

	public function queryByCarteSon($value);

	public function queryByAlimentation($value);

	public function queryByNumSerieOrdinateur($value);

	public function queryByDateAchatOrdinateur($value);

	public function queryByFournisseurOrdinateur($value);

	public function queryByGarantieOrdinateur($value);

	public function queryByExtentionGarantieOrdinateur($value);


	public function deleteByRefOrdinateur($value);

	public function deleteByCarteMere($value);

	public function deleteByProcesseur($value);

	public function deleteByMemoireVive($value);

	public function deleteByDisqueDur($value);

	public function deleteByCarteReseau($value);

	public function deleteByLecteur($value);

	public function deleteByCarteGraphique($value);

	public function deleteByCarteSon($value);

	public function deleteByAlimentation($value);

	public function deleteByNumSerieOrdinateur($value);

	public function deleteByDateAchatOrdinateur($value);

	public function deleteByFournisseurOrdinateur($value);

	public function deleteByGarantieOrdinateur($value);

	public function deleteByExtentionGarantieOrdinateur($value);


}
?>