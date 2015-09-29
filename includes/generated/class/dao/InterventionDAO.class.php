<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
interface InterventionDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Intervention 
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
 	 * @param intervention primary key
 	 */
	public function delete($idIntervention);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Intervention intervention
 	 */
	public function insert($intervention);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Intervention intervention
 	 */
	public function update($intervention);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateIntervention($value);

	public function queryByMachineIntervention($value);

	public function queryByComposantSelectIntervention($value);

	public function queryByIdPanneIntervention($value);

	public function queryByRCCIntervention($value);

	public function queryByInfoIntervention($value);

	public function queryByIdintervenant($value);


	public function deleteByDateIntervention($value);

	public function deleteByMachineIntervention($value);

	public function deleteByComposantSelectIntervention($value);

	public function deleteByIdPanneIntervention($value);

	public function deleteByRCCIntervention($value);

	public function deleteByInfoIntervention($value);

	public function deleteByIdintervenant($value);


}
?>