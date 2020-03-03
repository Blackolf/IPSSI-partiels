<?php
include('./views/req/header.php');
include('./views/req/menu.php');
include('./views/req/footer.php');


if(isset($_REQUEST['page']) && $_REQUEST['btn'] ){
  getModels("authent");
  $btn = $_REQUEST['btn'];
  if(buttonClick("valide") &&  $btn == "valide"){
    $iden = $_POST['loign'];
    $mdp  = $_POST['mdp'];

    try {
      registrer($iden, $mdp);
    } catch (\Exception $e) {
      $MessageError = $e->getMessage();
    }

  }

  if(buttonClick("inscription") && $btn == "inscription"){
    $_REQUEST['action'] = "inscription" ;
  }
}


if(!isset($_REQUEST['action'])){
  getViews("identifier");
}else {
  switch ($_REQUEST['action']) {
    case 'inscription':
    getViews("inscription");

      break;

    case 'login':
    default:
    getViews("identifier");
      break;
  }
}
