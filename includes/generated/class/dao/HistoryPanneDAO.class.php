<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
interface HistoryPanneDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return HistoryPanne 
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
 	 * @param historyPanne primary key
 	 */
	public function delete($idPanne);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param HistoryPanne historyPanne
 	 */
	public function insert($historyPanne);
	
	/**
 	 * Update record in table
 	 *
 	 * @param HistoryPanne historyPanne
 	 */
	public function update($historyPanne);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDatePanne($value);

	public function queryByTypeMaterielPanne($value);

	public function queryByUrgencePanne($value);

	public function queryByPeripheriquePanne($value);

	public function queryByDescriptifPane($value);

	public function queryByIdOrdinateurPanne($value);

	public function queryByIdentifiantConnect($value);


	public function deleteByDatePanne($value);

	public function deleteByTypeMaterielPanne($value);

	public function deleteByUrgencePanne($value);

	public function deleteByPeripheriquePanne($value);

	public function deleteByDescriptifPane($value);

	public function deleteByIdOrdinateurPanne($value);

	public function deleteByIdentifiantConnect($value);


}
?>