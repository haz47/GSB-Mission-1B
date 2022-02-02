<?php

if(!isset($_REQUEST['action'])) 
    $action = 'acceuil';

else
    $action = $_REQUEST['action'];

switch ($action) {
    case 'acceuil':
        {
            $lestypesfrais=$pdo->getTypeFrais();
            $lesnumero=$pdo->getIdVisiteur();
            //var_dump($lestypesfrais);
            include("vue/v_visiteur.php");
            break;
        }
    case 'valider':
        {
            /* var_dump($_REQUEST); */
            $num = $_REQUEST['numero'];
            $type = $_REQUEST['typefrais'];
            $lesCounts = $pdo->getCount();
            /* var_dump($lesCounts); */
            $lesmois=$pdo->getMois($num,$type);
            /* var_dump($lesmois); */
            include("vue/v_visiteur.php");
            break;
        }
}
?>