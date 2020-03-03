<?php
include('./views/req/header.php');
include('./views/req/menu.php');
include('./views/req/footer.php');


if(isset($_REQUEST['page'])){
  if(buttonClick("valide")){

  }

  if(buttonClick("inscription")){
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
