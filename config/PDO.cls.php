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

  public function exec($req,array $table_param){
    $res = DataBase::$monPdo->prepare($req);
    $res->execute($table_param);
    return $res->fetch(PDO::FETCH_ASSOC);

  }


}
