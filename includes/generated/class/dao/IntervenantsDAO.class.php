<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-23 17:33
 */
interface IntervenantsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return Intervenants 
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
 	 * @param intervenant primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param Intervenants intervenant
 	 */
	public function insert($intervenant);
	
	/**
 	 * Update record in table
 	 *
 	 * @param Intervenants intervenant
 	 */
	public function update($intervenant);	

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