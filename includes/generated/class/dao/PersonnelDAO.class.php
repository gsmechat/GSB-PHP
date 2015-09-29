<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
interface PersonnelDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Personnel 
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
 	 * @param personnel primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Personnel personnel
 	 */
	public function insert($personnel);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Personnel personnel
 	 */
	public function update($personnel);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByMdp($value);

	public function queryByLogin($value);


	public function deleteByMdp($value);

	public function deleteByLogin($value);


}
?>