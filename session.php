<?php
session_start();
require_once"configBD.php";

if(isset($_SESSION['nomeDoUsuario'])){
    //logado
}else {

    header("location: index.php")
}