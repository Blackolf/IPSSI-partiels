<?php

function getViews($file_name){
  if(file_exists (VIEW_DIR . $file_name.'.html')){
    $file_include =  VIEW_DIR.$file_name.'.html';
  }elseif(file_exists (VIEW_DIR . $file_name.'.php')) {
    $file_include =  VIEW_DIR.$file_name.'.php';
  }

  if(isset($file_include)){
    include($file_include);
  }else {
    include(VIEW_DIR.'404.php');
  }
}

function getController($con){
  include(CON_DIR.$con.".con.php");
}

function getModels($mdl){
  include("./config/PDO.clas.php");

  include(MOD_DIR.$mdl.".model.php");
}




function buttonClick($btn){
  return isset($btn);
}
