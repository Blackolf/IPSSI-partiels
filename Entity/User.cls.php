<?php

include("./config/PDO.cls.php");

/**
 *
 */
class User
{
  private $id_user ;
  private $rank ;

  private function __construct($data){
    $this->rank = $data['rank'];
    $this->id_user = $data['id_user'];
  }

  public function login($iden, $mdp){
    $table_param = array();
    add_param($table_param, $iden);
    add_param($table_param, $mdp);

    $bdd = DataBase::getDataBase();

    $req = 'SELECT id_user ,rank
            FROM USER
            WHERE ident = p1
            AND password = p2';

    $res = $bdd->exec($req1,$table_param);

    if (( count($res) == 0
        || is_null($res['rank'])
        || is_null($res['id_user']) ) == false ){
      $_SESSION['user_info'] = new User;
    }

  }



}
