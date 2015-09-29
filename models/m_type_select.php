<?php


include("../includes/generated/include_dao.php");
session_start();
$type_select = $_GET['type_select'];
$refOrdi = $_SESSION["refOrdi"];

$_SESSION['type_select'] = $type_select;

//$ordi = DAOFactory::getOrdinateurDAO()->load($id);  
//$refOrdi = $ordi->refOrdinateur;
$ordiPanne = DAOFactory::getPanneDAO()->queryByIdOrdinateurPanne($refOrdi);  
$typeMatPanne = DAOFactory::getPanneDAO()->queryByTypeMaterielPanne($type_select);



?>


	

<div class="col-lg-3">
                            <label>Id Panne: </label>
                                <select name='idPanne' required="required" class="form-control">
                                <option value=''></option>
                                <?php
                                    for($i=0;$i<count($ordiPanne);$i++){
                                        $row = $ordiPanne[$i];
                                       // if($row->typeMaterielPanne === $type_select)
                                			echo"<option value=".$row->idPanne.">".$row->idPanne."</option>";
                                }
                                ?>
                                </select>
                          </div>
	
