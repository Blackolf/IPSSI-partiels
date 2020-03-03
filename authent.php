<?php
require_once('views/req/req.php');

if(!isset($_SESSION['user_info'])){
  getController('authent');
}else{
  getController("accueil");
}
