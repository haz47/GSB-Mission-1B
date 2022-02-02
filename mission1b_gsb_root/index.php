<?php
include("model/m_pdo.php");
include("vue/v_entete.php");
$pdo = PdoGsb::getPdoGsb();
if(!isset($_REQUEST['uc'])) 
    $uc = 'acceuil';

else 
    $uc = $_REQUEST['uc'];

switch($uc) 
{
    case 'acceuil':
        {include("controller/c_visiteur.php");break;}
}
