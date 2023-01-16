<?
/*
Função         : eAutenticar o usuário
Desenvolvedor  :  Francisco Willians
Data           :  13/01/2023
Atualização    :  Atualizado       
*/

session_start();  //inicia a sessão 
include("funcoes.php");  // incli o arquivo funções

//Função que autentica o usuario

function autentica_usuario( $USUARIO, $SENHA ) {

    global $con;
    $valor=false;

    //Compara o usuario e senha recebidos com as contantes definidas no //funcoes.php

    if  (($USUARIO=USUARIO)&&($senha=SENHA)) {


        $valor=true;
    } else {
        $valor=false;
    }

    return $valor; // retorna o resultado 

}

//corpo principal do script

$login = trim($_POST['LOGIN']);  // RECEBE O LOGIN
$login = trim($_POST['SENHA']);  // RECEBE SENHA

if(($login!="")&&($login!=NULL)) {     //testa o login
    

    //chama a função autentica_usuario

    if  (autentica_usuario($login,$senha)) {
        $_SESSION['USUARIO'] = $login; //grava o login na sessão 
        header("location:listar.php"); // dirteciona dara a agenda

    }  else {
        header("location: index.php"); //direciona para tela inicial
    } 
    
}

?>







?>