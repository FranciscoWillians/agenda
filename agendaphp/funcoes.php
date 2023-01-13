<!-- Isiniciando as funçõesno php. -->


<?php

/*
Função         :  O que faz? fornecer  variáveis, constantes e funções comuns
Desenvolvedor  :  Francisco Willians
Data           :  13/01/2023
Atualização    :  Atualizado       
*/

define("BANCO","AGENDA"); // Constante que contém o nome do banco dedados usado
define("USUARIO","agenda");//Constante que contém o nome do usuario dedados usado
define("SENHA","agenda");// Constante que contém o senha do banco dedados usado

// a função a seguir conectará a base de dados

function conecta ($BANCO,$USER,$PASS) {
    global $con;
    $con = @odbc_connect($BANCO,$USER,$PASS);

}

?>








