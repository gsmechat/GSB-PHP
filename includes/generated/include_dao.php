<?php
	//include all DAO files
	require_once('class/sql/Connection.class.php');
	require_once('class/sql/ConnectionFactory.class.php');
	require_once('class/sql/ConnectionProperty.class.php');
	require_once('class/sql/QueryExecutor.class.php');
	require_once('class/sql/Transaction.class.php');
	require_once('class/sql/SqlQuery.class.php');
	require_once('class/core/ArrayList.class.php');
	require_once('class/dao/DAOFactory.class.php');
 	
	require_once('class/dao/HistoryPanneDAO.class.php');
	require_once('class/dto/HistoryPanne.class.php');
	require_once('class/mysql/HistoryPanneMySqlDAO.class.php');
	require_once('class/mysql/ext/HistoryPanneMySqlExtDAO.class.php');
	require_once('class/dao/PanneDAO.class.php');
	require_once('class/dto/Panne.class.php');
	require_once('class/mysql/PanneMySqlDAO.class.php');
	require_once('class/mysql/ext/PanneMySqlExtDAO.class.php');
	require_once('class/dao/IntervenantsDAO.class.php');
	require_once('class/dto/Intervenant.class.php');
	require_once('class/mysql/IntervenantsMySqlDAO.class.php');
	require_once('class/mysql/ext/IntervenantsMySqlExtDAO.class.php');
	require_once('class/dao/InterventionDAO.class.php');
	require_once('class/dto/Intervention.class.php');
	require_once('class/mysql/InterventionMySqlDAO.class.php');
	require_once('class/mysql/ext/InterventionMySqlExtDAO.class.php');
	require_once('class/dao/OrdinateurDAO.class.php');
	require_once('class/dto/Ordinateur.class.php');
	require_once('class/mysql/OrdinateurMySqlDAO.class.php');
	require_once('class/mysql/ext/OrdinateurMySqlExtDAO.class.php');
	require_once('class/dao/PersonnelDAO.class.php');
	require_once('class/dto/Personnel.class.php');
	require_once('class/mysql/PersonnelMySqlDAO.class.php');
	require_once('class/mysql/ext/PersonnelMySqlExtDAO.class.php');

?>