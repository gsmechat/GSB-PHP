<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory{
	
	/**
	 * @return HistoryPanneDAO
	 */
	public static function getHistoryPanneDAO(){
		return new HistoryPanneMySqlExtDAO();
	}

	/**
	 * @return PanneDAO
	 */
	public static function getPanneDAO(){
		return new PanneMySqlExtDAO();
	}

	/**
	 * @return IntervenantsDAO
	 */
	public static function getIntervenantsDAO(){
		return new IntervenantsMySqlExtDAO();
	}

	/**
	 * @return InterventionDAO
	 */
	public static function getInterventionDAO(){
		return new InterventionMySqlExtDAO();
	}

	/**
	 * @return OrdinateurDAO
	 */
	public static function getOrdinateurDAO(){
		return new OrdinateurMySqlExtDAO();
	}

	/**
	 * @return PersonnelDAO
	 */
	public static function getPersonnelDAO(){
		return new PersonnelMySqlExtDAO();
	}


}
?>