
<?php

/*
Função         :  Listar os nomes cadastrados na agenda
Desenvolvedor  :  Francisco Willians
Data           :  13/01/2023
Atualização    :  Atualizado       
*/

session_start(); //inicia a sessão
include("funcoes.php");  // inclui o arquivo funções 

//listar nomes da agenda

function listar_agenda(){
    global $con;
    $valor = "";
    $sql = "SELECT ID, NOME, ENDERECO, DDD, FONE, EMAIL, OBSERVACOES, DATA, FROM Agenda";
    $result = odbc_exec( $con, $sql); 
    if(!$result){
        $valor = 0;   
    } else {
        while( odbc_fetch_row($result)) {
            $valor.= "<tr>
            <td class=\"default\"><a href=\"editar.php?ID=".odbc_result($result,1)."\">Editar</a></td>
              
            <td class=\"default\"><a href=\"#\"onClick=\"window.open(detalhes.php?ID=".odbc_result($result,1)."','Detalhes','width=350,height=200')\">".odbc_result( $result, 2)."</a></td>
            
            <td class=\"default\"><a href=\"#\"onClick=\"window.open(detalhes.php?ID=".odbc_result($result,1)."','Detalhes','width=350,height=200')\">".odbc_result( $result, 6)."</a></td>

            <td class=\"default\"><a href=\"#\"onClick=\"window.open(detalhes.php?ID=".odbc_result($result,1)."','Detalhes','width=350,height=200')\">".odbc_result( $result, 4)."</a></td>
            <td class=\"default\"><a href=\"#\"onClick=\"window.open('excluir.php?ID=".odbc_result($result,1)."','Detalhes','width=1,height=1')\">Excluir</a></td>
              </tr>";


        }
    }
return $valor;

}
//corpo principal do script

$usuario = trim($_SESSION['USUARIO']);  //recebe os dados da sessão

if(($usuario != "")&&($usuario!="")) { //testa o usuario

    if(!$con) {  // testa se existe conexão


        //conecta ao banco
        conecta("BANCO","USUARIO","SENHA");  //conectando ao banco
    }

    //grava a saida da função na variável

    $linhas= listar_agenda();

// abaixo o html

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda PHP</title>
    <link rel="stylesheet" href="listar.css">
</head>

<body>
<table>
    <tr>
        <td class="td1">

<?php
//incluindo o menu

include("menu.html");

?>
     </td></tr>

<td class="td2"> 
    <table class="table2">
        <tr>
            <div class="headers">
            <td class="Editar"><b><a href="#">Editar</a></b></td>
            <td class="Nome"><b><a href="#">Nome</a></b></td>
            <td class="Email"><b><a href="#">Email</a></b></td>
            <td class="Fone"><b><a href="#">Fone</a></b></td>
            <td class="Exclui"><b><a href="#">Exclui</a></b></td>
            </div>
        </tr>
        <?=$linhas?>
    </table>
</td>
</tr>
</table>
</body>
</html>

<?php
} else {
    //direciona para tela inicial

    header("location: index.php");

}
?>