<?php
class DataBase {
  private static $serveur='localhost';
  private static $bdd='Partiel';
  private static $user='root' ;
  private static $mdp='' ;
  private static $monPdo;
  private static $monDataBase=null;

  private function __construct(){
    DataBase::$monPdo = new PDO(DataBase::$serveur.';'.DataBase::$bdd, DataBase::$user, DataBase::$mdp);
    DataBase::$monPdo->query("SET CHARACTER SET utf8");
  }
  public function _destruct(){
    DataBase::$monPdo = null;
  }

  public static function getDataBase(){
    if(DataBase::$monDataBase==null){
      DataBase::$monDataBase= new DataBase();
    }
    return DataBase::$monDataBase;
  }

  public function query_req($req,array $table_param){
    DataBase::$monPdo->prepare($req);
    DataBase::$monPdo->execute($table_param);
  }

  public function fetch(){
    return DataBase::$monPdo->fetch(PDO::FETCH_ASSOC);
  }

  public function add_param(array &$table_param , $new_param){
    $size = count($table_param);
    $table_param['$'.($size+1)] = $new_param ;
  }




}
