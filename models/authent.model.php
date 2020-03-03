<?php
getEnity("User");

function registrer($iden, $mdp){
    $_SESSION['user_info'] = new User($iden, $mdp);
}
